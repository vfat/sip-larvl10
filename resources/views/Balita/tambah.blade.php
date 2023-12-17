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

                                <!-- nik -->
                                <div>
                                    <x-input-label for="nik" :value="__('NIK')" />
                                    <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" autofocus autocomplete="nik" />
                                    <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                                </div> 

                                <!-- nama -->
                                <div>
                                    <x-input-label for="nama" :value="__('Nama')" />
                                    <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus autocomplete="nama" />
                                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                                </div>

                                <!-- jk -->
                                <div>
                                    <x-input-label for="jk" :value="__('Jenis Kelamin')" />
                                    <x-select-input id="jk" class="block mt-1 w-full" name="jk" :options="['L' => 'Laki-laki', 'P' => 'Perempuan', 'U' => 'Tidak Diketahui']" :selected="old('jk')" />
                                    <x-input-error :messages="$errors->get('jk')" class="mt-2" />
                                </div>

                                <!-- tgl_lahir -->
                                <div>
                                    <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')" />
                                    <x-date-input id="tgl_lahir" class="block mt-1 w-full" name="tgl_lahir" :value="old('tgl_lahir')" required />
                                    <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2" />
                                </div>

                                <!-- bb_lahir -->
                                <div>
                                    <x-input-label for="bb_lahir" :value="__('Berat Badan Lahir')" />
                                    <x-text-input id="bb_lahir" class="block mt-1 w-full" type="text" name="bb_lahir" :value="old('bb_lahir')" />
                                    <x-input-error :messages="$errors->get('bb_lahir')" class="mt-2" />
                                </div>

                                <!-- tb_lahir -->
                                <div>
                                    <x-input-label for="tb_lahir" :value="__('Tinggi Badan Lahir')" />
                                    <x-text-input id="tb_lahir" class="block mt-1 w-full" type="text" name="tb_lahir" :value="old('tb_lahir')" />
                                    <x-input-error :messages="$errors->get('tb_lahir')" class="mt-2" />
                                </div>

                                <!-- nama_ortu -->
                                <div>
                                    <x-input-label for="nama_ortu" :value="__('Nama Orang Tua')" />
                                    <x-text-input id="nama_ortu" class="block mt-1 w-full" type="text" name="nama_ortu" :value="old('nama_ortu')" />
                                    <x-input-error :messages="$errors->get('nama_ortu')" class="mt-2" />
                                </div>

                                <!-- Provinsi -->
                                <div>
                                    <x-input-label for="prov" :value="__('Provinsi')" />
                                    <x-text-input id="prov" class="block mt-1 w-full" type="text" name="prov" :value="old('prov')" />
                                    <x-input-error :messages="$errors->get('prov')" class="mt-2" />
                                </div>

                                <!-- Kabupaten/Kota -->
                                <div>
                                    <x-input-label for="kab_kota" :value="__('Kabupaten/Kota')" />
                                    <x-text-input id="kab_kota" class="block mt-1 w-full" type="text" name="kab_kota" :value="old('kab_kota')" />
                                    <x-input-error :messages="$errors->get('kab_kota')" class="mt-2" />
                                </div>

                                <!-- Kecamatan -->
                                <div>
                                    <x-input-label for="kec" :value="__('Kecamatan')" />
                                    <x-text-input id="kec" class="block mt-1 w-full" type="text" name="kec" :value="old('kec')" />
                                    <x-input-error :messages="$errors->get('kec')" class="mt-2" />
                                </div>

                                <!-- Puskesmas -->
                                <div>
                                    <x-input-label for="pukesmas" :value="__('Puskesmas')" />
                                    <x-text-input id="pukesmas" class="block mt-1 w-full" type="text" name="pukesmas" :value="old('pukesmas')" />
                                    <x-input-error :messages="$errors->get('pukesmas')" class="mt-2" />
                                </div>

                                <!-- Desa/Kelurahan -->
                                <div>
                                    <x-input-label for="desa_kel" :value="__('Desa/Kelurahan')" />
                                    <x-text-input id="desa_kel" class="block mt-1 w-full" type="text" name="desa_kel" :value="old('desa_kel')" />
                                    <x-input-error :messages="$errors->get('desa_kel')" class="mt-2" />
                                </div>

                                <!-- Posyandu -->
                                <div>
                                    <x-input-label for="posyandu" :value="__('Posyandu')" />
                                    <x-text-input id="posyandu" class="block mt-1 w-full" type="text" name="posyandu" :value="old('posyandu')" />
                                    <x-input-error :messages="$errors->get('posyandu')" class="mt-2" />
                                </div>

                                <!-- RT -->
                                <div>
                                    <x-input-label for="rt" :value="__('RT')" />
                                    <x-text-input id="rt" class="block mt-1 w-full" type="text" name="rt" :value="old('rt')" />
                                    <x-input-error :messages="$errors->get('rt')" class="mt-2" />
                                </div>

                                <!-- RW -->
                                <div>
                                    <x-input-label for="rw" :value="__('RW')" />
                                    <x-text-input id="rw" class="block mt-1 w-full" type="text" name="rw" :value="old('rw')" />
                                    <x-input-error :messages="$errors->get('rw')" class="mt-2" />
                                </div>

                                <!-- Alamat -->
                                <div>
                                    <x-input-label for="alamat" :value="__('Alamat')" />
                                    <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" />
                                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                                </div>

                                <!-- usia_saat_ukur -->
                                <div>
                                    <x-input-label for="usia_saat_ukur" :value="__('Usia Saat Ukur')" />
                                    <x-text-input id="usia_saat_ukur" class="block mt-1 w-full" type="text" name="usia_saat_ukur" :value="old('usia_saat_ukur')" />
                                    <x-input-error :messages="$errors->get('usia_saat_ukur')" class="mt-2" />
                                </div>

                                <!-- tanggal_pengukuran -->
                                <div>
                                    <x-input-label for="tanggal_pengukuran" :value="__('Tanggal Pengukuran')" />
                                    <x-date-input id="tanggal_pengukuran" class="block mt-1 w-full" name="tanggal_pengukuran" :value="old('tanggal_pengukuran')" required />
                                    <x-input-error :messages="$errors->get('tanggal_pengukuran')" class="mt-2" />
                                </div>

                                <!-- berat -->
                                <div>
                                    <x-input-label for="berat" :value="__('Berat')" />
                                    <x-text-input id="berat" class="block mt-1 w-full" type="text" name="berat" :value="old('berat')" />
                                    <x-input-error :messages="$errors->get('berat')" class="mt-2" />
                                </div>

                                <!-- tinggi -->
                                <div>
                                    <x-input-label for="tinggi" :value="__('Tinggi')" />
                                    <x-text-input id="tinggi" class="block mt-1 w-full" type="text" name="tinggi" :value="old('tinggi')" />
                                    <x-input-error :messages="$errors->get('tinggi')" class="mt-2" />
                                </div>

                                <!-- lila -->
                                <div>
                                    <x-input-label for="lila" :value="__('LILA')" />
                                    <x-text-input id="lila" class="block mt-1 w-full" type="text" name="lila" :value="old('lila')" />
                                    <x-input-error :messages="$errors->get('lila')" class="mt-2" />
                                </div>

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