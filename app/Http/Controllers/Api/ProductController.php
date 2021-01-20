<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function get(){
        return response()->json(
            [
                'message' => 'success get data products',
            ]
        );
    }

    function post(){
        return response()->json(
            [
                'message' => 'succes post data product'
            ]
        );
    }
    function put($id){
        return response()->json(
            [
                'message' => 'success update data product'. $id,
                'id' => $id
            ]
        );
    }

    function delete ($id){
        return response()->json(
            [
                'message' => 'success delete products'. $id,
                'id' => $id
            ]
        );
    }
}
