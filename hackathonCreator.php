<?php
session_start();

require_once "Functions/user.php";

if (!isConnect()){
    header("location: index.php");
}

include_once "header.php";
?>


    <main>
        <div class="container mt-4">
            <form class="row" action="javascript:createHackathon();">
                <section class="col-12 big-section row">
                    <h1>Nouveau Hackathon</h1>
                    <div class="mb-3 col-12">
                        <label for="hackathon-title" class="form-label">Titre</label>
                        <input class="form-control" id="hackathon-title" type="text" placeholder="Titre du Hackathon" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="hackathon-start" class="form-label">Début</label>
                        <input class="form-control" id="hackathon-start" type="datetime-local" placeholder="Début du Hackathon" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="hackathon-end" class="form-label">Fin</label>
                        <input class="form-control" id="hackathon-end" type="datetime-local" placeholder="Fin du Hackathon" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="hackathon-description" class="form-label">Description</label>
                        <textarea class="form-control" id="hackathon-description" rows="6" placeholder="Description du Hackathon" required></textarea>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="hackathon-group-max" class="form-label">Nombre maximum de groupes</label>
                        <input class="form-control" id="hackathon-group-max" type="number" min="1" placeholder="Nombre maximum de groupes" required>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="hackathon-group-max-size" class="form-label">Taille des groupes</label>
                        <input class="form-control" id="hackathon-group-max-size" type="number" min="1" placeholder="Taille des groupes" required>
                    </div>
                    <div class="mb-3 col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-success">Créer le hackathon</button>
                    </div>
                </section>
            </form>
        </div>
    </main>
    <script src="Public/Scripts/JS/hackathonCreate.js"></script>
<?php
include_once "footer.php";
?>