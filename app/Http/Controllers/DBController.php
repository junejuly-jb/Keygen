<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Haruncpi\LaravelIdGenerator\IdGenerator;



class DBController extends Controller
{
    public function index(){
        $config = [
            'table' => 'items',
            'length' => 7,
            'prefix' => 'MSRO'
        ];
    
        $id = IdGenerator::generate($config);
    
        $item = new Items([
            'id' => $id,
            'name' => 'jhon'
        ]);

        $item->save();
        dd($id);
    }
}
