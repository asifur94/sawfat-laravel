<div class="p-6">
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
