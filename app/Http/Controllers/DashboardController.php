<?php

namespace App\Http\Controllers;

use App\Models\LGA;
use App\Models\User;
use App\Models\Ward;
use App\Models\State;
use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return View::make('dashboard.users', compact('users'));
    }

    public function dashboard()
    {
        $users = User::count();
        $states = State::count();
        $lgas = LGA::count();
        $wards = Ward::count();
        $citizens = Citizen::count();

        return View::make('dashboard.dashboard', compact('users', 'states', 'lgas', 'wards', 'citizens'));

    }

}
