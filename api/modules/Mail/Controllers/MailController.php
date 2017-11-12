<?php
namespace Modules\Mail\Controllers;

use Modules\Mail\Services\MailService;
use Src\Controller;

/**
 * Class MailController
 * @package Modules\Mail\Controllers
 */
class MailController extends Controller
{

    public function index()
    {
        return $this->formattedReturn('MAIL Working.');
    }

    public function send() {
        $mailService  = new MailService($this->data);

        $return = $mailService->send();

        return $this->formattedReturn($return);
    }
}