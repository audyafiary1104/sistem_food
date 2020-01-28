<?php

namespace Modules\Bank\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use Validator;
use DB;
class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $bank = DB::table('bank')->get();
        return view('bank::index',compact('bank'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_bank' => 'required|unique:bank|',
        ]);
        if ($validator->fails()) {
            return response()->json(['failed' => $validator->errors()]);      
        }
        DB::table('bank')->insert([
            'name_bank' => $request->name_bank,
            'created_at' => date('Y-m-d H:i'),
        ]);
            return response()->json(['success' => 'success Add Bank Name']);
    }


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
