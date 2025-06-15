<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');

get('/2fa', 'views/2fa.php');

any('/404','views/error/404-error.php');