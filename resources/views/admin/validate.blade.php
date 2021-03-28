@if($errors -> any())
   
   <script>
        swal("Validation Error", "{{ $errors -> first() }}", "warning");
   </script>
@endif

@if(Session::has('success'))
   

    <script>
        swal("success", "{{ Session::get('success') }}", "success");
   </script>
@endif