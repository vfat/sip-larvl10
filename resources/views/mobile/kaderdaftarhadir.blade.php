<x-mobile-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div><a href="{{route('mobile.kader', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">          
                        
                        <form method="GET" >
                            @csrf

                            <!-- nik -->
                            <div>
                                <x-input-label for="tanggal" :value="__('Tanggal')" />
                                <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" value="{{$tanggal}}" />
                            </div> 
                            <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Cari') }}
                                    </x-primary-button>
                            </div>
                        </form>

                        <div class="overflow-x-auto">                         

                            <table class="table table-zebra">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($no=1)
                                @foreach ($balita as $bayi)
                                
                                    <tr>
                                        <th>{{$no}}</th>
                                        <td>{{$bayi->nama}}</td>
                                        <td>{{$bayi->nik}}</td>
                                        <td>
                                            @if ($tanggal == date("Y-m-d"))
                                            <a href="{{route('mobile.kaderinput', [$bayi->id, $token])}}" class="btn btn-info">Input</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @php($no++)
                                @endforeach
                                </tbody>
                            </table>
                            {{ $balita->links() }}
                        </div>
                        
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-mobile-layout>
