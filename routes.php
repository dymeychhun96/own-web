<?php

require_once __DIR__ . '/router.php';

get('/', 'views/index.php');

get('/2fa', 'views/2fa.php');

get('/monokia-pro', 'views/monokia-pro.php');

get('/fake-address', 'views/fake-address.php');

get('/password-generator', 'views/password-generator.php');

any('/404', 'views/error/404-error.php');