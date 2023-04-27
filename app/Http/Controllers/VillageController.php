<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VillageController extends Model
{
    /**
     * Display the user's profile form.
     */
    public function villageList(Request $request): Response
    {
        $villages = Village::orderBy('name')->paginate(15);

        return Inertia::render('VillageList', [
            'villages' => $villages
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function village($id): Response
    {
        $village = Village::find($id);

        return Inertia::render('VillageView', [
            'village' => $village
        ]);
    }
}
