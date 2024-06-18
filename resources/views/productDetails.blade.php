
          <!-- show on only small screen -->

<div class="  w-full">
@include('components.UserNavbar')

 </div>
  <div>




    <div class="flex ">

        <div class=" h-auto text-center justify-center w-96 ms-3 bg-gray-100 non-responsive">
        @include('components.sideLink2')
        </div>

   <div class="bg-gray-100 h-auto w-full">

    @include('components.search')

     <div class="mt-4">
         <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">


  <div class="grid gap-4">
      <div id="mainFrame">
        @isset($array[0])
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('uploads/' . $array[0]) }}" alt="">
        @endisset
    </div>
      <div id="thumbnailGallery" class="grid grid-cols-5 gap-4">
        @for ($i = 0; $i < 4; $i++)
        @if (isset($array[$i]))
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer transition-transform  hover:scale-110" src="{{ asset('uploads/' . $array[$i]) }}" alt="" onclick="showImage('{{ asset('uploads/' . $array[$i]) }}')">
            </div>
        @endif
    @endfor

      </div>
  </div>



  <div>
    <h1 class="text-red-500 font-bold text-2xl">Rwf <span class="text-4xl"> {{$product->productPrice}} </span></h1>
@if((int)$product->productPrice == 0)
    <p class="line-through hidden font-bold"></p>
@else
<p class="line-through font-bold">
    RWF{{  (((int)$product->productPrice * (int)$product->discount / 100))+(int)$product->productPrice  }}
</p>

@endif

    <!--<h1 class="font-semibold text-3xl">Product Description</h1>-->
   <p>{{$product->productDescription}}</p>
   <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-4">
  <div>


    @if(auth()->check() && !empty(auth()->user()->name)) {{-- Check if the user is authenticated and the username is not empty --}}
<button type="button" onclick="my_modal_2.showModal()" style="background-color: black;" class=" px-3 py-2 text-sm font-medium text-center  inline-flex items-center text-gray-100 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 me-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
    </svg>
    Buy Noww
</button>


@else
<button type="button"  onclick="my_modal_1.showModal()" style="background-color: black;" class=" px-3 py-2 text-sm font-medium text-center  inline-flex items-center text-gray-100 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 me-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
    </svg>
    Buy Now
  </button>
    @endif




<!-- Open the modal using ID.showModal() method -->
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <p class="py-4">Please Login or create account To continue shopping</p>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button style="background-color: red;" class="btn text-white hover:bg-gray-950 hover:text-white ">Close</button>
      </form>
    </div>
  </div>
</dialog>




  <!-- Open the modal using ID.showModal() method -->
  <dialog id="my_modal_2" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <h3 class="font-bold text-lg">Fill The Form and Pay</h3>
     <div>

      <div class="w-full h-16 bg-red-600 text-white rounded-xl flex items-center justify-center ">
     <p class="font-semibold text-center">Amount to be payed<span class="ml-3 mt-2">Frw</span>{{$product->productPrice}}</p>
      </div>
     </div>
     {{-- <div role="alert" class="alert bg-white mt-3">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
        </svg>

      <span>Please enter phone number contains money to be payed and procced pay</span>
    </div> --}}

    <form action="{{route('payTeste')}}" method="post">
        @csrf
    <div class="mt-2 border-red-500">
<label for="FirstName">First Name</label>
@if (auth()->check() && auth()->user()->first_name)
    <input type="text" name="lastName" value="{{ auth()->user()->first_name }}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Last Name" required readonly />
@else
    <p>No user last name available</p>
@endif


    </div>
    <div class="mt-2 border-red-500">
     <label for="lastName">Last Name</label>
    @if (auth()->check() && auth()->user()->name)
     <input type="text"  name="lastName" value=" {{ auth()->user()->name }}" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Last Name" required readonly />


    @else
    <p>No  user last name available</p>
    </div>
    @endif

    <div class="mt-2 border-red-500">
        <label for="lastName">Email</label>
  @if (auth()->check() && auth()->user()->email)
        <input type="text" name="email"  value=" {{ auth()->user()->email }}"  id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Last Name" required readonly />


        @else
        <p>No  user  Email available</p>
         @endif
            </div>

            <div class="mt-2 border-red-500">
                <label for="quantity">Quantity</label>


                <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="How many Quantity do you need?" required />
                <input type="text" name="PayType" value="form"  class="hidden" />

                <input type="amount" name="amount" value="{{$product->productPrice}}"  class="hidden" />
                <input type="id" name="id" value="{{$product->id}}"  class="hidden" />

            </div>

            <div class="mt-2 border-red-500">
            <div class="text-2xl font-bold">   <p id="totalAmount"></p></div>
            </div>


    <div class="mt-2 border-red-500">
