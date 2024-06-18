
          <!-- show on only small screen -->

          @include('components.UserNavbar')


  {{-- <div id="resultList">
  </div> --}}




    <!-- boby divs -->

      <div class="flex bg-gray-100 ">
        <!-- left div -->
        <div class=" h-auto text-center justify-center w-96 ms-3 non-responsive">
    <!-- category list -->
 @include('components.sideLink2')
        </div>

        <!-- Centerivision -->
     <div class="bg-gray-100 h-auto w-full">
       <div class="mt-4">

            <div class="mt-5">
{{-- hero section --}}
                <div class="hero h-98" style="background-image: url({{asset('image/sound5.webp')}});">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                      <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Rent with us </h1>
                        <p class="mb-5">We provide service of renting technical tool,material and sound system .</p>
                        <button class="btn bg-gray-100 text-gray-900"  onclick="my_modal_2.showModal()">Rent Now</button>
                      </div>
                    </div>
                  </div>

{{-- end of hero section --}}

{{--  canal suppoert section --}}
{{-- <h1 class="text-2xl font-bold">Electronic Support</h1> --}}



<div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">

            <h1 class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 group  dark:bg-gray-600  dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                  </svg>
                   <span class="flex-1 ms-3 whitespace-nowrap">Building Material</span>
            </h1>


            <ol>
                <li>1.Grinder</li>
                <li>2.Hilt</li>
                <li>3.Mixer</li>
            </ol>

        <br>
        <button class="btn bg-gray-900 text-white" onclick="my_modal_2.showModal()">Rent Now</button>


    </div>

    <div class="w-full">

       <img class="h-auto max-w-full rounded-lg" src="{{asset('image/allm.jpeg')}}" alt="">

    </div>
</div>



{{-- end of canal support section --}}




{{-- electrical support section --}}

<div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">
        <img class="h-auto max-w-full rounded-lg" src="{{asset('image/sound5.webp')}}" alt="">
    </div>

    <div class="w-full">
        <h1 class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 group  dark:bg-gray-600  dark:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
              </svg>

               <span class="flex-1 ms-3 whitespace-nowrap">Sounding system  </span>
        </h1>

     <p>
        <ol>
            <li>1.Speakers</li>
            <li>2.Microphone</li>
            <li>3.Mixer</li>
        </ol>

     </p>
      <br>
      <button class="btn bg-gray-900 text-white" onclick="my_modal_2.showModal()">Rent Now</button>
    </div>
</div>


{{-- communication section --}}

{{-- <div class="grid grid-cols-2 md:grid-cols-2 gap-4 mt-7">
    <div class="w-full">
        <h1 class="font-semibold text-2xl">Tlecommunication Support</h1>
        <p>   We provide electrical support for mounting and remounting Canal+, DSTV, and STARTIMES dishes.</p>
         <br>
          <button class="btn btn-primary text-white">Get Thechnician </button>


    </div>

    <div class="w-full">

       <img class="h-auto max-w-full rounded-lg" src="{{asset('image/decoder/dstv4.jpeg')}}" alt="">

    </div>
</div> --}}


             </div>
       </div>
     </div>



{{-- end of center view --}}


        <div class="bg-gray-100 h-auto w-96 ml-3 non-responsive">


              <div class="image-slider mt-4 h-auto ">
            @include('components.slider2')
            </div>


         



        </div>
      </div>


{{-- form input --}}
<dialog id="my_modal_2" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
          </form>
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
            <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div class="mb-6">
            <select class="select select-bordered w-full ">
                <option disabled selected>Select Rental</option>
                <option>Building Tool</option>
                <option>Sound Syatem</option>
              </select>
            </div>
        <div class="mb-6">

<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specify What You need</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
 </div>

 <div class="mb-6">
<button type="submit" class="btn btn-active btn-accent">Submit</button>
 </div>
    </div>
</dialog>
    <!-- footer -->

@include('components.userFooter')


        </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
