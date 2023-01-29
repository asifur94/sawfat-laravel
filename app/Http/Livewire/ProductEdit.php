<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product_id;
    public $name;
    public $description;
    public $price;
    public $image = [];



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

    public function mount()
    {
        $product = Product::where('id', $this->product_id)->first();

        $this->name = $product->name;
        $this->description = $product->description;
        $this->image = $product->image;
        $this->price = $product->price;

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
