function changeSubjectSelectable(subjectId, bool){
    $.ajax({
        method: "POST",
        url: "Public/Scripts/PHP/changeSubjectSelectable.php",
        data: { id: subjectId, bool: bool}
    })
        .done(function() {
            window.location.reload();
        });
}