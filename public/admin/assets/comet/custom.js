

(function(){
    $(document).ready(function(){

        //Load CK Editor
        CKEDITOR.replace('post_editor');

        //Select 2 Load
        $('#post_tag_select').select2();
        $('#select_pcat').select2();
        $('#select_pcat_edit').select2();










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



         //Category Status
         $(document).on('click', 'input.post_check', function(){

            let checked = $(this).attr('checked');
            let status_id = $(this).attr('status_id');

            if(checked == 'checked'){
                $.ajax({
                    url: 'post/status-inactive/'+ status_id,
                    success: function(data){

                        swal("Inactive", "Status Inactive Successfully", "success");
                        $('#tag_table').DataTable().ajax.reload();

                    }
                });
            }else{
                $.ajax({
                    url: 'post/status-active/'+ status_id,
                    success: function(data){
                        swal("Active", "Status Active Successfully", "success");
                        $('#tag_table').DataTable().ajax.reload();
                    }
                });
            }
        });

        // Tag Data Table
        $('#tag_table').DataTable();

        // cetageory Data Table
        $('#cat_table').DataTable();


        // Product Brand Data Table
        $('#brand_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'brand'
            },
            columns: [
               {
                data: 'id',
                name: 'id',
               },
               {
                data: 'name',
                name: 'name',
               },
               {
                data: 'slug',
                name: 'slug',
               },
               {
                data: 'logo',
                name: 'logo',
                render: function(data, type, full, meta){
                    return `<img style="height:60px" src="media/products/brands/${data}">`;
                }
               },
               {
                data: 'created_at',
                name: 'created_at',
               },
               {
                data: 'status',
                name: 'status',
                render: function(data, type, full, meta){
                    return `<div class="status-toggle">
                    <input type="checkbox" status_id="${full.id}" ${ data==1 ? checked='checked': ''} value="${data}" id="brand_status_${full.id}" class="check brand_check">
                    <label for="brand_status_${full.id}" class="checktoggle">checkbox</label>
                </div>`;
                }
               },
               {
                data: 'action',
                name: 'action',
               },

            ]
        });

        // Add Brand
        $(document).on('submit','#brand_form', function(e){
            e.preventDefault();
            $.ajax({
                url: 'brand',
                method: "POST",
                data: new FormData(this),
                contentType:false,
                processData:false,
                success: function(data){
                    $('#brand_form')[0].reset();
                    $('#add_brand_modal').modal('hide');
                    $('#brand_table').DataTable().ajax.reload();
                    swal("Create", "Brand create successfull", "success");

                }
            });
        });

        // Brand Sataus

        $(document).on('click','input.brand_check', function(e){
            let status_id = $(this).attr('status_id');
            let status_val = $(this).val();

            let checked = $(this).attr('checked');

            if(checked == 'checked'){
                $.ajax({
                    url: 'brand-status/'+status_id,
                    success: function(data){

                        swal("Inactive", "Status Inactive Successfully", "success");
                        $('#brand_table').DataTable().ajax.reload();

                    }
                });
            }else{
                $.ajax({
                    url: 'brand-status/'+status_id,
                    success: function(data){
                        swal("Active", "Status Active Successfully", "success");
                        $('#brand_table').DataTable().ajax.reload();
                    }
                });
            }

        });

        //Brand Delete

        $(document).on('click','a.brand_del', function(e){
            e.preventDefault();
            let id = $(this).attr('delete_brand_id');

            $.ajax({
                url:'brand-delete/'+id,
                success: function($data){
                    swal("Delete", $data, "success");
                    $('#brand_table').DataTable().ajax.reload();
                }
            });

        });

        // Brand Data Show

        $(document).on('click','.brand_edit', function(event){
            event.preventDefault();
            let id = $(this).attr('edit_brand_id');


            $.ajax({

                url : 'brand-edit/'+id,
                success:function(data){

                    $('#edit_brand_modal form input[name="name"]').val(data.name);
                    $('#edit_brand_modal form input[name="old_photo"]').val(data.logo);
                    $('#edit_brand_modal form input[name="edit_id"]').val(data.id);
                    $('#edit_brand_modal form').attr('form_no', data.id);
                    $('#edit_brand_photo').attr('src','media/products/brands/'+data.logo);

                    $('#edit_brand_modal').modal('show');
                }
            });
        });

        // Brnad Update
        $(document).on('submit', '#brand_edit_form',function(e){
            e.preventDefault();

            let id = $(this).attr('form_no');
            $.ajax({
                url: 'brand/'+id,
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data){
                    $('#edit_brand_modal').modal('hide');
                    swal("Success", "Brand Update Successfull", "success");
                    $('#brand_table').DataTable().ajax.reload();

                }
            });
        });


        //Edit Product Modal
        $(document).on('click','.pcat_edit', function(e){
            e.preventDefault();
            //attribute value receive
            let id = $(this).attr('edit_id');

            $.ajax({
                url: 'product-category-edit/'+ id,
                success:function(data){

                    //Value Set
                    $('#edit_pcat_modal input[name="name"]').val(data.name);
                    $('#edit_pcat_modal input[name="edit_id"]').val(data.id);
                    $('#edit_pcat_modal input[name="icon"]').val(data.icon);
                    $('#edit_pcat_modal input[name="old_image"]').val(data.image);

                    $('#edit_pcat_modal img').attr('src','media/products/category/'+data.image);

                    $('#edit_pcat_modal select[name="parent"]').html(data.cat_list);

                    $('#edit_pcat_modal').modal('show');
                }
            });

        });

        // Product Size

        $(document).on('click','#psize_btn', function(e){
            e.preventDefault();
            let rand_num=Math.floor(Math.random() * 10000);

            let seize_container = `<div style="margin-bottom:5px !important;" class="card shadow-sm color-size-fild">
            <div data-toggle="collapse" data-target="#size-${rand_num}" style="background-color:#82bccc; color:#fff; cursor: pointer;" class="card-header">
                <strong>Size - ${rand_num}</strong>
                <button class="close size-close-btn">&times;</button>
            </div>
            <div id="size-${rand_num}" class="collapse">
             <div style="padding: 5px; background-color:#e1f3f8;" class="card-body">

                 <div class="form-group">
                     <input name="sizename[]" type="text" class="form-control" placeholder="Size name">
                 </div>
                 <div class="form-group">
                     <input name="sizeprice[]" type="number" class="form-control" placeholder="Price">
                 </div>


                 <div class="form-group">
                  <input name="sizesaleprice[]" type="number" class="form-control" placeholder="Sale price">
              </div>
             </div>
            </div>
        </div>`;

        $('.box-size').append(seize_container);

        });

        //Remode Size button romove

        $(document).on('click','.size-close-btn', function(){
            $(this).parent('.card-header').parent('.card').remove();
        });


        // Product Color
        $(document).on('click','#psize_btn_color', function(e){
            e.preventDefault();
            let rand_num=Math.floor(Math.random() * 10000);

            let color_container =`<div style="margin-bottom:5px !important;" class="card shadow-sm color-size-fild">
            <div data-toggle="collapse" data-target="#size-${rand_num}" style="background-color:#82bccc; color:#fff; cursor: pointer;" class="card-header">
                <strong>Size - ${rand_num}</strong>
                <button class="close size-close-btn-color">&times;</button>
            </div>
            <div id="size-${rand_num}" class="collapse">
             <div style="padding: 5px; background-color:#e1f3f8;" class="card-body">

                 <div class="form-group">
                     <input name="colorname[]" type="text" class="form-control" placeholder="Color name">

                 </div>
                 <div class="form-group">
                     <input name="colorprice[]" type="number" class="form-control" placeholder="Price">
                 </div>


                 <div class="form-group">
                  <input name="colorsaleprice[]" type="number" class="form-control" placeholder="Sale price">
              </div>
             </div>
            </div>
            </div>`;
            $('.box-size-color').append(color_container);

        });

        //Remode Color button Remove
        $(document).on('click','.size-close-btn-color', function(){
            $(this).parent('.card-header').parent('.card').remove();
        });


        // Varible option Product color and size show

        $(document).on('change','#variable_otp', function(){
            let otp = $('#variable_otp:checked').val();

            if(otp=='variable'){
                $('.var-box').show();
            }else{
                $('.var-box').hide();
                $('.color-size-fild').val(null);
            }
        });









    });
})(jQuery)







































//    Login Field
function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

// Registar New Password Fild
function password_show_hide_new() {
    var x = document.getElementById("new_password");
    var show_eye = document.getElementById("show_eye_new");
    var hide_eye = document.getElementById("hide_eye_new");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

// Registar Again Password Fild
function password_show_hide_again() {
    var x = document.getElementById("again_password");
    var show_eye = document.getElementById("show_eye_again");
    var hide_eye = document.getElementById("hide_eye_again");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}

