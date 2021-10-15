function subToHackathon(hackathonId){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/subToHackathon.php",
        data: { hackathonId: hackathonId}
    })
        .done(function() {
            window.location.reload();
        });
}

function unsubToHackathon(hackathonId){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/unsubToHackathon.php",
        data: { hackathonId: hackathonId}
    })
        .done(function() {
            window.location.reload();
        });
}

function loadHackathonModalContent(hackathonId){
    $.ajax({
        method: "GET",
        url: "Public/Scripts/PHP/getHackathonModalContent.php",
        data: { hackathonId: hackathonId}
    })
        .done(function(response) {
            response = response.split("@-@");
            $("#hackathon-info-modal-title").html(response[0]);
            $("#hackathon-info-modal-description").html(response[1]);
            $("#hackathon-info-modal-subjects").html(response[2]);
        });
}

function loadHackathonModalGroup(hackathonId){
    $.ajax({
        method: "GET",
        url: "Public/Scripts/PHP/getHackathonModalGroup.php",
        data: { hackathonId: hackathonId}
    })
        .done(function(response) {
            response = response.split("@-@");
            $("#hackathon-info-modal-title").html(response[0]);
            $("#hackathon-info-modal-description").html(response[1]);
            $("#hackathon-info-modal-subjects").html(response[2]);
        });
}