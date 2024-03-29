<x-mobile-layout>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">


<!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> -->

<div class="grid grid-flow-row-dense grid-cols-2 gap-2">
    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-info" href="{{route('mobile.balita', $token)}}">
          <h1>Profil Balita</h1>
        </a>
    </div>

    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-success" href="{{route('mobile.balita', $token)}}">
          <h1>Tumbuh Kembang</h1>
        </a>
    </div>
    
    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-warning" href="{{route('mobile.balita', $token)}}">
          <h1>QR Code</h1>
        </a>
    </div>

    

</div>

<!-- <div class="grid grid-flow-row-dense grid-cols-2 gap-2">
  <div><a href="{{route('mobile.balita', $token)}}" class="btn btn-info btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">Profil Balita</a></div>
  <div><a href="{{route('mobile.balita', $token)}}" class="btn btn-success btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">Tumbuh Kembang</a></div>
  <div><a href="{{route('mobile.balita', $token)}}" class="btn btn-warning btn-success btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">QR Code</a></div>
</div> -->


<!-- </div> -->
</div>

</x-mobile-layout>