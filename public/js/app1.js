$(function() {

    $('#list-of-project').on('change', onNewProjectSelected);


});

function onNewProjectSelected() {
    var project_id = $(this).val();
    location.href = '/seleccionar/proyecto/' + project_id;
}