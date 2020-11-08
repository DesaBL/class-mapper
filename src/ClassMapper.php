<?php


namespace DesaBL\ClassMapper;


use Illuminate\Http\Request;

class ClassMapper
{
    public static function show(Request $request)
    {
        if($request->get('generate-new', false) === true){
            // TODO Generate view with new data
        }

        return view('ClassMapper::class_mapper')->with('data', [
            'name' => 'Milan Desancic'
        ]);
    }

}