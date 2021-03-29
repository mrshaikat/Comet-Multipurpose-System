(function(){
    $(document).ready(function(){

        //Logout Features
        $(document).on('click', '#user_logout_button', function(e){
            e.preventDefault();

            $('#logout_form').submit();
        });


        //Delete Button Category Fix
        $(document).on('click', '#cat_deleted', function(){
 
            let conf = confirm('Are You Sure ?');

            if(conf == true){
                return true;
            }else{
                return false;
            }

        });


        //Edit Category 
        $(document).on('click', '#edit_cat', function(e){
            e.preventDefault();

            let id = $(this).attr('edit_cat_id');
            

            $.ajax({
                url : 'category/' +id+ '/edit',
                success : function(data){
                    $('#edit_category_modal form input[name="category_name"]').val(data.name);
                    $('#edit_category_modal form input[name="edit_id"]').val(data.id);
                    $('#edit_category_modal').modal('show');
                }
            });
        });

        //Category Status
        $(document).on('click', 'input.cat_check', function(){

            let checked = $(this).attr('checked');
            let status_id = $(this).attr('status_id'); 

            if(checked == 'checked'){
                $.ajax({
                    url: 'category/status-inactive/'+ status_id,
                    success: function(data){
                        
                        swal("Inactive", "Status Inactive Successfully", "success");
                        
                    }
                });
            }else{
                $.ajax({
                    url: 'category/status-active/'+ status_id,
                    success: function(data){
                        swal("Active", "Status Active Successfully", "success");
                    }
                });
            }
        });




        //Delete Button Tag Fix
        $(document).on('click', '#tag_deleted', function(){
 
            let conf = confirm('Are You Sure ?');

            if(conf == true){
                return true;
            }else{
                return false;
            }

        });


        //Edit Tag 
        $(document).on('click', '#edit_tag', function(e){
            e.preventDefault();

            let id = $(this).attr('edit_tag_id');
            

            $.ajax({
                url : 'tag/' +id+ '/edit',
                success : function(data){
                    $('#edit_tag_modal form input[name="name"]').val(data.name);
                    $('#edit_tag_modal form input[name="edit_id"]').val(data.id);
                    $('#edit_tag_modal').modal('show');
                }
            });
        });



        //Tag Status
        $(document).on('click', 'input.tag_check', function(){

            let checked = $(this).attr('checked');
            let status_id = $(this).attr('status_id'); 

            if(checked == 'checked'){
                $.ajax({
                    url: 'tag/status-inactive/'+ status_id,
                    success: function(data){
                        
                        swal("Inactive", "Status Inactive Successfully", "success");
                        
                    }
                });
            }else{
                $.ajax({
                    url: 'tag/status-active/'+ status_id,
                    success: function(data){
                        swal("Active", "Status Active Successfully", "success");
                    }
                });
            }
        });


























    });
})(jQuery)