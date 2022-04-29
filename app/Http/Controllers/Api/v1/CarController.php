<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function all()//показывает все машины
    {
        return Car::all();
    }


    public function addCar (Request $request)//добавляет новую машину
    {

         if(!$request['car']){
            return  response()->json(['result' => 'Erorr, field car must be filled '], 400);
        }

        if(Car::where('number', $request['number'])->first()){
            return  response()->json(['result' => 'Erorr, car with this number is already registered'], 400);
        }

        $car = Car::create(['car'=>$request['car'],'number'=>$request['number']]);

        return $car;

    }


    public function show($id)//показывает одну машину
    {
        return Car::findOrFail($id);
    }


    public function setDriver(Request $request)//id driver_id
    {
        if(!$request['id']){
            return  response()->json(['result' => 'Erorr, field id must be filled '], 400);
        }

        if(!Car::where('id', $request['id'])->first()){
            return  response()->json(['result' => 'Erorr, no car wit this id '], 400);
        }

        if(!Car::where('id', $request['id'])->first()){
            return  response()->json(['result' => 'Erorr, no car wit this id '], 400);
        }

        if(Car::where('driver_id', $request['driver_id'])->first()){
            return  response()->json(['result' => 'Erorr, this driver already driving another car '], 400);
        }

        $car = Car::where('id',$request['id'])->update(['driver_id' => $request['driver_id']]);

        return response()->json(['result' => 'set driver successfuly'], 200);
    }


    public function delCar($id)//удаляет машину с айди
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(['result' => 'del successfuly'], 200);
    }

    public function freeCar()//показывает свободные машины
    {
        $car = Car::where('driver_id','free')->get();

        if(!isset($car[0])){
            return response()->json(['result' => 'no free car now '], 200);
        }

        return $car;
    }
}
