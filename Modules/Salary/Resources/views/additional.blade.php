@section('js')
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <script>

        $('#dataTable').DataTable();
        $('#show-modal-add').click(function() {
            $('#modal-add').modal('show');
        });
        $('.details').click(function() {
            $('#modal-view').modal('show');
            $('#name_positions_details').text($(this).data('type'));
            $('#type_details').text($(this).data('type_salary'));
            $('#salary_details').text($(this).data('salary'));
            $('#salary_details').text($(this).data('salary'));
            $('#Bank_names').text($(this).data('bank'));
        });


        $('.bank').hide()
       $('#salary').mask('0.000.000.000', {reverse: true});
       $('#Payment').on('change', function() {
        if ($(this).val() == "Transfer") {
            $('.bank').show()
        }else{
            $('.bank').hide()
        }
        });
        $('.delete').click(function () {
              var stepId =   $(this).data('url');
                $.ajax({
                    type:'GET',
                    url: stepId,
                    success : function (params) {
                    location.reload();                       
                    }
                });
            });
        $('.save').click(function (params) {
            var name_bank = null;
            if ($('#Payment').val() == "Transfer") {
                var name_bank = $('#name_bank').val();
            }
            $.ajax({
               type:'POST',
               url:'{{route('store')}}',
               data:{
                   '_token' : '<?php echo csrf_token() ?>',
                   'id_position' : $('#id_positions').val(),
                   'salary' : $('#salary').val(),
                   'type_salary' : $('#Payment').val(),
                   'name_bank' : name_bank,
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
                    location.reload();
                  }
               }
            });
        
        });
    </script>
@endsection