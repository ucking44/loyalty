<?php

namespace App\Http\Controllers;

use App\Models\LGA;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\View;

class LGAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        $lgas = DB::table('l_g_a_s')
                    ->join('states', 'l_g_a_s.state_id', '=', 'states.id')
                    ->select('l_g_a_s.*', 'states.state_name')
                    ->latest()
                    ->get();
        return View::make('lga.lga', compact('states', 'lgas'));
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
            'state_name' => 'required',
            'lga_name'     => 'required | unique:l_g_a_s',
        ]);

        $lga = new LGA();
        $lga->state_id = $request->state_name;
        $lga->lga_name = $request->lga_name;
        $lga->save();

        Toastr::success('LGA Successfully Saved!!!', 'Saving LGA......');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LGA  $lGA
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
     * @param  \App\Models\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lga = LGA::findOrFail($id);
        $lga->state_id = $request->state_name;
        $lga->lga_name = $request->lga_name;
        $lga->save();

        Toastr::success('LGA Successfully Updated!!!', 'Updating LGA......');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lga = LGA::findOrFail($id);
        $lga->delete();

        Toastr::success('LGA Successfully Deleted!!!', 'Deleting LGA......');
        return back();
    }
}
