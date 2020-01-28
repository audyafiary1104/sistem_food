@extends('partials.master')
@section('content')

<div class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Years</label>
    <input type="text" id="datepicker">    </div>
  <button type="submit" class="btn btn-primary mb-2">Filter</button>
</div>
 
<div id="container" style="height: 400px"></div>
<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Pendapatan</th>
                                <th>{{ __('backend.actions') }}</th>

                            </tr>
                        </thead>
                        <tfoot>
                        <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Pendapatan</th>
                                <th>{{ __('backend.actions') }}</th>

                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach($alls as $keys => $datas)
                        <tr>
                                <td>{{++$keys}}</td>
                                <td>{{$datas['date']}}</td>
                                <td>{{$datas['total_semua']}}</td>
                                <td><button type="button" data-salary="{{$datas['salary']}}"  data-pendapatan="{{$datas['pendapatan']}}" data-bahan="{{$datas['bahan']}}" data-pengeluaran="{{$datas['pengeluaran']}}" data-total_semua="{{$datas['total_semua']}}" class="btn btn-warning details"><i class="far fa-eye"></i></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                <tbody>
                     <tr>
                        <td>Pengeluaran : </td>
                        <td>Pengeluaran</td>
                    </tr>
                    <tr>
                    <td>Pengeluaran : </td>
                    <td>Pengeluaran</td>
                    </tr>
                </tbody>

            
                <table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

@stop
@section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>
<script type="text/javascript">
    var users =  <?php echo json_encode($all) ?>;
   $('.details').click(function() {
    $('#exampleModal').modal('show')
   });
    $("#datepicker").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years"
    });
    Highcharts.chart('container', {
        title: {
            text: 'Laporan Penjualan'
        },

         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Rugi laba',
            data: users,
            tooltip: {
                valueDecimals: 2
            }
        },{
            type: 'pie',
            name: 'Total consumption',
            data: [{
            name: 'Jane',
            y: 13,
            color: Highcharts.getOptions().colors[0] 
        }, {
            name: 'John',
            y: 23,
            color: Highcharts.getOptions().colors[1] 
        }, {
            name: 'Joe',
            y: 19,
            color: Highcharts.getOptions().colors[10]
        }],
        center: [100, 30],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
    $('#dataTable').DataTable();

</script>

@stop