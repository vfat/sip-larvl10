<x-mobile-layout>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

<!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> -->

<div class="grid grid-flow-row-dense grid-cols-2 gap-2">
    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-info" href="{{route('mobile.kaderprofile', $token)}}">
          <h1>Profil</h1>
        </a>
    </div>

    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-success" href="{{route('mobile.kaderdaftarhadir', $token)}}">
          <h1>Daftar Hadir</h1>
        </a>
    </div>
    
    <div class="card w-60 bg-base-100 shadow-xl">
        <a class="card-body items-center text-center btn btn-warning" href="{{route('mobile.kaderpenjadwalan', $token)}}">
          <h1>Penjadwalan</h1>
        </a>
    </div>

    

</div>

<!-- <div class="grid grid-flow-row-dense grid-cols-2 gap-2">
  <div><a href="{{route('mobile.kaderprofile', $token)}}" class="btn btn-info btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">Profil</a></div>
  <div><a href="{{route('mobile.balita', $token)}}" class="btn btn-success btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">Daftar Hadir</a></div>
  <div><a href="{{route('mobile.balita', $token)}}" class="btn btn-warning btn-wide btn-xs sm:btn-sm md:btn-md lg:btn-lg">Penjadwalan</a></div>
</div> -->


<!-- </div> -->
</div>

</x-mobile-layout>