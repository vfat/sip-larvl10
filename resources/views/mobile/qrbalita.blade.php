<x-mobile-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div><a href="{{route('mobile.ortu', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>

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
                        @php($totalBulan = ($umur_tahun * 12)+ ($umur_bulan))
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

                                <tr>
                                    <th>QR</th>
                                    <td>: {{$qrcode}}</td>
                                </tr>                                



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
   




</x-mobile-layout>