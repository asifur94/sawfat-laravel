{{-- <div class="p-6">
    <form wire:submit.prevent="productUpdate">
        <div class="mb-6">
            @include('components.form-field', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => 'required',
            ])
        </div>

        <div class="mb-6">
            @include('components.form-field', [
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'placeholder' => 'Enter name',
            'required' => 'required',
            ])
        </div>

        <div class="mb-6">
            @include('components.form-field', [
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
            'placeholder' => 'Add price',
            'required' => 'required',
            ])
        </div>

        <div class="mb-6">
            <div class="mb-6">
                @include('components.form-field', [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'image',
                'placeholder' => 'Image Url',
                'required' => 'required',
                ])
            </div>
        </div>



        @include('components.wire-loading-btn')
    </form>
</div>
 --}}


<div>
    <form class="p-4" wire:submit.prevent="productEdit">
        <div class="flex w-full">
            @include('components.form-field',['name'=>'product_name','type'=>'text','label' => 'Name', 'placeholder'=>'Product Name'])
            @include('components.form-field',['name'=>'product_image','type'=>'text','label' => 'Image', 'placeholder'=>'image url'])
            @include('components.form-field',['name'=>'price','type'=>'number','label' => 'Price', 'placeholder'=>'Amount'])
        </div>
        <div class="w-full mt-8">
            @include('components.form-field',['name'=>'description','type'=>'textarea','label' => 'Description', 'placeholder'=>'Description'])
        </div>





        @include('components.wire-loading-btn',[
            // 'target' =>'productEdit',
            // 'class' => 'bg-green-500 ml-3',
            // 'buttonText'=>'Update'
        ])
    </form>

</div>
