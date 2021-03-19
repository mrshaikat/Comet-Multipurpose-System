(function(){
    $(document).ready(function(){

        //Logout Features

        $(document).on('click', '#user_logout_button', function(e){
            e.preventDefault();

            $('#logout_form').submit();

        });
    });
})(jQuery)