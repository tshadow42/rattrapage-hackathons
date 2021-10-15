<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hackathon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="Public/Styles/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a1924b08c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Public/Images/logo.jpeg" alt="" height="24" class="d-inline-block align-text-top">
                Hackathon ESGI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-fill">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myHackathons.php">Liste des hackatons </a>
                    </li>
                    <li class="nav-item dropdown ms-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> <?php
                            if (isset($_SESSION["user"])){
                                echo ($_SESSION["user"]["firstname"]??"")." ".$_SESSION["user"]["lastname"]??"";
                            }
                            ?>
                        </a>
                        <?php
                        if(!isset($_SESSION["user"])){
                        ?>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fas fa-user-plus"></i> S'inscrire</a></li>
                                <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                            </ul>
                        <?php
                        }else{
                        ?>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs"></i> Option</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" id="disconnect-button" href="Public/Scripts/PHP/disconnectUser.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                            </ul>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>