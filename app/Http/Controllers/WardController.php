<?php

namespace App\Http\Controllers;

use App\Models\LGA;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\View;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lgas = LGA::all();
        $wards = DB::table('wards')
                    ->join('l_g_a_s', 'wards.lga_id', '=', 'l_g_a_s.id')
                    ->select('wards.*', 'l_g_a_s.lga_name')
                    ->latest()
                    ->get();
        return View::make('ward.ward', compact('lgas', 'wards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lga_name'     => 'required',
            'ward_name'    => 'required | unique:wards'
        ]);

        $ward = new Ward();
        $ward->lga_id = $request->lga_name;
        $ward->ward_name = $request->ward_name;
        $ward->save();

        Toastr::success('Ward Successfully Saved!!!', 'Saving Ward......');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ward = Ward::findOrFail($id);
        $ward->lga_id = $request->lga_name;
        $ward->ward_name = $request->ward_name;
        $ward->save();

        Toastr::success('Ward Successfully Updated!!!', 'Updating Ward......');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ward = Ward::findOrFail($id);
        $ward->delete();

        Toastr::success('Ward Successfully deleted!!!', 'Deleting Ward......');
        return back();
    }
}
