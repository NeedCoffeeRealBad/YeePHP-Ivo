$addNewSkill = 1;
$addNewProject = 1;
$addNewExperience = 1;
function showAddExperienceContainer() {
    $('#addNewExperienceContainer').fadeIn('fast');
    $('#addItemToTableExperience')
            .text("Cancel")
            .attr("onclick", "hideAddExperienceContainer()");
}
function hideAddExperienceContainer() {
    $('#addNewExperienceContainer').fadeOut('fast');
    $('#addItemToTableExperience')
            .text("Add new experience ")
            .append("<i class='fa fa-plus'></i>")
            .removeAttr("onclick")
            .attr("onclick", "showAddExperienceContainer()");
}
$(function () {
    $(document).on("click", "#btnAddNewExperience", function () {
        $companyName = $('#experienceCompanyName').val();
        $title = $('#experienceTitle').val();
        $location = $('#locationExperience').val();
        $monthFrom = $('#experienceMonthFrom').val();
        $yearFrom = $('#experienceYearFrom').val();
        $monthTo = $('#experienceMonthTo').val();
        $yearTo = $('#experienceYearTo').val();
        $description = $('#descriptionExperience').val();
        if  ($companyName !== "" && $title !== "" && $location !== "" && $monthFrom !== "" && $yearFrom !== "" && $monthTo !== "" && $yearTo !== "") {
            $('#newExperienceContainer').append("<div class='projects col-md-12' id='experience" + $addNewExperience + "'><span>Company name: " + $companyName + "</span><span class='removeProject' onclick='removeExperience(" + $addNewExperience + ")'>&#10006;</span><div><span>Position:  " + $title + "</span></div><div>Location: " + $location + "</div><div>Period from: " + $monthFrom + "." + $yearFrom + "<span> year to: " + $monthTo + "." + $yearTo + "</span></div></div>");
            if  ($description !== ""){
                $('#newExperienceContainer').find("#experience" + $addNewProject).append('<div>Description: ' + $description + '</div>');
            }
            $('#experienceCompanyName').val("");
            $('#experienceTitle').val("");
            $('#locationExperience').val("");
            $('#experienceMonthFrom').val("");
            $('#experienceMonthTo').val("");
            $('#experienceYearTo').val("");
            $('#experienceYearFrom').val("");
            $('#descriptionExperience').val("");
            ++$addNewExperience;
            $('#messageWrongExperience').text("");
        } else {
            $('#messageWrongExperience').text("Fill every field, before you add a new skill!")
                    .css("color", "tomato")
        }
    });
});
function removeExperience(num) {
    $(document.body).find('#experience' + num).remove();
}

$(function () {
    $(document).on("click", "#btnAddNewProject", function () {
        $name = $('#projectName').val();
        $year = $('#projectYear').val();
        $month = $('#projectMonth').val();
        $description = $('#description').val();
        $url = $('#projectURL').val();
        if  ($name !== "" && $year !== "" && $month !== "" && $url !== "") {
            $('#newProjectsContainer').append("<div class='projects col-md-12' id='project" + $addNewProject + "'><span>Name: " + $name + "</span><span class='removeProject' onclick='removeProject(" + $addNewProject + ")'>&#10006;</span><div><span>Working since " + $month + "." + $year + " year.</span></div><div>My project is on: " + $url + "</div></div>");
            if  ($description !== ""){
                $('#newProjectsContainer').find("#project" + $addNewProject).append('<div>Description: ' + $description + '</div>');
            }
            $('#projectName').val("");
            $('#projectYear').val("");
            $('#projectMonth').val("");
            $('#description').val("");
            $('#projectURL').val("");
            ++$addNewProject;
            $('#messageWrongProject').text("");
        } else {
            $('#messageWrongProject').text("Fill every field, before you add a new skill!")
                    .css("color", "tomato")
        }
    });
});
function removeProject(num) {
    $(document.body).find('#project' + num).remove();
}
function showAddTimeToNewProjectContainer() {
    $('#addTimeToNewProjectContainer').fadeIn('fast');
    $('#addTimeToNewProject')
            .text("Cancel")
            .attr("onclick", "hideAddTimeToNewProjectContainer()");
}
function hideAddTimeToNewProjectContainer() {
    $('#addTimeToNewProjectContainer').fadeOut('fast');
    $('#addTimeToNewProject')
            .text("Add new project ")
            .append("<i class='fa fa-plus'></i>")
            .removeAttr("onclick")
            .attr("onclick", "showAddTimeToNewProjectContainer()");
}
function showAddNewSkillContainer() {
    $('#formNewSkills').fadeIn('slow');
    $('#addItemToTable')
            .text("Cancel")
            .attr("onclick", "hideAddNewSkillContainer()");
}
function hideAddNewSkillContainer() {
    $('#formNewSkills').fadeOut('fast');
    $('#addItemToTable')
            .text("add new skill ")
            .append("<i class='fa fa-plus'></i>")
            .removeAttr("onclick")
            .attr("onclick", "showAddNewSkillContainer()");
}

$(function () {
    $(document).on("click", "#btnAddNewSkill", function () {
        $skill = $('#addNewSkill').val();
        $exp = $('#addNewExperiance').val();
        if  ($skill !== "" && $exp !== "") {
            $('#newSkillContainer').append("<div class='skills' id='language" + $addNewSkill + "'><span>" + $skill + " with experiance of: " + $exp + "</span><span class='removeLanguage' onclick='removeLanguage(" + $addNewSkill + ")'>&#10006;</span></div>");
            $skill = $('#addNewSkill').val("");
            $exp = $('#addNewExperiance').val("");
            ++$addNewSkill;
            $('#messageWrong').text("");
        } else {
            $('#messageWrong').text("Fill every field, before you add a new skill!")
                    .css("color", "tomato")
        }
    });
});
function removeLanguage(num) {
    $(document.body).find('#language' + num).remove();
}
$("#formNewSkills").submit(function (e) {
    var url = "/manageTimeTypes2";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#accountForm").serialize(),
        success: function (data) {}
    });
    e.preventDefault();
});