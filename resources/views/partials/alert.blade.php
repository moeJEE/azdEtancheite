
@if(session()->has('message'))
<script>
    $(document).ready(function(){
        var type = "{{ session()->get('alert-type', 'info') }}";
        var message = "{{ session()->get('message') }}";
        toastr[type](message);
    });
</script>
@endif
