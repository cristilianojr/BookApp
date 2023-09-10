<?php

require_once('configs/urls.php');
require_once('configs/process.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PScheduler</title>

    <!-- scripts -->
    <script src="<?php echo url_for_js('jquery-3.7.1.js') ?>"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo url_for('static/css/globals.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- fonts -->

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  bg-primary">
            <div class="container-fluid">
               
                <a class="navbar-brand" href="<?php echo $BASE_DIR ?>">
                    <img src="<?php echo url_for_images('tucano_logo.png') ?>" alt="Bootstrap" width="50" height="50">
                </a>
               
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Menu Principal
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $BASE_DIR ?>">Agenda</a></li>
                                <li><a class="dropdown-item" href="#">Adicionar contato</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>