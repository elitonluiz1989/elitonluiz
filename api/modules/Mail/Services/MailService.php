<?php
namespace Modules\Mail\Services;

use PHPMailer\PHPMailer\PHPMailer;

class MailService
{
    /**
     * @var PHPMailer
     */
    private $mailer;

    /**
     * @var array
     */
    private $data;

    /**
     * MailService constructor.
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->boot();
    }

    public function send()
    {
        try {
            $this->prepareData();

            $this->mailer->send();

            return 'Email enviado';
        } catch (\Exception $e) {
            return $this->mailer->ErrorInfo;
        }
    }

    private function boot()
    {
        $config = config('mail');

        $this->mailer = new PHPMailer($config['enable_exceptions']);
        $this->mailer->SMTPDebug = $config['smtp_debug'] || 2;
        $this->mailer->isSMTP();
        $this->mailer->Host = $config['host'];
        $this->mailer->SMTPAuth = $config['smtp_auth'] || true;
        $this->mailer->username = $config['username'];
        $this->mailer->password = $config['password'];
        $this->mailer->SMTPAuth = $config['smtp_secure'] || 'tls';
        $this->mailer->Port = $config['port'] || 587;
    }

    private function prepareData()
    {
        $fromName = filter_var($this->data['name'], FILTER_SANITIZE_STRING);
        $fromEmail = filter_var($this->data['email'], FILTER_SANITIZE_EMAIL);
        $fromMessage = filter_var($this->data['message'], FILTER_SANITIZE_STRING);

        $this->mailer->setFrom($fromEmail, $fromName);
        $this->mailer->isHTML(true);
        $this->mailer->Subject = 'Contato - Site Pessoal';
        $this->mailer->Body = $fromMessage;
        $this->mailer->AltBody = $fromMessage;
    }
}