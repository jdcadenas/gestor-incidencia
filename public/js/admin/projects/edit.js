$(document).ready(function() {
    $('[data-category]').on('click', editCategoryModal);
    $('[data-level]').on('click', editLevelModal);
    
    
    $('.cerrarcategory').on('click', function() {
        $('#modal-category').hide();
        
    });
    $('.cerrarlevel').on('click', function() {
        $('#modal-level').hide();
        
    });


});

function editCategoryModal() {
   
        //id
                var category_id=$(this).data('category');
                $('#category_id').val(category_id);
                //name
                var category_name=$(this).parent().prev().text();
                $('#category_name').val(category_name);
        
                $('#modal-category').show();
                
           

}
function editLevelModal() {
   
        //id
                var level_id=$(this).data('level');
                $('#level_id').val(level_id);
                //name
                var level_name=$(this).parent().prev().text();
                $('#level_name').val(level_name);
        
                $('#modal-level').show();
                
          

}
