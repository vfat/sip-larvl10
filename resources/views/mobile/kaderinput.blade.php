<x-mobile-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div><a href="{{route('mobile.kaderdaftarhadir', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>
        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">          
                        
                        <form method="POST" action="{{ route('mobile.kaderinputcreate', $token) }}">
                            @csrf
                            <div>
                                <x-text-input id="token" class="block mt-1 w-full" type="hidden" name="token" value="{{$token}}" readonly />
                            </div> 
                            <!-- id -->
                            <div>
                                <x-text-input id="id" class="block mt-1 w-full" type="hidden" name="id" value="{{$balita->id}}" readonly />
                            </div> 

                            <!-- nama -->
                            <div>
                                <x-input-label for="nama" :value="__('Nama')" />
                                <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{$balita->nama}}" readonly />
                            </div> 

                            <!-- nik -->
                            <div>
                                <x-input-label for="nik" :value="__('NIK')" />
                                <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" value="{{$balita->nik}}" readonly />
                            </div> 
                            <!-- berat -->
                            <div class="mt-4">
                                <x-input-label for="berat" :value="__('Berat')" />
                                <x-text-input id="berat" class="block mt-1 w-full" name="berat" value="{{$kaderinput->berat??0}}"   type="number" step="0.01" />
                            </div> 

                            <div class="flex items-center justify-start mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Input') }}
                                    </x-primary-button>
                            </div>                            
                            <!-- tinggi -->
                            <div class="mt-4">
                                <x-input-label for="tinggi" :value="__('Tinggi')" />
                                <x-text-input id="tinggi" class="block mt-1 w-full" name="tinggi" value="{{$kaderinput->tinggi??0}}"   type="number" step="0.01" />
                            </div>   
                            <div class="flex items-center justify-start mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Input') }}
                                    </x-primary-button>
                            </div>

                            <!-- vitamin -->
                            <div class="mt-4">
                                <x-input-label for="vitamin" :value="__('Vitamin')" />

                                <select class="block mt-1 w-full" name="vitamin" id="vitamin" >
                                    <option value="ya"  {{ $kaderinput ? ($kaderinput->vitamin == "ya" ? "selected" : ""):"" }}>YA</option>
                                    <option value="tidak"  {{ $kaderinput ? ($kaderinput->vitamin == "tidak" ? "selected" : ""):"" }}>TIDAK</option>
                                </select>
                            </div>                                                       

                            <div class="flex items-center justify-start mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Input') }}
                                    </x-primary-button>
                            </div>
                        </form>

                        <div class="overflow-x-auto">                         


                        </div>
                        
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-mobile-layout>