<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Brian2694\Toastr\Facades\Toastr;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::latest()->get();
        return View::make('state.state', compact('states'));
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
            'state_name' => 'required | unique:states',
        ]);

        $state = new State();
        $state->state_name = $request->state_name;
        $state->save();

        Toastr::success('State Successfully Saved!!!', 'Saving State......');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $state)
    {
        $this->validate($request, [
            'state_name' => 'required | unique:states',
        ]);

        $state = State::findOrFail($state);
        $state->state_name = $request->state_name;
        $state->save();

        Toastr::success('State Successfully Updated!!!', 'Updating State......');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($state)
    {
        $state = State::findOrFail($state);
        $state->delete();

        Toastr::success('State Successfully Deleted!!!', 'Deleting State......');
        return back();
    }
}
