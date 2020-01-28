<?php

namespace Modules\Salary\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Validator;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $salary = DB::table('salary')->leftjoin('bank','bank.id_bank','=','salary.id_bank')->join('positions','positions.id_positions','salary.id_position')
        ->select('bank.name_bank','positions.name_position','salary.id','salary.type_salary','salary.salary','salary.created_at','salary.updated_at')->get();
        $bank = DB::table('bank')->get();
        $positions = DB::table('positions')->get();
        return view('salary::index',compact('salary','positions','bank'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('salary::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_position' => 'required',
            'salary' => 'required',
            'type_salary' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['failed' => $validator->errors()]);      
        }
        DB::table('salary')->insert([
            'id_position' => $request->id_position,
            'salary' => $request->salary,
            'type_salary' => $request->type_salary,
            'id_bank' => $request->name_bank,
            'created_at' => date('Y-m-d h:i')
        ]);
        return response()->json(['success' => 'Success Add Salary']);      

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('salary::show');
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
      DB::table('salary')->where('id',$id)->delete();
      return response()->json(['success'=>'success Delete']);
    }
}
