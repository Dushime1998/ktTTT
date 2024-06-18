
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

 {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />  --}}
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> 
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Include Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

   <link rel="icon" href="{{asset('image/logo.jpg')}}" type="image/icon type">
<style>
    /* CSS for small screens (phones) */
    @media screen and (max-width: 768px) {
      .responsive {
        display: block;
      }
      .non-responsive {
        display: none;
      }
    }

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

.blink {
  animation: blink 1s infinite;
}
    /* CSS for large screens (PCs) */
    @media screen and (min-width: 769px) {
      .responsive {
        display: none;
      }
      .non-responsive {
        display: block;
      }
    }

    .black-bg-btn {
    background-color: black;
}


    .custom-button {

    right: 2.5rem;
    bottom: 2.5rem;
    color: white;
    background-color: black;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
}

 .hover {
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
  }

  .hover:hover {
    background-color: #EF4444; /* Red */
    color: #ffffff; /* White text */
  }

.cartbtn {

    background-color:black;
}

.custom-button:hover {
    background-color: #e53e3e; /* Adjust the hover background color as needed */
}

/*animation sentence*/
.container {
  overflow: hidden;
  width: 100%;
}

.animated-textt {

  background-color:black; /* Background color */
  color: white; /* Text color */
  padding: 20px; /* Padding around the text */
  border-radius: 10px; /* Rounded corners */
  font:bold;
  white-space: nowrap;
  width: 100%;
  display: inline-block;
}


.animated-text {
  animation: slideRightToLeft 30s linear infinite; /* Adjust duration and timing function as needed */
  display: inline-block;


}
@keyframes slideRightToLeft {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}

#default-carousel {
    position: relative; /* Ensure it's positioned correctly */
    z-index: 1; /* Adjust this value as needed */
    overflow: hidden; /* Prevents overflow issues */
}

.relative {
    position: relative;
    overflow: hidden; /* Prevent content from overflowing */
}

.other-element {
    position: relative;
    z-index: 2; /* Ensure it's higher than the carousel */
}
  .my-link:hover {
    background-color: black;
  }

/* tooltip */

/*end of animation sentence*/

  </style>

</head>
<body class="bg-gray-100">






    <nav class="bg-red-500 border-gray-200 dark:bg-gray-900 w-full">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl bg-red-500  p-4">
            <!-- Logo and Title -->
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.jpg') }}" class="h-8 rounded-full" alt="Flowbite Logo" />
                <span class="self-center text-white text-2xl font-semibold whitespace-nowrap dark:text-white">KTZ</span>
            </a>

            <!-- Contact and Cart -->
            <div class="flex items-center space-x-6 rtl:space-x-reverse">

                <a href="tel:0783159293" class="flex text-sm text-white dark:text-white hover:underline">

                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" class="text-gray-50" clip-rule="evenodd" d="M17.3545 22.2323C15.3344 21.7262 11.1989 20.2993 7.44976 16.5502C3.70065 12.8011 2.2738 8.66559 1.76767 6.6455C1.47681 5.48459 2.00058 4.36434 2.88869 3.72997L5.21694 2.06693C6.57922 1.09388 8.47432 1.42407 9.42724 2.80051L10.893 4.91776C11.5152 5.8165 11.3006 7.0483 10.4111 7.68365L9.24234 8.51849C9.41923 9.1951 9.96939 10.5846 11.6924 12.3076C13.4154 14.0306 14.8049 14.5807 15.4815 14.7576L16.3163 13.5888C16.9517 12.6994 18.1835 12.4847 19.0822 13.1069L21.1995 14.5727C22.5759 15.5257 22.9061 17.4207 21.933 18.783L20.27 21.1113C19.6356 21.9994 18.5154 22.5232 17.3545 22.2323ZM8.86397 15.136C12.2734 18.5454 16.0358 19.8401 17.8405 20.2923C18.1043 20.3583 18.4232 20.2558 18.6425 19.9488L20.3056 17.6205C20.6299 17.1665 20.5199 16.5348 20.061 16.2171L17.9438 14.7513L17.0479 16.0056C16.6818 16.5182 16.0047 16.9202 15.2163 16.7501C14.2323 16.5378 12.4133 15.8569 10.2782 13.7218C8.1431 11.5867 7.46219 9.7677 7.24987 8.7837C7.07977 7.9953 7.48181 7.31821 7.99439 6.95208L9.24864 6.05618L7.78285 3.93893C7.46521 3.48011 6.83351 3.37005 6.37942 3.6944L4.05117 5.35744C3.74413 5.57675 3.64162 5.89565 3.70771 6.15943C4.15989 7.96418 5.45459 11.7266 8.86397 15.136Z" fill="#F8F3F3"/>
                    </svg>
                  (+250) 784-424-778</a>
               
                {{-- <a href="tel:0783159293" class="text-xl text-white dark:text-white hover:underline">(+250) 784-424-778</a> --}}

                <!-- Cart Indicator -->
                @if (session('cartTotalQuantity') > 0)
                    <div class="text-center indicator bg-red-500">
                        <a href="#" class="text-gray-50" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item text-gray-900">{{ session('cartTotalQuantity') }}</span>
                        </a>
                    </div>
                @else
                    <div class="text-center indicator bg-red-500">
                        <a href="#" class="text-white" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item bg-gray-900 text-gray-50">0</span>
                        </a>
                    </div>
                @endif
            </div>

            <!-- Dropdown Menu -->
            <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="py-2">
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

