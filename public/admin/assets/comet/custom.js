(function(){
    $(document).ready(function(){

        //Load CK Editor 
        CKEDITOR.replace('post_editor');

        //Select 2 Load
        $('#post_tag_select').select2();





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



        
       //Select Post Format
       $('#post_format').change(function(){

        let format = $(this).val();
        
        if(format=='Image'){
            $('.post-image').show();
        }else{
            $('.post-image').hide();
        }

        //post gallery

        if(format=='Gallery'){
            $('.post-gallery').show();
        }else{
            $('.post-gallery').hide();
        }

        if(format== 'Video'){
            $('.post-video').show();
        }else{
            $('.post-video').hide();
        }

        if(format== 'Audio'){
            $('.post-audio').show();
        }else{
            $('.post-audio').hide();
        }

       });



       // Post Img load
       $('.post_select_img').change(function(e){
           let img_url = URL.createObjectURL(e.target.files[0]);
           $('.post_img_load').attr('src', img_url );
       });



       // Post Gallery load
       $('.post_select_gall').change(function(e){
           let img_gall = '';
        for(let i = 0; i < e.target.files.length ; i++){
            let img_url = URL.createObjectURL(e.target.files[i]);
            img_gall +='<img class="shadow" src="'+img_url+'">';
        }

        $('.post_img_gall').html(img_gall);
        });
      


        //Delete Button From Post Trash Fix
        $(document).on('click', '#post_deleted', function(){
 
            let conf = confirm('Are You Sure ?');

            if(conf == true){
                return true;
            }else{
                return false;
            }

        });

     
		




        























    });
})(jQuery)