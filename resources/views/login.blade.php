
          <!-- show on only small screen -->

          @include('components.UserNavbar')


  {{-- <div id="resultList">
  </div> --}}




    <!-- boby divs -->

      <div class="flex bg-gray-100">
        <!-- left div -->
        <div class=" h-auto text-center justify-center w-96 ms-3 non-responsive">
    <!-- category list -->
        @include('components.sideLink2')

    <!-- sound animation div -->
{{--
              <div class="image-slider mt-4 non resiponsive">
                <h1 class="text-red-700 font-semibold">Sound System</h1>
                @include('components.slider')
            </div> --}}
        </div>

        <!-- Centerivision -->
     <div class="bg-white h-auto w-full">
       <div class="mt-4">

        {{-- ..........new.......... --}}



<div class="w-full bg-white   rounded-lg shadow dark:bg-gray-800 ">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500  rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
        <li class="me-2">
            <button id="login-tab" data-tabs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Login</button>
        </li>
        <li class="me-2">
            <button id="register-tab" data-tabs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Register</button>
        </li>

    </ul>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            @if(session()->has('success'))
                <div class="alert alert-success">
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
    </div>

    <div id="defaultTabContent">
        {{-- login sectio --}}
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="login" role="tabpanel" aria-labelledby="login-tab">



            <form class="max-w-sm mx-auto" action="{{route('login')}}" method="get">
                @csrf
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Login</h2>

                <div class="mb-5 mt-4">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required />
                </div>
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                  <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>


             <button type="submit" style="background-color: black;" class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Login</button>

            </form>





        </div>

        {{-- register section --}}
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="register" role="tabpanel" aria-labelledby="register-tab">
            <!-- form -->
            <form class="max-w-sm mx-auto" action="{{route('customerInsert')}}" method="POST">
                @csrf
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Create Acount</h2>

                <div class="mb-5 mt-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                    <input type="text" id="first" name="firstName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your name here" required />
                  </div>

                <div class="mb-5 mt-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your name here" required />
                  </div>

               <div class="mb-5 mt-4">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                  <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email here" required />
                </div>

                <div class="mb-5">
                    <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                            </svg>
                        </div>
                        <input type="text" id="phone-input" name="phoneNumber" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  placeholder="+250......." required />
                    </div>
                </div>

                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                  <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

              <button type="submit" style="background-color: black;" class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">Register New Acount</button>

              </form>



        </div>

    </div>
</div>
{{-- .......end --}}

       </div>
     </div>



{{-- end of center view --}}


      </div>




    <!-- footer -->

@include('components.userFooter')


        </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
