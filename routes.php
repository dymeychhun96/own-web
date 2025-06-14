<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');

any('/404','views/error/404-error.php');