<label for="phone">Momo Phone Number</label>
      <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Phone Number" required  />
  </div>

  <div class="mt-4">
      <button type="submit" class="btn w-full bg-red-600 font-semibold text-white">Pay</button></div>
    </div>
</form>
  </dialog>
  </div>
 <div>
    <a href="{{ route('addTocart', ['id' => $product->id]) }}" style="background-color: black;" type="button" class="px-3 h-10 text-xs font-medium text-center inline-flex items-center bg-red-500   rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none  text-gray-100  hover:text-white">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 me-2">
             <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
           </svg>
             Add to Cart
           </a>
        </div>
    </div>
  </div>

         </div>

         <!-- Related -->
 <div class="container mx-auto">
        <h1 class="text-gray-900 font-semibold text-start text-2xl">Related Product</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 justify-center mt-4">
            @foreach ($relate as $related)
            @php
                $array = json_decode($related->fileName);
            @endphp
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ route('products_show', ['productId' => $related->id]) }}">
                    <img src="{{ asset('uploads/' . $array[0]) }}" alt="{{ $related->productName }}" class="w-full h-40 object-cover rounded-t-lg transition-transform  hover:scale-110" />
                </a>
                <div class="px-4 py-4">
                    <a href="{{ route('products_show', ['productId' => $related->id]) }}">
                        <h5 class="text-sm font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $related->productName }}
                        </h5>
                    </a>
                    <div class="flex items-center justify-between mt-2">
                        <span class="text-sm font-bold text-gray-900 dark:text-white">RWF {{ $related->productPrice }}</span>
                        <a href="{{ route('addTocart', ['id' => $related->id]) }}" class="rounded-lg tooltip text-black" data-tip="Add To Cart">
                            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="cartAddIconTitle" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000000"> <title id="cartAddIconTitle">Add do cart</title> <path d="M21.2922 6L19.9463 14.1627C19.8666 14.6457 19.4491 15 18.9596 15H7.04304C6.55355 15 6.136 14.6457 6.05636 14.1627L4.84851 6.83731C4.76887 6.35434 4.35133 6 3.86183 6H2"/> <path d="M8 20C8.55228 20 9 19.5523 9 19C9 18.4477 8.55228 18 8 18C7.44772 18 7 18.4477 7 19C7 19.5523 7.44772 20 8 20Z"/> <path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z"/> <path d="M16 8H10"/> <path d="M13 5V11"/> </svg>

                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

     </div>
   </div>






      <div class="bg-gray-100 h-auto w-96 ml-3 non-responsive">


          <div class="image-slider mt-4 h-auto">
          @include('components/slider2')
            </div>






      </div>
    </div>





  <!-- footer -->

  @include('components.userFooter')

      </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script type='text/javascript'>$('.carousel .carousel-item').each(function () {
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    for (var i = 0; i < minPerSlide; i++) { next=next.next(); if (!next.length) { next=$(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); } });</script>

    <script>
      function showImage(imageSrc) {
        // Get the main frame element
        var mainFrame = document.getElementById('mainFrame');

        // Set the source of the main frame to the clicked thumbnail
        mainFrame.innerHTML = '<img class="h-auto max-w-full rounded-lg" src="' + imageSrc + '" alt="">';
      }
    </script>
<script>

    const quantityInput = document.getElementById('quantity');
    const totalAmountDisplay = document.getElementById('totalAmount');

    quantityInput.addEventListener('input', function() {

        const quantity = parseInt(quantityInput.value);


        const productPrice = parseInt("{{ $product->productPrice }}");

        const totalAmount = quantity * productPrice;


        totalAmountDisplay.innerHTML = 'Total Amount: RWF' + totalAmount;
    });
</script>

</body>
</html>
