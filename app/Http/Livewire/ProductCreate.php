<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductCreate extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('livewire.product-create');
    }
    protected $rules = [
        'name' => 'required|unique:product,name',
        'description' => 'required',

        'image' => 'required',
        'price' => 'required',

    ];
    public function formSubmit()
    {
        $this->validate();
        $product = Product::create([

            'name' => $this->name,
            'slug' => str_replace(' ', '-', $this->name),
            'description' => $this->description,
            'image' => $this->image,
            'price' => $this->price,
            'user_id' => Auth::user()->id
        ]);



        return redirect()->route('product.index');
    }
}
