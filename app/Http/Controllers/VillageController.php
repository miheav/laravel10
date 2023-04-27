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
    public function show(Request $request): Response
    {
        $villages = Village::get();

        return Inertia::render('Village', [
            'villages' => $villages
        ]);
    }
}
