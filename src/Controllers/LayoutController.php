<?php

namespace Vedian\Grapebuilder\Controllers;

use Illuminate\Http\Client\Request;
use Vedian\Grapebuilder\Models\Layout;
use Vedian\Grapebuilder\Support\Facades\Templates;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $type)
    {
        if (!Templates::exists($type)) {
            return 'Layout part does not exist';
        }

        return Templates::view("layout.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $type)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Layout $layout)
    {
        dd($layout);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layout $layout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layout $layout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layout $layout)
    {
        //
    }
}
