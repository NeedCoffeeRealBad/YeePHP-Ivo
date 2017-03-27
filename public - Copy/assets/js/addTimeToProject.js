function addNewProject() {
    if($('#newProject').val() == ""){
        $('#mess').text("Must write the project!")
                .css("color", "tomato")
                .css("font-size", "20px");
    } else {
        $('#mess').text("");
    }
}