@if(session()->has('noty'))
    <script>
        sweetAlert("{{ session('noty.title') }}", "{{ session('noty.message') }}", "{{ session('noty.type') }}");
    </script>
@endif