<?php

namespace Modules\LaporanPenjualan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;

class LaporanPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {  
        $month_name = [];
        for($m=1; $m<=12; ++$m){
           array_push($month_name, date('m', mktime(0, 0, 0, $m, 1)));
        }
        $all = [];
        $alls = [];
        foreach ($month_name as $key => $value) {
             $pemasukan = DB::table('pesanan')->whereMonth('created_at', $value)->whereYear('created_at', date('Y'))->sum('total'); 
            $rugi = DB::table('pengeluaran')->whereMonth('created_at', $value)->orWhere('type_pengeluaran','Perbulan')->whereYear('created_at', date('Y'))->sum('harga');
            $pengeluaran = [
                'salary' => DB::table('salary')->sum('salary'),
                'pengeluaran' => $rugi,
                'bahan' => DB::table('bahan_baku')->sum('harga'),
            ];
            $first = '01-'.$value.'-'.date('Y');
            $last = date("t-M-Y", strtotime($first));
            $details = [
                'salary' => DB::table('salary')->sum('salary'),
                'pengeluaran' => $rugi,
                'bahan' => DB::table('bahan_baku')->sum('harga'),
                'pendapatan' =>  $pemasukan,
                'total_semua' => $pemasukan - array_sum($pengeluaran),
                'date' => $first .' /sd '. $last,
            ];
            array_push($all,$pemasukan - array_sum($pengeluaran));
            array_push($alls,$details);
        }
        return view('laporanpenjualan::index',compact('all','alls'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function datatables()
    {
        return view('laporanpenjualan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('laporanpenjualan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('laporanpenjualan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
