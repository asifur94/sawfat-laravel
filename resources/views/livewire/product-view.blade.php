<div class="mx-auto p-4 text-gray-800">
    <h1 class="font-bold mb-2 underline">{{$product->name}}</h1>
    <p class="mb-4 italic">Price: ${{$product->price}}</p>
    <p class="pb-6">{{$product->description}}</p>
    <p class="pb-6">{{$product->image}}</p>


    <h2 class="font-bold mb-2">Products</h2>
    <table class="w-full table-auto">
        <tr>
            <th class="border px-4 py-2 text-left">Name</th>
            <th class="border px-4 py-2 text-left">Actions</th>
        </tr>


    </table>
</div>
