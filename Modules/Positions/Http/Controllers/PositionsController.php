<?php

namespace Modules\Positions\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Validator;
use DB;
use Carbon\Carbon;
class PositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $positions = DB::table('positions')->get();
        return view('positions::index',compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_position' => 'required|unique:positions|',
        ]);
        if ($validator->fails()) {
            return response()->json(['failed' => $validator->errors()]);      
        }
        DB::table('positions')->insert([
            'name_position' => $request->name_position,
            'created_at' => date('Y-m-d H:i'),
        ]);
            return response()->json(['success' => 'success Add Positions']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('positions::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('positions::edit');
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
