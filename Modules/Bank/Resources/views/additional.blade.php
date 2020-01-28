@section('js')
    <script>
        $('#dataTable').DataTable();

        $('#show-modal-add').click(function(params) {
            $('.alert-message').hide();
            $('#modal_add').modal('show');
        });
        $('.save_add').click(function(params) {
            $.ajax({
              type:'POST',
               url:'{{route('bank_add')}}',
               data:{
                   '_token' : '<?php echo csrf_token() ?>',
                   'name_bank' : $('#inputEmail3').val(),
                   },
               success : function (data) {
                if (data.failed) {
                      $('.alert-message').show();
                      $('.alert-message').text(data.failed.name_bank[0]);
                    setTimeout(function(){ 
                    $('.alert-message').fadeOut();
                     }, 3000);
                  }else{
                    $('#modal_add').modal('hide');
                    location.reload();  
                  }
               }    
            });
        });
    </script>
@stop