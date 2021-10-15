<?php
session_start();

require_once "Functions/user.php";
require_once "DAO/hackathon.php";
require_once "DAO/event.php";
require_once "DAO/participation.php";
require_once "DAO/subject.php";

include_once "header.php";

$hackathon = hackathonGetById($_GET["hackathon"]);
$period = eventGetPeriod($_GET["hackathon"]);

if(!isset($_GET)){
    http_response_code(400);
    die();
}else if (!isConnect() && participateTo($_SESSION["user"]['id'],$_GET["hackathon"]) != "a"){
    header("location: index.php");
}
$hackathon = hackathonGetById($_GET["hackathon"]);
if (!$hackathon){
    http_response_code(404);
    die();
}






?>


    <main>
        <div class="container mt-4">
            <div class="row">
                <form action="Public/Scripts/PHP/modifyHackathon.php" method="post" class="col-12">
                    <section class="big-section row">
                        <h1>Modifier mon Hackathon</h1>
                        <input type="hidden" value="<?php echo $hackathon["id"]; ?>" name="id">
                        <div class="mb-3 col-12">
                            <label for="hackathon-title" class="form-label">Titre</label>
                            <input class="form-control" id="hackathon-title" type="text" placeholder="Titre du Hackathon" required value="<?php echo $hackathon["title"]?>" name="title">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="hackathon-start" class="form-label">Début</label>
                            <input class="form-control" id="hackathon-start" type="datetime-local" placeholder="Début du Hackathon" required value="<?php echo strftime('%Y-%m-%dT%H:%M', strtotime($period[1]["dateStart"]))?>" name="start">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="hackathon-end" class="form-label">Fin</label>
                            <input class="form-control" id="hackathon-end" type="datetime-local" placeholder="Fin du Hackathon" required value="<?php echo strftime('%Y-%m-%dT%H:%M', strtotime($period[0]["dateStart"]))?>" name="end">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="hackathon-description" class="form-label">Description</label>
                            <textarea class="form-control" id="hackathon-description" rows="6" placeholder="Description du Hackathon" required name="description"><?php echo $hackathon["description"]?></textarea>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="hackathon-group-max" class="form-label">Nombre maximum de groupes</label>
                            <input class="form-control" id="hackathon-group-max" type="number" min="1" placeholder="Nombre maximum de groupes" required value="<?php echo $hackathon["maxGroups"]?>" name="groupMax">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="hackathon-group-max-size" class="form-label">Taille des groupes</label>
                            <input class="form-control" id="hackathon-group-max-size" type="number" min="1" placeholder="Taille des groupes" required value="<?php echo $hackathon["maxInGroups"]?>" name="groupSize">
                        </div>
                        <div class="mb-3 col-12 d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Modifier le hackathon</button>
                        </div>
                    </section>
                </form>

                <div class="col-12 mt-4">
                    <section class="big-section row">
                        <h1>Participants</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $users = getAllParticipant($_GET["hackathon"]);
                                    if ($users){
                                        foreach ($users as $user){
                                            echo "<tr><td>".$user["lastname"]."</td>";
                                            echo "<td>".$user["firstname"]."</td>";
                                            echo "<td>".$user["email"]."</td></tr>";
                                        }
                                    }else{
                                        echo "<tr>
                                                <th colspan=\"3\" scope=\"row\">Aucun inscrit pour le moment</th>
                                            </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-12 mt-4">
                    <section class="big-section row">
                        <h1>Proposition de sujet</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Titre</th>
                                <th scope="col">description</th>
                                <th scope="col">statut</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $subjects = getAllSubjectFor($_GET["hackathon"]);

                            if ($subjects){
                                foreach ($subjects as $subject){
                                    echo "<tr><td>".$subject["title"]."</td>";
                                    echo "<td>".$subject["description"]."</td>";
                                    echo "<td>";
                                    echo $subject["selectable"]=="F"?
                                        "<span class=\"badge rounded-pill bg-danger\">Non validé</span>":
                                        "<span class=\"badge rounded-pill bg-success\">Validé</span>";
                                    echo "</td>";
                                    echo "<td>";
                                        echo $subject["selectable"]=="F"?
                                            "<button class='btn btn-success' style='width: 100%' onclick=\"changeSubjectSelectable(".$subject["id"].",'T')\">Accepter</button>":
                                            "<button class='btn btn-danger' style='width: 100%' onclick=\"changeSubjectSelectable(".$subject["id"].",'F')\">Refuser</button>";
                                    echo "</td></tr>";
                                }
                            }else{
                                echo "<tr>
                                        <th colspan=\"4\" scope=\"row\">Aucun sujet pour le moment</th>
                                    </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <script src="Public/Scripts/JS/hackathonOption.js"></script>
<?php
include_once "footer.php"
?>