


@include('Admin.AdminNav')

@include('Admin.adminSidelink')

 <div class="p-4 sm:ml-64 mt-4">
    <div class=" rounded-lg dark:border-gray-700">

        <div class="">
            <h1 class="text-center font-semibold text-gray-950">Add New Items</h1>
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
        <div class="alert alert-danger">
            {{ session('success') }}
        </div>
    @endif
    
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        </div>
          <div class="justify-center flex mt-4 ">






            <form class="ml-10 ms-10 w-96 justify-items-center"  enctype="multipart/form-data" action="{{route('products_update', $product->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>

        <input type="text" name="name" value=" {{$product->productName}} " id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />

    </div>
     <div class="mb-6">
      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
      <input type="number" name="price" value="{{$product->productPrice}}" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
     </div>
     
<div class="mb-6">
    <label for="saleType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Sale Type</label>
    <select id="saleType" name="saleType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
       <option disabled selected>Slect Sale Type</option>
      <option value="yes">On promotion</option>
      <option value="not">Not Promotion</option>
    </select>
</div>


<div class="mb-6">

    <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping method</label>
    <select id="shipping" name="shipping" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      <option value=" {{$product->shipping_method}} ">{{$product->shipping_method}}</option>
        <option selected>Free</option>
      <option value="pay">Payed</option>
    </select>
</div>


<div class="mb-6">

    <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Badge</label>
 <select id="shipping" name="badge" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="{{$product->Badge}}" selected>{{$product->Badge}}</option>
    <option value="out">Out of stock</option>
    <option value="0">none</option>
</select>

</div>

    <div class="mb-6">

            <label for="ProductType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Type</label>
            <select id="ProductType" name="ProductType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
         @foreach ($SavedType as $type )


              <option value=" {{$type->NewTypeName}} ">{{$type->NewTypeName}}</option>

              @endforeach
            </select>
    </div>
    
        <div class="mb-6">
        <label for="ProductType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount Rate</label>

            <input type="number" name="discount" value="{{$product->discount}}" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Product price" required />

        </select>
</div>

<div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Write Product Description</label>
    <textarea id="description" name="description" rows="4" class="border border-gray-300 rounded-lg w-full px-0 text-sm text-gray-900 bg-white dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="{{$product->productDescription}}" required>{{$product->productDescription}}</textarea>
</div>




    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Product Images</label>
        <input type="file" name="file[]" id="file-input" multiple class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" onchange="previewImages()">
      </div>

      <button type="submit" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit Product</button>

      </div>


</form>

</div>
</div>
</div>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

