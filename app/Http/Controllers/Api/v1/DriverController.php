<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function all()//показывает всех водителей
    {
        return Driver::all();
    }

    public function addDriver (Request $request)//добавляет нового водителя post name phone
    {

        if(!$request['name']){
            return  response()->json(['result' => "Erorr, field 'name' must be filled "], 400);
        }

        if(!$request['phone']){
            return  response()->json(['result' => "Erorr, field 'phone' must be filled"], 400);
        }

        if(Driver::where('phone', $request['phone'])->first()){
            return  response()->json(['result' => 'Erorr, driver with this  phone number is already registered'], 400);
        }

        $car = Driver::create(['name'=>$request['name'],'phone'=>$request['phone']]);

        return $car;

    }

    public function show($id)//показывает водителя и машину
    {

        return Driver::findOrFail($id)->with('car')->first();
    }

    public function delDriver($id)//удаляет машину с айди
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return response()->json(['result' => 'del successfuly'], 200);
    }


}
