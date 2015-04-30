@if(Session::has('success'))
{!!Html::script('js/bootstrap-notify.js')!!}
<script>
    var notify = $.notify({message: '{{Session::get('success')}}'},{type: 'success', placement: {
        from: "top",
        align: "right"},
        delay: 1000,
        allow_dismiss: false,
        animate:{
            enter: "animated fadeInUp",
            exit: "animated fadeOutDown"}});
</script>
@endif