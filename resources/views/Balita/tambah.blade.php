<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Balita') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">                         

                           <form method="POST" action="{{ route('balita.tambah') }}">
                                @csrf

                                <!-- nama -->
                                <div>
                                    <x-input-label for="nama" :value="__('Nama')" />
                                    <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                                </div>

                                <!-- tempat_lahir -->
                                <div>
                                    <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                                    <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required autofocus autocomplete="tempat_lahir" />
                                    <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                                </div>  
                                
                                <!-- tanggal_lahir -->
                                <div>
                                    <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                                    <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autofocus autocomplete="tanggal_lahir" />
                                    <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                                </div>  


                                <!-- nik -->
                                <div>
                                    <x-input-label for="nik" :value="__('NIK')" />
                                    <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" autofocus autocomplete="nik" />
                                    <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                                </div>                                  

                                <!-- ayah -->
                                <div>
                                    <x-input-label for="ayah" :value="__('Nama Ayah')" />
                                    <x-text-input id="ayah" class="block mt-1 w-full" type="text" name="ayah" :value="old('ayah')" autofocus autocomplete="ayah" />
                                    <x-input-error :messages="$errors->get('ayah')" class="mt-2" />
                                </div>                                   

                                <!-- ibu -->
                                <div>
                                    <x-input-label for="ibu" :value="__('Nama Ibu')" />
                                    <x-text-input id="ibu" class="block mt-1 w-full" type="text" name="ibu" :value="old('ibu')" autofocus autocomplete="ibu" />
                                    <x-input-error :messages="$errors->get('ibu')" class="mt-2" />
                                </div>                                 

                                <!-- alamat -->
                                <div>
                                    <x-input-label for="alamat" :value="__('Alamat')" />
                                    <textarea name="alamat" id="alamat" class="textarea textarea-bordered w-full" rows="3" placeholder="Alamat...."></textarea>
                                </div>  
                                

                                <!-- anak_ke -->
                                <div>
                                    <x-input-label for="anak_ke" :value="__('Anak Ke')" />
                                    <x-text-input id="anak_ke" class="block mt-1 w-full" type="number" name="anak_ke" :value="old('anak_ke')" autofocus autocomplete="anak_ke" value="1" min="1" />
                                    <x-input-error :messages="$errors->get('anak_ke')" class="mt-2" />
                                </div>     


                                <!-- kelamin -->
                                <div class="mt-4">
                                    <x-input-label for="Kelamin" :value="__('Kelamin')" />

                                    <select class="select select-bordered w-full max-w-xs" name="kelamin" id="kelamin">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <!-- golongan_darah -->
                                <div class="mt-4">
                                    <x-input-label for="golongan_darah" :value="__('Golongan Darah')" />

                                    <select class="select select-bordered w-full max-w-xs" name="golongan_darah" id="golongan_darah">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>            
                                
                                <!-- berat_lahir -->
                                <div>
                                    <x-input-label for="berat_lahir" :value="__('Berat Lahir dalam Kg')" />
                                    <x-text-input id="berat_lahir" class="block mt-1 w-full" type="number" name="berat_lahir" :value="old('berat_lahir')" autofocus autocomplete="berat_lahir" step="0.01" />
                                    <x-input-error :messages="$errors->get('berat_lahir')" class="mt-2" />
                                </div>    

                                <!-- tinggi_lahir -->
                                <div>
                                    <x-input-label for="tinggi_lahir" :value="__('Tinggi Lahir dalam cm')" />
                                    <x-text-input id="tinggi_lahir" class="block mt-1 w-full" type="number" name="tinggi_lahir" :value="old('tinggi_lahir')" autofocus autocomplete="tinggi_lahir" step="0.01" />
                                    <x-input-error :messages="$errors->get('tinggi_lahir')" class="mt-2" />
                                </div>                                   

                                <!-- berat_terakhir -->

                                <!-- tinggi_terakhir -->


                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button class="ms-4">
                                        {{ __('Tambah') }}
                                    </x-primary-button>
                                </div>
                            </form>                        
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>