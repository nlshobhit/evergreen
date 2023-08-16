<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;


class DataController extends Controller
{
    public function getData()
{
    $data = Inventory::all();
    dd($data);
    return response()->json($data);
}

}
