<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CourseCreate extends Component
{
    public $name;
    public $description;
    public $price;
    public $image = [];




    protected $rules = [
        'name' => 'required|unique:product,name',
        'description' => 'required',
        'image' => 'required',
        'price' => 'required',

    ];

    public function render()
    {
        return view('livewire.product-create');
    }

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

