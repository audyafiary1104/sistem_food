@section('js')
<script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
      $('#add_employees').click(function() {
          $('#add_employee').modal('show');
      });
    });
</script>
@endsection