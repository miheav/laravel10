<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VillagesController
{
    /**
     * Display the user's profile form.
     */
    public function show(Request $request): Response
    {
        return Inertia::render('villages', [
            'ass' => 1
        ]);
    }
}
