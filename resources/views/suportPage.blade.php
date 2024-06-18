

          <!-- show on only small screen -->

          @include('components.UserNavbar')


  {{-- <div id="resultList">
  </div> --}}




    <!-- boby divs -->

      <div class="flex ">
        <!-- left div -->
        <div class=" h-auto text-center justify-center w-96 ms-3 non-responsive ">
    <!-- category list -->
 @include('components.sideLink2')
        </div>

        <!-- Centerivision -->
     <div class="bg-gray-50 h-auto w-full">
       <div class="mt-4">

            <div class="mt-5">
{{-- hero section --}}
                <div class="hero h-98" style="background-image: url({{asset('image/elec1.jpeg')}});">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                      <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Find Best Technician here</h1>
                        <p class="mb-5">We provide technical suport with high skilled technician.</p>
                        {{-- <button class="btn btn-primary">Find technician Now</button> --}}
                      </div>
                    </div>
                  </div>

{{-- end of hero section --}}

{{--  canal suppoert section --}}
{{-- <h1 class="text-2xl font-bold">Electronic Support</h1> --}}



<div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">
        <h1 class="text-2xl font-bold">Eectronic support</h1>
        <p class="py-6">We provide household techinal support for repairing , install and reinstall Tv, Radio, Camera.</p>
        <br>
          {{-- <button class="btn bg-gray-900 text-white">Get Thechnician </button> --}}


    </div>

    <div class="w-full">

       <img class="h-auto max-w-full rounded-lg" src="{{asset('image/tronic.jpg')}}" alt="">

    </div>
</div>



{{-- end of canal support section --}}




{{-- electrical support section --}}

<div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">
        <img class="h-auto max-w-full rounded-lg" src="{{asset('image/elec1.jpeg')}}" alt="">
    </div>

    <div class="w-full">
        <h1 class="font-semibold text-2xl">Electrical Support</h1>
     <p>   We provide electrical support for industrial, domestic, and electrical components. We also troubleshoot electrical systems.</p>
      <br>
      {{-- <button class="btn bg-gray-900 text-white">Get Thechnician </button> --}}
    </div>
</div>


{{-- communication section --}}

<div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">
        <h1 class="font-semibold text-2xl">Tlecommunication Support</h1>
        <p>   We provide electrical support for mounting and remounting Canal+, DSTV, and STARTIMES dishes.</p>
         <br>
          {{-- <button class="btn bg-gray-900 text-white">Get Thechnician </button> --}}


    </div>

    <div class="w-full">

       <img class="h-auto max-w-full rounded-lg" src="{{asset('image/decoder/dstv4.jpeg')}}" alt="">

    </div>
</div>


             </div>
       </div>
     </div>



{{-- end of center view --}}


        <div class="bg-white h-auto w-96 ml-3 non-responsive">


              <div class="image-slider mt-4 h-auto ">
            @include('components.slider2')
            </div>


        </div>
      </div>




    <!-- footer -->

@include('components.userFooter')


        </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