{{-- second searchbar --}}
<div class="navbar bg-base-100 non-responsive">
    <div class=" w-40">
        <ul class="menu menu-horizontal px-1">
        <li>
            
     <a href="/" class="bg-gray-600 hover:bg-gray-800" style="background-color:white;">



                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                Home
            </a>
        </li>
        </ul>
    </div>
    <div class="flex-none w-full max-w-xl mx-auto">
        <div class="form-control w-full">
            <form action="{{ route('product_search') }}" method="GET" class="w-full mx-auto mt-4 px-4">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search product name or price..." required />
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-r from-gray-700 to-gray-600 hover:from-gray-800 hover:to-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-600 dark:hover:from-gray-800 dark:hover:to-gray-700 dark:focus:ring-gray-800">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li>
                <a href="{{ route('check-category', ['id' => 'support']) }}" class=" ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                      </svg>
                  Support
                </a>
              </li>

              <li>
                <a href="{{route('showContacUs')}}" class=" hover:bg-gray-900 hover:text-gray-50 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                      </svg>

                  Contact Us
                </a>
              </li>
              <li>
                <a href="{{route('showAboutUs')}}"   class=" hover:bg-gray-900 hover:text-gray-50   text-gray-900 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                      </svg>

                  About Us
                </a>
              </li>
<li>
    @if(Auth::check())
        <a href="{{ route('logout') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <a href="{{ route('loginPage') }}" class="hover:bg-red-500 hover:text-gray-50 bg-black text-gray-50">
   <?xml version="1.0" encoding="utf-8"?>   
<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg class="text-black"">
<path d="M15 12L2 12M2 12L5.5 9M2 12L5.5 15" stroke="#E8EAF1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<path d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827" stroke="#E8EAF1" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            Login
        </a>
    @endif
</li>

        </ul>
    </div>
</div>


{{-- end of searchbar --}}


