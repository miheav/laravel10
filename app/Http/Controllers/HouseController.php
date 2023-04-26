<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HouseController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(Request $request): Response
    {
        return view('user.index', [
            'users' => DB::table('users')->paginate(15)
        ]);
    }
}
