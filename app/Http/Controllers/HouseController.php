<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\House;

class HouseController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function HouseList(Request $request): Response
    {

        $villages = House::orderBy('name')->paginate(15);

        return Inertia::render('HouseList', [
            'villages' => $villages
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function House($id): Response
    {
        $village = House::find($id);

        return Inertia::render('HouseView', [
            'village' => $village
        ]);
    }
}
