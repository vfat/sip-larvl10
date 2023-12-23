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
                        @php($tanggal_lahir= date('d M Y', strtotime($balita->tgl_lahir)))
                        @php($datetime1 = new DateTime($balita->tgl_lahir))
                        @php($now = new DateTime(date('Y-m-d')))
                        @php($umur=$datetime1->diff($now))
                        @php($umur_tahun=$umur->y)
                        @php($umur_bulan=$umur->m)
                        @php($umur_hari=$umur->d)
                        <!--`nik`, `nama`, `jk`, `tgl_lahir`, `bb_lahir`, `tb_lahir`, `nama_ortu`, `prov`, `kab_kota`, `kec`, `pukesmas`, `desa_kel`, `posyandu`, `rt`, `rw`, `alamat`, `usia_saat_ukur`, `tanggal_pengukuran`, `berat`, `tinggi`, `lila`, `bb_u`, `zs_bb_u`, `tb_u`, `zs_tb_u`, `bb_tb`, `zs_bb_tb`, `naik_berat_badan`, `pmt_diterima_kg`, `jml_vit_a`, `kpsp`, `kia` -->
                        <table class="table table-zebra">
                            <tbody>
                                 <!-- nik -->
                                 <tr>
                                    <th>NIK</th>
                                    <td>: {{$balita->nik}}</td>

                                </tr>                               
                                <!-- Nama -->
                                <tr>
                                    <th>Nama</th>
                                    <td>: {{$balita->nama}}</td>

                                </tr>
                                <!-- kelamin -->
                                <tr>
                                    <th>Kelamin</th>
                                    <td>: {{($balita->jk=="L")?"Laki Laki":(($balita->jk=="P")?"Perempuan":"Belum Diketahui")}}</td>
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
                                <!-- berat_lahir -->
                                <tr>
                                    <th>Berat Lahir</th>
                                    <td>: {{$balita->bb_lahir}}</td>
                                </tr>       
                                <!-- tinggi_lahir -->
                                <tr>
                                    <th>Tinggi Lahir</th>
                                    <td>: {{$balita->tb_lahir}}</td>
                                <tr>
                                <!-- nama_ortu -->
                                <tr>
                                    <th>Orang Tua</th>
                                    <td>: {{$balita->nama_ortu}}</td>
                                </tr>
                                <!-- prov -->
                                <tr>
                                    <th>Provinsi</th>
                                    <td>: {{$balita->prov}}</td>
                                </tr>        
                                <!-- kab_kota -->
                                <tr>
                                    <th>Kab / Kota</th>
                                    <td>: {{$balita->kab_kota}}</td>
                                </tr>
                                <!-- kec -->
                                <tr>
                                    <th>Kecamatan</th>
                                    <td>: {{$balita->kec}}</td>
                                </tr>
                                <!-- pukesmas -->
                                <tr>
                                    <th>Puskesmas</th>
                                    <td>: {{$balita->pukesmas}}</td>
                                </tr>
                                <!-- desa_kel -->
                                <tr>
                                    <th>Desa / Kel</th>
                                    <td>: {{$balita->desa_kel}}</td>
                                </tr>
                                <!-- posyandu -->
                                <tr>
                                    <th>Posyandu</th>
                                    <td>: {{$balita->posyandu}}</td>
                                </tr>
                                <!-- rt -->
                                <tr>
                                    <th>Rt</th>
                                    <td>: {{$balita->rt}}</td>
                                </tr>
                                <!-- rw -->
                                <tr>
                                    <th>Rw</th>
                                    <td>: {{$balita->rw}}</td>
                                </tr>            
                                <!-- alamat -->
                                <tr>
                                    <th>Alamat</th>
                                    <td>: {{$balita->alamat}}</td>
                                </tr>
                                <!-- usia_saat_ukur -->
                                <tr>
                                    <th>Usia_saat_ukur</th>
                                    <td>: {{$balita->usia_saat_ukur}}</td>
                                </tr>
                                <!-- tanggal_pengukuran -->
                                <tr>
                                    <th>Tanggal_pengukuran</th>
                                    <td>: {{$balita->tanggal_pengukuran}}</td>
                                </tr>
                                <!-- berat -->
                                <tr>
                                    <th>Berat</th>
                                    <td>: {{$balita->berat}}</td>
                                </tr>
                                <!-- tinggi -->
                                <tr>
                                    <th>Tinggi</th>
                                    <td>: {{$balita->tinggi}}</td>
                                </tr>
                                <!-- lila -->
                                <tr>
                                    <th>Lila</th>
                                    <td>: {{$balita->lila}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
</x-app-layout>