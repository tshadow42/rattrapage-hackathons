<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mon site</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link href="Public/Styles/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1a1924b08c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Mon site
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-fill">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liste hackatons </a>
                            </li>
                            <li class="nav-item dropdown ms-auto">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fas fa-user-plus"></i> S'inscrire</a></li>
                                    <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>

        </main>
        <footer>

        </footer>

        <!--modals-->

        <section class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="login-email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control mb-3" id="login-email" placeholder="email">
                        <label for="login-password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="login-password" placeholder="mot de passe">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group flex-grow-1" role="group" aria-label="">
                            <button class="btn btn-outline-primary btn-sm" data-bs-target="#registerModal" data-bs-toggle="modal">Inscription</button>
                            <button type="button" class="btn btn-success btn-sm">Connexion</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content shadow">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">S'inscrire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="register-lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control mb-3" id="register-lastname" placeholder="Nom">
                            </div>
                            <div class="col-6">
                                <label for="register-firstname" class="form-label">Prénom</label>
                                <input type="text" class="form-control mb-3" id="register-firstname" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="register-email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control mb-3" id="register-email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="register-password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control mb-3" id="register-password" placeholder="Mot de passe">
                            </div>
                            <div class="col-6">
                                <label for="register-repeat-password" class="form-label">Répéter mot de passe</label>
                                <input type="password" class="form-control" id="register-repeat-password" placeholder="Répéter mot de passe">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group row" style="width: 100%" role="group" aria-label="">
                            <button class="btn btn-outline-primary btn-sm col-6" data-bs-target="#loginModal" data-bs-toggle="modal">Dèja inscrit ?</button>
                            <button type="button" class="btn btn-success btn-sm col-6">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>