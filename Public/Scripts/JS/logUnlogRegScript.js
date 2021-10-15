function submitRegister(){
    $.ajax({
    method: "POST",
    url: "Public/Scripts/PHP/addUser.php",
    data: { email: $("#register-email").val(), firstname: $("#register-firstname").val() , lastname: $("#register-lastname").val() , password: $("#register-password").val() , passwordRepeat: $("#register-repeat-password").val() }
    })
    .done(function( registerReturn ) {
        $(".invalid-feedback").hide;
        $(".is-invalid").removeClass("is-invalid");
        $(".is-valid").removeClass("is-valid");

        if (registerReturn == "success"){
            $("#registerModal .modal-content").html("<div class=\"modal-header\">" +
                    "<h5 class=\"modal-title\" id=\"exampleModalLabel\">S'inscrire</h5>" +
                    "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>" +
                "</div>" +
                "<div class=\"alert alert-success\" role=\"alert\">" +
                    "Votre compte à bien été créé" +
                "</div>" +
                "<div class=\"modal-footer\">" +
                    "<div class=\"btn-group row\" style=\"width: 100%\" role=\"group\" aria-label=\"\">" +
                        "<button type='button' class=\"btn btn-outline-primary btn-sm col-12\" data-bs-target=\"#loginModal\" data-bs-toggle=\"modal\">Connexion</button>" +
                    "</div>" +
                "</div>");
        }else if(registerReturn == "fail"){
            alert("Une erreur est survenue");
        }else{
            registerReturn = registerReturn.split("@-@");

            if (registerReturn.includes("passwordNoConform")){
                $("#register-password").addClass("is-invalid");
                $("#register-repeat-password").addClass("is-invalid");
                $("#register-password-validation").html("le mot de passe doit contenir au minimum une minuscule, une majuscule,un chiffre et faire entre 6 et 50 caractères");
                $("#register-password-validation").show;

            }else if (registerReturn.includes("passwordNoMatch")){
                $("#register-password").addClass("is-invalid");
                $("#register-repeat-password").addClass("is-invalid");
                $("#register-password-validation").html("les mots de passe ne correspondent pas");
                $("#register-password-validation").show;

            }else{
                $("#register-password").addClass("is-valid");
                $("#register-repeat-password").addClass("is-valid");
            }

            if (registerReturn.includes("emailNoConform")){
                $("#register-email").addClass("is-invalid");
                $("#register-email-validation").html("l'adresse email n'en est pas une");
                $("#register-email-validation").show;

            }else if (registerReturn.includes("emailExist")){
                $("#register-email").addClass("is-invalid");
                $("#register-email-validation").html("un compte utilise déjà cette adresse email");
                $("#register-email-validation").show;

            }else{
                $("#register-email").addClass("is-valid");
            }

            if (registerReturn.includes("firstname")){
                $("#register-firstname").addClass("is-invalid");
                $("#register-firstname-validation").show;
            }else{
                $("#register-firstname").addClass("is-valid");
            }

            if (registerReturn.includes("lastname")){
                $("#register-lastname").addClass("is-invalid");
                $("#register-lastname-validation").show;
            }else{
                $("#register-lastname").addClass("is-valid");
            }
        }
    });
}

function submitLogin(){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/connectUser.php",
        data: { email: $("#login-email").val(), password: $("#login-password").val() }
    })
        .done(function( loginReturn ) {
            $(".invalid-feedback").hide;
            $(".is-invalid").removeClass("is-invalid");

            if (loginReturn == "success"){
                window.location.reload();
            }else if(loginReturn == "fail"){
                alert("Une erreur est survenue");
            }else{
                $("#login-email").addClass("is-invalid");
                $("#login-password").addClass("is-invalid");
                $("#login-validation").show;
            }
        });
}

$("#disconnect-button").click(function (){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/disconnectUser.php"
    })
        .done(function( loginReturn ) {
            if (loginReturn == "success"){
                window.location.reload();
            }else{
                alert("Une erreur est survenue");
            }
        });
});