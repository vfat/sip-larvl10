<x-mobile-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div><a href="{{route('mobile.kader', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         
                        <form method="POST" action="{{ route('mobile.kaderpenjadwalancreate', $token) }}">
                            @csrf
                                <div>
                                    <x-input-label for="nama" :value="__('Nama')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                                </div>
                            <!-- nik -->
                            <div>
                                <x-input-label for="tanggal" :value="__('Tanggal')" />
                                <x-text-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" value="{{$tanggal}}" />
                            </div> 
                            <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Tambah') }}
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
                                @foreach ($jadwal as $bayi)
                                
                                    <tr>
                                        <th>{{$no}}</th>
                                        <td>{{$bayi->name}}</td>
                                        <td>{{$bayi->tanggal}}</td>
                                        <td><a href="{{route('mobile.kaderpenjadwalandelete',$bayi->id)}}" class="link link-hover text-red-300">Delete</a></td>
                                    </tr>
                                    @php($no++)
                                @endforeach
                                </tbody>
                            </table>
                            {{ $jadwal->links() }}
                        </div>
                        
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-mobile-layout>