<x-mobile-layout>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">


<!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg"> -->

<div class="grid grid-flow-row-dense grid-cols-2 gap-2">
    <div class="card w-60 bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
            <h1 class="card-title">{{$balita}}</h1>
            <p>Total Balita</p>
        </div>
    </div>

    <div class="card w-60 bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
            <h1 class="card-title">{{$kader}}</h1>
            <p>Jumlah Kader</p>
        </div>
    </div>
    <div class="card w-60 bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
            <h1 class="card-title">{{$balita}}</h1>
            <p>Balita Mengikuti Posyandu</p>
        </div>
    </div>
    <div class="card w-60 bg-base-100 shadow-xl">
        <div class="card-body items-center text-center">
            <h1 class="card-title">{{$balita}}</h1>
            <p>Balita Tidak Mengikuti Posyandu</p>
        </div>
    </div>    

</div>
<hr>
<br>
<a href="{{route('balita.export')}}" class="btn btn-neutral">Download</a>

<!-- </div> -->
</div>

</x-mobile-layout>