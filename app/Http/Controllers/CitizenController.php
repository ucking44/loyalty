<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = Ward::all();
        $citizens = DB::table('citizens')
                    ->where('user_id', Auth::id())
                    ->join('users', 'citizens.user_id', '=', 'users.id')
                    ->join('wards', 'citizens.ward_id', '=', 'wards.id')
                    ->select('citizens.*', 'users.name', 'wards.ward_name')
                    ->latest()
                    ->get();
        return View::make('citizen.citizen', compact('wards', 'citizens'));
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
            'user_id'      => 'required',
            'ward_name'    => 'required',
            'citizen_name' => 'required | unique:citizens',
            'gender'       => 'required',
            'address'      => 'required',
            'phone'        => 'required',
        ]);

        $citizen = new Citizen();
        $citizen->user_id = Auth::user()->id;
        $citizen->ward_id = $request->ward_name;
        $citizen->citizen_name = $request->citizen_name;
        $citizen->gender = $request->gender;
        $citizen->address = $request->address;
        $citizen->phone = $request->phone;
        $citizen->save();

        Toastr::success('Citizen Successfully Saved!!!', 'Saving Citizen......');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citizen  $citizen
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
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $citizen = Citizen::findOrFail($id);
        $citizen->user_id = Auth::user()->id;
        $citizen->ward_id = $request->ward_name;
        $citizen->citizen_name = $request->citizen_name;
        $citizen->gender = $request->gender;
        $citizen->address = $request->address;
        $citizen->phone = $request->phone;
        $citizen->save();

        Toastr::success('Citizen Successfully Updated!!!', 'Updating Citizen......');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citizen = Citizen::findOrFail($id);
        $citizen->delete();

        Toastr::success('Citizen Successfully Deleted!!!', 'Deleting Citizen......');
        return back();
    }
}
