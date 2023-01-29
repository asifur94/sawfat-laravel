<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product_id;
    public $name;
    public $product_name;
    public $product_image;
    public $description;
    public $price;
    public $slug;
    public $time;



    public function render()
    {
        return view('livewire.product-edit');
    }
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',

        'time' => 'required'
    ];

    // public function mount()
    // {
    //     $product = Product::where('id', $this->product_id)->first();

    //     $this->name = $product->name;
    //     $this->description = $product->description;
    //     $this->image = $product->image;
    //     $this->price = $product->price;

    // }


    public function mount(){

        $product = Product::findOrFail($this->product_id);

        $this->product_name = $product->name;
        $this->product_image = $product->image;
        $this->price = $product->price;
        $this->description = $product->description;

        }


    public function productEdit(){
        $product = Product::findOrFail($this->product_id);
        $this->validate();

        // $product = Product::where('id', $this->product_id)->first();
        $product->name = $this->product_name;
        $product->description = $this->description;
        $product->image = $this->product_image;
        $product->price = $this->price;
        $product->save();

    }
    public function productUpdate()
    {
        $this->validate();




        // $product->update([
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'price' => $this->price,
        //     'user_id' => auth()->user()->id
        // ]);



        flash()->addSuccess('Product updated successfully');

        return redirect()->route('product.index');
    }
}
