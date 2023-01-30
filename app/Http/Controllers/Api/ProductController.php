<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->take(12)->get();

        return response()->json([
            'products'=>$products
        ]);
    }
    public function order(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'phone_number'=>'required',
                'address' =>'required',
                'selectedProducts'=>'required',
                'quantities'=>'required',
            ]
        );
        $invoice = new Invoice();
        $invoice->name = $request->name;
        $invoice->phone = $request->phone_number;
        $invoice->address = $request->address;
        $invoice->save();


        foreach (json_decode($request->selectedProducts) as $id) {
            $product = Product::findOrFail($id);
            $invoiceItem = new InvoiceItem();
            $invoiceItem->product_id = $product->id;
            $invoiceItem->amount = $product->price * json_decode($request->quantities,true)[$id];
            $invoiceItem->quantity = json_decode($request->quantities,true)[$id];
            $invoiceItem->invoice_id = $invoice->id;
            $invoiceItem->save();
        }
      return  response()->json([
            'message' => 'Product order successfully',
        ]);
    }
}
