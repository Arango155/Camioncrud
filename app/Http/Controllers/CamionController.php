<?php

namespace App\Http\Controllers;

use App\Models\CamionModel;
use App\Models\TransporteModel;
use Illuminate\Http\Request;

class CamionController extends Controller
{
    public function home2()
    {
        $dates = CamionModel::all();
        return view('home2', compact('dates'));
    }

    public function home()
    {
        $datos = TransporteModel::all();
        return view('home', compact('datos'));
    }


    public function create2()
    {
        return view('create2');
    }

    public function add2(Request $request)
    {

        $Object = new CamionModel();
        $Object->id_placa = $request->post('id_placa');
        $Object->placa_camion = $request->post('placa_camion');
        $Object->marca = $request->post('marca');
        $Object->color = $request->post('color');
        $Object->modelo = $request->post('modelo');
        $Object->capacidad_toneladas = $request->post('capacidad_toneladas');
        $Object->id_transporte = $request->post('id_transporte');
        $Object->save();

        return redirect()->route("home")->with("success", "Agregado con exito!");

    }

    public function add1(Request $request)
    {

        $Object1 = new TransporteModel();
        $Object1->id = $request->post('id');
        $Object1->nombre = $request->post('nombre');
        $Object1->razon_social = $request->post('razon_social');

        $Object1->save();

        return redirect()->route("create2")->with("success", "Agregado con exito!");

    }

    public function create1()
    {

        return view('create1');

    }

    public function delete1($id)
    {

        $transporte = TransporteModel::find($id);
        return view("delete1", compact('transporte'));

    }

    public function destroy1($id)
    {

        $transporte = TransporteModel::find($id);
        $transporte->delete();
        return redirect()->route("home")->with("success", "Eliminado con exito!");

    }

    public function destroy2($id_transporte)
    {

        $camion = CamionModel::find($id_transporte);
        $camion->delete();
        return redirect()->route("home2")->with("success", "Eliminado con exito!");

    }

    public function edit1($id)
    {

        $transporte = TransporteModel::find($id);
        return view("edit1", compact('transporte'));

    }

    public function update1(Request $request, $id)
    {
        $transporte = TransporteModel::find($id);

        $transporte->nombre = $request->post('nombre');
        $transporte->razon_social = $request->post('razon_social');
        $transporte->save();

        return redirect()->route("home")->with("success", "Actualizado con exito!");
    }

    public function edit2($id_placa)
    {

        $camion = CamionModel::find($id_placa);
        return view("edit2", compact('camion'));

    }

    public function update2(Request $request, $id_placa)
    {
        $camion = CamionModel::find($id_placa);

        $camion->placa_camion = $request->post('placa_camion');
        $camion->marca = $request->post('marca');
        $camion->color = $request->post('color');
        $camion->modelo = $request->post('modelo');
        $camion->capacidad_toneladas = $request->post('capacidad_toneladas');
        $camion->save();

        return redirect()->route("home2")->with("success", "Actualizado con exito!");
    }

    public function delete2 ($id_placa){

        $camion = CamionModel::find($id_placa);
        return view("delete2" , compact('camion'));

    }





}
