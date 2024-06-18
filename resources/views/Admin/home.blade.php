


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />

</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="flex h-auto bg-gray-50 text-gray-900">
        <div class="flex flex-col w-64">
     @include('Admin.adminSidelink')
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 h-auto">
            <div class="flex items-center text-black-300 justify-between h-16 bg-white border-b border-gray-300">
                <div class="px-4">
                    <p class="text-red-900 font-bold text-2xl"> KIGALI TECHNICAL ZONE</p></div>
                <div class="px-4">
                    <a href="#" class="text-blue-500">Logout</a>
                </div>
            </div>
            <div class="p-4">
           {{-- support form update --}}

           <div class="container mx-auto py-10">
            <h1 class="text-3xl font-bold text-center mb-8">Dashboard</h1>

            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white shadow p-6 rounded-lg">
                    <div class="stats bg-gray-700 text-primary-content">

                        <div class="stat">
                          <div class="stat-title text-white">Total Product</div>
                          <div class="stat-value">{{$ibicuruzwaByose}}</div>
                          <div class="stat-actions">
                            <a href="{{ route('all')}}"  class="btn btn-sm btn-success">View</a>
                          </div>
                        </div>

                        <div class="stat">
                          <div class="stat-title text-white">Categoris & SUbcategory</div>
                          <div class="stat-value">{{$category}}</div>
                          <div class="stat-actions">
                            <a ref="{{ route('newType')}}" class="btn btn-sm">View</a>

                          </div>
                        </div>

                      </div>
                      </div>





                <div class="bg-white shadow p-6 rounded-lg">
                    <div class="stats bg-gray-700 text-primary-content">

                        <div class="stat">
                          <div class="stat-title text-white">Total Sold Product</div>
                          <div class="stat-value">{{$ibyaguzwe}}</div>
                          <div class="stat-actions">
                            <a href="{{route('soldProduct')}}" class="btn btn-sm btn-success">View</a>
                          </div>
                        </div>

                        <div class="stat">
                          <div class="stat-title text-white">Sold to day</div>
                          <div class="stat-value">{{$ibyaguzweNone }}</div>
                          <div class="stat-actions">
                            <a href="{{route('soldProduct')}}"  class="btn btn-sm">View</a>

                          </div>
                        </div>

                      </div>
                     </div>





                <div class="bg-white shadow p-6 rounded-lg">
                    <div class="stats bg-gray-700 text-primary-content">

                        <div class="stat">
                          <div class="stat-title text-white">Total Money</div>
                          <div class="stat-value">{{$amafaranga}}</div>
                          <div class="stat-actions">
                            <button class="btn btn-sm btn-success">View</button>
                          </div>
                        </div>

                        <div class="stat">
                          <div class="stat-title text-white">Total Money Today</div>
                          <div class="stat-value">{{$amafarangaNone}}</div>
                          <div class="stat-actions">
                            <button class="btn btn-sm">View</button>

                          </div>
                        </div>

                      </div>
                       </div>





                <div class="bg-white shadow p-6 rounded-lg">
             <div class="stats bg-gray-700 text-primary-content">

  <div class="stat">
    <div class="stat-title text-white">Total Users</div>
    <div class="stat-value">{{$abakiriya}}</div>
    <div class="stat-actions">
      <button class="btn btn-sm btn-success">View</button>
    </div>
  </div>



</div>
 </div>




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
