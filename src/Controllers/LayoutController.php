<?php

namespace Vediansoftware\Grapebuilder\Controllers;

use Vediansoftware\Grapebuilder\Classes\LayoutPart;
use Vediansoftware\Grapebuilder\Contracts\LayoutPartContract;
use Vediansoftware\Grapebuilder\Requests\StoreLayoutRequest;
use Vediansoftware\Grapebuilder\Requests\UpdateLayoutRequest;
use Vediansoftware\Grapebuilder\Models\Layout;
use Vediansoftware\Grapebuilder\Support\LayoutPartEnum;

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
        if(!LayoutPartEnum::tryFrom($type)) {
            return 'noob page does not exist';
        }

        return 'layout/part/' . $type;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Layout $layout)
    {
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
    public function update(UpdateLayoutRequest $request, Layout $layout)
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
