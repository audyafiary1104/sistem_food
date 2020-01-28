@section('js')
    <script>
        $('#show-modal-add').click(function(params) {
            $('.alert-message').hide();
            $('#modal_add').modal('show');
        });
        $('.save').click(function(params) {
            $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
            $.ajax({
               type:'POST',
               url:'{{route('add_positions')}}',
               data:{
                   '_token' : '<?php echo csrf_token() ?>',
                   'name_position' : $('#inputEmail3').val(),
                   },
               success:function(data) {
                  if (data.failed) {
                      $('.alert-message').show();
                      $('.alert-message').text(data.failed.name_position[0]);
                    setTimeout(function(){ 
                    $('.alert-message').fadeOut();
                     }, 3000);
                  }else{
                    $('#modal_add').modal('hide');

                  }
               }
            });
        });
    </script>
@stop