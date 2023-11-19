<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Informasi Balita') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Informasi Balita</h2>
                        @php($tanggal_lahir= date('d M Y', strtotime($balita->tanggal_lahir)))
                        @php($datetime1 = new DateTime($balita->tanggal_lahir))
                        @php($now = new DateTime(date('Y-m-d')))
                        @php($umur=$datetime1->diff($now))
                        @php($umur_tahun=$umur->y)
                        @php($umur_bulan=$umur->m)
                        @php($umur_hari=$umur->d)
                        <table class="table table-zebra">
                            <tbody>
                                <!-- Nama -->
                                <tr>
                                    <th>Nama</th>
                                    <td>: {{$balita->nama}}</td>

                                </tr>
                                <!-- tempat_lahir -->
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>: {{$balita->tempat_lahir}}</td>
                                </tr>
                                <!-- tanggal_lahir -->
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>: {{$tanggal_lahir}}</td>
                                </tr>
                                <!-- umur -->
                                <tr>
                                    <th>Umur</th>
                                    <td>: {{$umur_tahun}} tahun {{$umur_bulan}} bulan {{$umur_hari}} hari </td>
                                </tr>                                
                                <!-- nik -->
                                <tr>
                                    <th>NIK</th>
                                    <td>: {{$balita->nik}}</td>
                                </tr>
                                <!-- Ayah -->
                                <tr>
                                    <th>Ayah</th>
                                    <td>: {{$balita->ayah}}</td>
                                </tr>
                                <!-- Ibu -->
                                <tr>
                                    <th>Ibu</th>
                                    <td>: {{$balita->ibu}}</td>
                                </tr>
                                <!-- alamat -->
                                <tr>
                                    <th>Alamat</th>
                                    <td>: {{$balita->alamat}}</td>
                                </tr>
                                <!-- anak_ke -->
                                <tr>
                                    <th>Anak Ke</th>
                                    <td>: {{$balita->anak_ke}}</td>
                                </tr>   
                                <!-- kelamin -->
                                <tr>
                                    <th>Kelamin</th>
                                    <td>: {{($balita->kelamin=="L")?"Laki Laki":(($balita->kelamin=="P")?"Perempuan":"Belum Diketahui")}}</td>
                                </tr>   
                                <!-- golongan_darah -->
                                <tr>
                                    <th>Golongan Darah</th>
                                    <td>: {{$balita->golongan_darah}}</td>
                                </tr>
                                <!-- berat_lahir -->
                                <tr>
                                    <th>Berat Lahir</th>
                                    <td>: {{$balita->berat_lahir}}</td>
                                </tr>
                                <!-- tinggi_lahir -->
                                <tr>
                                    <th>Tinggi Lahir</th>
                                    <td>: {{$balita->tinggi_lahir}}</td>
                                </tr>
                                <!-- berat_terakhir -->
                                <tr>
                                    <th>Berat Terakhir</th>
                                    <td>: {{$balita->berat_terakhir}}</td>
                                </tr>
                                <!-- tinggi_terakhir -->
                                <tr>
                                    <th>Tinggi Terakhir</th>
                                    <td>: {{$balita->tinggi_terakhir}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>