<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductEdit extends Component
{
    public $course_id;
    public $name;
    public $description;
    public $price;
    public $image = [];



    public function render()
    {
        return view('livewire.product-edit');
    }
}
