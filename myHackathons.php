<?php
session_start();
require_once "Functions/user.php";
require_once "DAO/hackathon.php";
require_once "DAO/event.php";
require_once "DAO/participation.php";
include_once "header.php";

$hackathons = hackathonGetList();
?>

    <main>
        <div class="container">
            <div class="row">
                <section class="col-12 big-section mt-4">
                    <a class="btn btn-primary" style="width: 100%" href="hackathonCreator.php">Créé un hackathon</a>
                    <table class="table table-striped table-hover mt-2">
                        <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Début</th>
                            <th scope="col">Fin</th>
                            <th scope="col">Places restantes</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($hackathons as $hackathon){
                                    $period = eventGetPeriod($hackathon["id"]);

                                    $roleInHackathon = isset($_SESSION["user"])?participateTo($_SESSION["user"]["id"],$hackathon["id"]):"noConnect";

                                    echo "<tr>
                                            <th scope=\"row\">".$hackathon["title"]."</th>
                                            <td>".strftime('%d/%m/%Y %Hh%M', strtotime($period[1]["dateStart"]))."</td>
                                            <td>".strftime('%d/%m/%Y %Hh%M', strtotime($period[0]["dateStart"]))."</td>
                                            <td> ".numberOfParticipation($hackathon["id"])."/".$hackathon["maxGroups"] * $hackathon["maxInGroups"]."</td>
                                            <td class=\"d-grid gap-2\">
                                                <div class=\"btn-group\">";

                                                    if ($roleInHackathon == null ){
                                                        echo "<button class=\"btn btn-success\" onclick='subToHackathon(".$hackathon["id"].")'>S'inscrire</button>";
                                                    }else if ($roleInHackathon == "a"){
                                                        echo "<a href='hackathonOption.php?hackathon=".$hackathon["id"]."' class=\"btn btn-warning\">Option</a>";
                                                    }else if ($roleInHackathon == "p"){
                                                        echo "<button class=\"btn btn-danger\" onclick='unsubToHackathon(".$hackathon["id"].")'>Désinscription</button>";
                                                        echo "<button class=\"btn btn-secondary\">Groupes</button>";
                                                        echo "<a href='subjectCreator.php?hackathon=".$hackathon["id"]."' class=\"btn btn-primary\">Proposer un sujet</a>";

                                                    }

                                                    echo "<button data-bs-toggle=\"modal\" data-bs-target=\"#hackathon-info-modal\"  class=\"btn btn-primary\" onclick='loadHackathonModalContent(".$hackathon["id"].")'>Info</button>";
                                                echo"</div>
                                            </td>
                                        </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </main>

    <div class="modal fade" id="hackathon-info-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hackathon-info-modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="hackathon-info-modal-description" class="overflow-auto"></p>
                    <hr>
                    <div id="hackathon-info-modal-subjects">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hackathon-group-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hackathon-group-modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="hackathon-group-modal-body">

                </div>
            </div>
        </div>
    </div>
<script src="Public/Scripts/JS/hackathonList.js"></script>
<?php
include_once "footer.php"
?>