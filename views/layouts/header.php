<?php include __DIR__ . "/../../app/helpers/help.php"; ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@9.0.0/css/mdb.min.css" rel="stylesheet" />

    <!-- Toastify -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <title><?= set_title(); ?></title>
</head>

<body class="d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="/">DMC</a>
                <button data-mdb-collapse-init class="navbar-toggler" type="button"
                    data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" href="#">Learning</a>
                        <ul class="navbar-nav">
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a data-mdb-dropdown-init class="nav-link dropdown-toggle" href="#"
                                    id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                                    Tools
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="/2fa">2FA</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/monokia-pro">Monokia Pro</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/fake-address">Fake Address</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/password-generator">Password Generator</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>