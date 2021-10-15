function createHackathon(){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/addHackathon.php",
        data: { title: $("#hackathon-title").val(), description: $("#hackathon-description").val() , start: $("#hackathon-start").val() , end: $("#hackathon-end").val() , groupMax: $("#hackathon-group-max").val(), groupSize: $("#hackathon-group-max-size").val() }
    })
        .done(function( response ) {
            if (response != "fail"){
                window.location.replace("hackathonOption.php?hackathon="+encodeURI(response));
            }else{
                alert("Une erreur est survenue");
            }
        });
}