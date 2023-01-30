<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Livewire\ProductPurchase;

class ProductPurchaseController extends Controller
{
    public function index(){
        $purchase = ProductPurchase::get();

        return response()->json([
            'purchases'=>$purchase
        ]);
    }
}
