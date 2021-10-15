<?php

session_start();
require_once "../../../DAO/hackathon.php";
require_once "../../../DAO/subject.php";

if (count($_GET) == 1
    && !empty($_GET["hackathonId"])){

    $hackathon = hackathonGetById($_GET["hackathonId"]);

    echo $hackathon["title"]."@-@".$hackathon["description"]."@-@";

    $subjects = getAllSubjectFor($_GET["hackathonId"]);

    echo "<table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">description</th>
            <th scope=\"col\">statut</th>
        </tr>
        </thead>
        <tbody>";
            if ($subjects){
                foreach ($subjects as $subject){
                    echo "<tr>
                            <td>".$subject["title"]."</td>
                            <td>".$subject["description"]."</td>
                            <td>";
                                echo $subject["selectable"]=="F"?"<span class=\"badge rounded-pill bg-danger\">Non validé</span>":"<span class=\"badge rounded-pill bg-success\">Validé</span>";
                                echo "
                            </td>
                        </tr>";
                }
            }else{
                echo "<tr>
                <th colspan=\"4\" scope=\"row\">Aucun sujet pour le moment</th>
            </tr>";
            }

    echo "</tbody>
    </table>";
}else{
    die("fail");
}