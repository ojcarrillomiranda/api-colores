<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Requests\StoreColorRequest;
use App\Http\Requests\UpdateColorRequest;

class ColorController extends Controller
{

    public function index()
    {
        return Color::simplepaginate(10);
    }


    public function store(StoreColorRequest $request)
    {
        //$color = new Color();
         // $color->name = $request->name;
        // $color->year = $request->year;
        // $color->color = $request->color;
        // $color->pantone_value = $request->pantone_value;
        // $color->save();

        $color = Color::create($request->all());
        return $color;
    }

    public function show($id)
    {
        $color = Color::find($id);
        return $color;
    }


    public function update(UpdateColorRequest $request, $id)
    {
        $color = Color::find($id);
        // $color->name = $request->name;
        // $color->year = $request->year;
        // $color->color = $request->color;
        // $color->pantone_value = $request->pantone_value;
        // $color->save();
        $color->update($request->all());
        return $color;
    }


    public function destroy($id)
    {
        $color = Color::destroy($id);
        return Color::all();
    }
}
