<?php
session_start();

require_once "Functions/user.php";
require_once "DAO/hackathon.php";
require_once "DAO/event.php";
require_once "DAO/participation.php";

include_once "header.php";

if(!isset($_GET)){
    http_response_code(400);
    die();
}else if (!isConnect()){
    header("location: index.php");
}
$hackathon = hackathonGetById($_GET["hackathon"]);
if (!$hackathon){
    http_response_code(404);
    die();
}



$hackathon = hackathonGetById($_GET["hackathon"]);
$period = eventGetPeriod($_GET["hackathon"]);


?>


    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 mt-4">
                    <section class="big-section row">
                        <h1>Proposition de sujet pour <?php echo $hackathon["title"]; ?></h1>
                        <form action="Public/Scripts/PHP/addSubject.php" method="post">
                            <div class="mb-3 col-12">
                                <label for="subject-subject" class="form-label">Sujet</label>
                                <input type="text" class="form-control" placeholder="Titre" id="subject-subject" name="title" required>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="subject-description" class="form-label">Description</label>
                                <textarea class="form-control" rows="15" placeholder="Description" id="subject-description" name="description" required></textarea>
                            </div>
                            <input type="hidden" name="hackathon" value="<?php echo $hackathon["id"]?>" required>
                            <div class="mb-3 col-12">
                                <button type="submit" class="btn btn-success" style="width: 100%">Proposer mon sujet</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>

<?php
include_once "footer.php"
?>