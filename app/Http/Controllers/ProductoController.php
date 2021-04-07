<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    

    public function index(Request $request){
        if ($request->has('txtBuscar')){
            return Producto::where('codigoProd',$request->txtBuscar)
                            ->orWhere('nombreProd','like','%'.$request->txtBuscar.'%')->get();
        }
        else
            return Producto::all();
    }

    public function show($codigoProd){
        return Producto::firstOrFail($codigoProd);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombreProd' => 'required|min:3|max:100',
            'descProd' => 'required|min:5|max:200',
            'percioProd' => 'required',
            'stokProduc' => 'required'
        ]);
        $input = $request->all();
        Producto::create($input);
        return response()->json([
            'res'=>true,
            'message'=>'Registro Insertado',
        ]);

    }

    public function update($codigoProd, Request $request){
        $this->validate($request, [
            'nombreProd' => 'required|min:3|max:100',
            'descProd' => 'required|min:5|max:200',
            'percioProd' => 'required',
            'stokProduc' => 'required'
        ]);

        $input = $request->all();
        $producto = Producto::where('codigoProd',$codigoProd);
        $producto->update($input);

        return response()->json([
            'res'=>true,
            'message'=>'Registro Actualizado',
        ]);
    }

    //
}
