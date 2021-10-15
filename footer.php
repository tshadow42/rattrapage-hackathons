<footer>

</footer>

<!--modals-->

<?php
if (!isset($_SESSION["user"])){
    ?>

    <section class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <form action="javascript:submitLogin();" id="register-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="login-email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control mb-3" id="login-email" placeholder="email" required>
                        <label for="login-password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="login-password" placeholder="mot de passe" required>
                        <div id="login-validation" class="invalid-feedback">
                            Email ou mot de passe invalide
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group row" style="width: 100%" role="group" aria-label="">
                            <button type="submit" class="btn btn-success btn-sm col-12">Connexion</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="modal fade" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content shadow">
                <form action="javascript:submitRegister();" id="register-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">S'inscrire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="register-lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control mb-3" id="register-lastname" name="register-lastname" placeholder="Nom" required>
                                <div id="register-lastname-validation" class="invalid-feedback">
                                    Le nom doit être composer de caractère alphabétique
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="register-firstname" class="form-label">Prénom</label>
                                <input type="text" class="form-control mb-3" id="register-firstname" name="register-firstname" placeholder="Prénom" required>
                                <div id="register-firstname-validation" class="invalid-feedback">
                                    Le prénom doit être composer de caractère alphabétique
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="register-email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control mb-3" id="register-email" name="register-email" placeholder="Email" required>
                                <div id="register-email-validation" class="invalid-feedback">
                                    un compte existe déjà avec cette adresse email
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="register-password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control mb-3" id="register-password" name="register-password" placeholder="Mot de passe" required>
                                <div id="register-password-validation" class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-6">
                                <label for="register-repeat-password" class="form-label">Répéter mot de passe</label>
                                <input type="password" class="form-control" id="register-repeat-password" name="register-repeat-password" placeholder="Répéter mot de passe" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group row" style="width: 100%" role="group" aria-label="">
                            <button type="submit" id="register-submit" class="btn btn-success btn-sm col-12">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

<script src="Public/Scripts/JS/logUnlogRegScript.js"></script>
</body>
</html>