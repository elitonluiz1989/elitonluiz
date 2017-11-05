<?php

$app->get('/api/[{name}/]', 'Modules\Home\Controllers\HomeController:index');