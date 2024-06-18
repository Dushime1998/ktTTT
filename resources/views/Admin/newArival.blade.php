


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-auto bg-gray-100 text-white">
        <div class="flex flex-col w-64">
     @include('Admin.adminSidelink')
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl"> KIGALI TECHNICAL ZONE</p></div>
                <div class="px-4">
                    <a href="{{route("logout")}}" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
           {{-- support form update --}}

           <div class=" rounded-lg dark:border-gray-700">

            <div class="">
                <h1 class="text-center font-semibold text-gray-950"> New Arrival</h1>
                
                @if(session()->has('success'))
                    <div class="alert alert-success bg-green-500 ">
                     <h1 class="text-white">   {{ session()->get('success') }} </h1>
                    </div>
                @endif
    
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
            </div>
              <div class="justify-center flex mt-4 ">
    
    
    
                <form class="ml-10 ms-10 w-96 justify-items-center"  enctype="multipart/form-data" action="{{route('newArrival')}}" method="post">
                    @csrf
                    <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required />
        </div>
    <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Product price" required />
    </div>
    <div class="mb-6">
    
        <label for="saleType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Sale Type</label>
        <select id="saleType" name="saleType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    
          <option value="yes">On promotion</option>
          <option value="not">Not Promotion</option>
        </select>
    </div>
    
    
    <div class="mb-6">
    
        <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping method</label>
        <select id="shipping" name="shipping" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option selected>Free</option>
          <option value="pay">Payed</option>
        </select>
    </div>
    
    <div class="mb-6">
    
        <label for="shipping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Badge</label>
        <select id="shipping" name="badge" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option selected>New</option>
          <option value="out">Out of stock</option>
           <option value="0">none</option>
           
        </select>
    </div>
        <div class="mb-6">
                <label for="ProductType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Type</label>
                <select id="ProductType" name="ProductType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
             @foreach ($SavedType as $type )
                  <option value="{{$type->NewTypeName}}">{{$type->NewTypeName}}</option>
                  @endforeach
                </select>
        </div>
    
    
        <div class="mb-6">
            <label for="ProductType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount Rate</label>
    
                <input type="number" name="discount" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Product price" required />
    
            </select>
    </div>
    
        <div class="mb-6 ">
    
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Write Product Description</label>
            <textarea id="description" name="description" rows="4" class=" border border-gray-300 rounded-lg w-full px-0 text-sm text-gray-900 bg-white  dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write product description..." required></textarea>
    
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

    {{-- end of support form updata --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