<!-- drawer init and show -->
<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-full h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">HOME</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="fixed text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5  top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="w-full overflow-y-auto">
        <body>
            <div class="h-screen bg-white pt-20">
                <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
                <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
                    <div class="rounded-lg md:w-2/3">
                        @php
                        $subtotal = 0; // Initialize subtotal
                        @endphp
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $product)
                        @php
                        $imageArray = json_decode($product['image'], true);
                        $itemTotal = $product['price'] * $product['quantity']; // Calculate item total
                        $subtotal += $itemTotal; // Add to subtotal
                        @endphp
                        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                            @if ($imageArray && isset($imageArray[0]))
                            <img src="{{ asset('uploads/' . $imageArray[0]) }}" alt="{{ $product['name'] }}" class="w-24 h-24 rounded-lg sm:w-40">
                            @else
                            <span>No Image</span>
                            @endif
                            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                <div class="mt-5 sm:mt-0">
                                    <h2 class="text-lg font-bold text-gray-900">{{ $product['name'] }}</h2>
                                    <p class="mt-1 text-xs text-gray-700">RWF{{ $product['price'] }}</p>
                                </div>
                                <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                    <div class="flex items-center border-gray-100">
                                        <button class="h-8 w-8 border bg-white text-center text-xs outline-none quantity-remove" data-id="{{ $id }}">-</button>
                                        <input class="h-8 w-24 border bg-white text-center text-xs outline-none quantity" type="number" value="{{ $product['quantity'] }}" min="1" data-price="{{ $product['price'] }}" data-id="{{ $id }}" />
                                        <button class="h-8 w-8 border bg-white text-center text-xs outline-none quantity-add" data-id="{{ $id }}">+</button>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <p class="text-sm">RWF{{ $itemTotal }}</p>
                                        <form action="{{ route('removeFromCart', $product['id']) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Sub total -->
                    <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                        <div class="mb-2 flex justify-between">
                            <p class="text-gray-700">Subtotalll</p>
                            <p id="subtotal" class="text-gray-700">${{ $subtotal }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-gray-700">Shipping</p>
                            <p class="text-gray-700">Free</p>
                        </div>
                        <hr class="my-4" />
                        <div class="flex justify-between">
                            <p class="text-lg font-bold">Totall</p>
                            <div class="">
                                <p id="total" class="mb-1 text-lg font-bold">${{ $subtotal }} $USD</p>
                                {{-- <p class="text-sm text-gray-700">including VAT</p> --}}
                            </div>
                        </div>
                        {{-- model view for pay checkout --}}
                        @if(auth()->check() && !empty(auth()->user()->name))
                        <!-- You can open the modal using ID.showModal() method -->
<button class="btn w-full text-white bg-gray-900 hover:bg-red-700" onclick="my_modal_1.showModal()">Checkout</button>

@else

<button class="btn w-full text-white bg-gray-900 hover:bg-red-700" onclick="my_modal_3.showModal()">Checkout</button>

@endif

{{-- dialogs --}}
<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <p class="py-4">Please Login or create account to continue</p>
    </div>
  </dialog>
{{-- another dialog --}}
<dialog id="my_modal_1" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>



      <form action="{{route('payTeste')}}" method="post">
        @csrf
      <div class="mb-5">

        <input type="amount" name="amount" value="{{$subtotal}}"  class="hidden" />
        <input type="text" name="PayType" value="cart"  class="hidden" />

      </div>
      <div class="mb-5">
          <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone</label>

          <div class="relative">

              <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                  <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                      <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                  </svg>
              </div>
              <input type="texte"  name="phone" id="phone-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Momo Phone" required />
          </div>
      </div>
      <div class="flex items-start mb-5">

      <button type="submit" class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Pay</button>
    </form>

    </div>
</dialog>

  {{-- end of dialogs --}}
{{-- end for pay checkout --}}
                        {{-- <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button> --}}
                    </div>
                    @else
                    <p  class="flex items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                          </svg>

<span>Your shopping cart is empty </span>



                        </p>
                    @endif
                </div>
            </div>
            </div>
        </body>
    </div>
</div>



    <a href="https://wa.me/+250784424778" target="_blank" class="fixed  bottom-4 right-4 bg-green-500 text-white p-3 rounded-full shadow-md hover:bg-green-600">
<svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="0 0 308 308" xml:space="preserve">
<g id="XMLID_468_">
	<path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
		c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
		c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
		c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
		c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
		c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
		c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
		c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
		c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
		C233.168,179.508,230.845,178.393,227.904,176.981z"/>
	<path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
		c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
		c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
		 M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
		l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
		c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
		C276.546,215.678,222.799,268.994,156.734,268.994z"/>
</g>
</svg>


    </a>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to update subtotal and total
        function updateTotal() {
            let subtotal = 0;
            document.querySelectorAll('.quantity').forEach(function(item) {
                const price = parseFloat(item.getAttribute('data-price'));
                const quantity = parseInt(item.value);
                subtotal += price * quantity;
                item.parentNode.nextElementSibling.querySelector('p').textContent = 'RWF' + (price * quantity).toFixed(2);
            });
            document.getElementById('subtotal').textContent = 'RWF' + subtotal.toFixed(2);
            document.getElementById('total').textContent = 'RWF' + (subtotal ).toFixed(2) ;
        }

        // Update subtotal and total on page load
        updateTotal();

        // Update subtotal and total on quantity change
        document.querySelectorAll('.quantity').forEach(function(item) {
            item.addEventListener('change', function() {
                updateTotal();
            });
        });

        // Add quantity to cart
        document.querySelectorAll('.quantity-add').forEach(function(button) {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const input = document.querySelector('.quantity[data-id="' + id + '"]');
                input.value = parseInt(input.value) + 1;
                updateTotal();
            });
        });

        // Remove quantity from cart
        document.querySelectorAll('.quantity-remove').forEach(function(button) {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const input = document.querySelector('.quantity[data-id="' + id + '"]');
                if (parseInt(input.value) > 1) {
                    input.value = parseInt(input.value) - 1;
                    updateTotal();
                }
            });
        });

        // Remove item from cart
        document.querySelectorAll('.remove-item').forEach(function(button) {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                fetch("{{ route('removeFromCart', '') }}/" + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                })
                .then(response => {
                    if (response.ok) {
                        document.querySelector('.quantity[data-id="' + id + '"]').parentNode.parentNode.parentNode.remove();
                        updateTotal();
                    }
                })
                .catch(error => console.error('Error removing item:', error));
            });
        });
    });
</script>
