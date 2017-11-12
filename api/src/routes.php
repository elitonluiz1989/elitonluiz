<?php

$app->get('/api/', 'Modules\Home\Controllers\HomeController:index');

$app->group('/api/mail', function() {
    $this->get('/', 'Modules\Mail\Controllers\MailController:index');
    $this->post('/send/', 'Modules\Mail\Controllers\MailController:send');
});