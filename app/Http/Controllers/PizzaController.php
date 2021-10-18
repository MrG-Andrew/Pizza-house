<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'beef', 'base' => 'cheesy crust','price' => 10],
            ['type' => 'chicken', 'base' => 'thin & crispy','price' => 12],
            ['type' => 'mushroom', 'base' => 'garlic crust','price' => 6],
            ];
        
          
        
            return view('pizzas',[
                'pizzas' => $pizzas,
                'name' => request('name'),
                'age' => request('age'),
            ]);
    }

    public function show($id){
        return view('details' , ['id' => $id ]);
    }

}
