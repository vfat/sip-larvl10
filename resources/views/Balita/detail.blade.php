<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


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
                                    <th>BB Lahir</th>
                                    <td>: {{$balita->bb_lahir}}</td>
                                </tr>       
                                <!-- tinggi_lahir -->
                                <tr>
                                    <th>PB Lahir</th>
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
                                <!-- bb_u -->
                                <tr>
                                    <th>Bb_u</th>
                                    <td>: {{$balita->bb_u}}</td>
                                </tr>
                                <!-- zs_bb_u -->
                                <tr>
                                    <th>Zs_bb_u</th>
                                    <td>: {{$balita->zs_bb_u}}</td>
                                </tr>
                                <!-- tb_u -->
                                <tr>
                                    <th>Tb_u</th>
                                    <td>: {{$balita->tb_u}}</td>
                                </tr>

                                <!-- zs_tb_u -->
                                <tr>
                                    <th>Zs_tb_u</th>
                                    <td>: {{$balita->zs_tb_u}}</td>
                                </tr>
                                <!-- bb_tb -->
                                <tr>
                                    <th>Bb_tb</th>
                                    <td>: {{$balita->bb_tb}}</td>
                                </tr>
                                <!-- zs_bb_tb -->
                                <tr>
                                    <th>Zs_bb_tb</th>
                                    <td>: {{$balita->zs_bb_tb}}</td>
                                </tr>
                                <!-- naik_berat_badan -->
                                <tr>
                                    <th>Naik Berat Badan</th>
                                    <td>: {{$balita->naik_berat_badan}}</td>
                                </tr>
                                <!-- pmt_diterima_kg -->
                                <tr>
                                    <th>Pmt_diterima_kg</th>
                                    <td>: {{$balita->pmt_diterima_kg}}</td>
                                </tr>
                                <!-- jml_vit_a -->
                                <tr>
                                    <th>Jml_vit_a</th>
                                    <td>: {{$balita->jml_vit_a}}</td>
                                </tr>
                                <!-- kpsp -->
                                <tr>
                                    <th>kpsp</th>
                                    <td>: {{$balita->kpsp}}</td>
                                </tr>
                                <!-- kia -->
                                <tr>
                                    <th>kia</th>
                                    <td>: {{$balita->kia}}</td>
                                </tr>
                                
                                



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Analisa</h2> -->
                        <!-- @php($status_gizi="Baik") -->
                        <!-- <table class="table table-zebra">
                            <tbody> -->
                                <!-- status_gizi -->
                                <!-- <tr>
                                    <th>Status Gizi</th>
                                    <td>: {{$status_gizi}}</td>

                                </tr> -->
                                <!-- status_berat -->
                                <!-- <tr>
                                    <th>Status Berat</th>
                                    <td>: {{$status_gizi}}</td>

                                </tr>   -->
                                <!-- status_tinggi -->
                                <!-- <tr>
                                    <th>Status Tinggi</th>
                                    <td>: {{$status_gizi}}</td>

                                </tr>                                             
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->


        </div>
    </div>   


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Grafik</h2>
                        
                        <div class="chart-container">
                        
                            <div class="kms-chart-container">
                                <canvas id="kms-chart"></canvas>
                            </div> 

                        </div>

                        <script type="text/javascript">

                            var ctx = $("#kms-chart");

                            // Contoh data KMS
                            var dataKMS = {
                                labels: ['KMS1', 'KMS2', 'KMS3', 'KMS4', 'KMS5'],
                                datasets: [{
                                    label: 'Grafik KMS',
                                    data: [70, 80, 90, 85, 95], // Ganti dengan data KMS Anda
                                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang batang
                                    borderColor: 'rgba(75, 192, 192, 1)', // Warna garis batang
                                    borderWidth: 1 // Lebar garis batang
                                }]
                            };

                            // Membuat grafik garis dengan tiga batas pertumbuhan
                            var batasNormal = [17.5, 18.2, 19.0, 19.8, 20.5, 21.2]; // Sesuaikan dengan berat normal anak laki-laki per bulan (contoh data dummy)
                            var batasKurang = [16.8, 17.4, 18.0, 18.6, 19.2, 19.8]; // Sesuaikan dengan berat batas kurang anak laki-laki per bulan (contoh data dummy)
                            var batasLebih = [18.3, 19.0, 19.8, 20.5, 21.2, 21.8]; // Sesuaikan dengan berat batas lebih anak laki-laki per bulan (contoh data dummy)



                            var kmsChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: [], // Label bulan
                                    datasets: [
                                        {
                                            label: 'Berat Badan',
                                            data: [], // Data berat badan bayi
                                            borderColor: 'grey', // Warna garis data berat badan
                                            fill: false
                                        },
                                        {
                                            label: 'Normal',
                                            data: batasNormal,
                                            borderColor: 'green',
                                            fill: false,
                                            borderDash: [5, 5] // Membuat garis putus-putus untuk batas pertumbuhan normal
                                        },
                                        {
                                            label: 'Gizi Kurang',
                                            data: batasKurang,
                                            borderColor: 'red',
                                            fill: false,
                                            borderDash: [5, 5] // Membuat garis putus-putus untuk batas pertumbuhan kurang
                                        },
                                        {
                                            label: 'Gizi Lebih',
                                            data: batasLebih,
                                            borderColor: 'orange',
                                            fill: false,
                                            borderDash: [5, 5] // Membuat garis putus-putus untuk batas pertumbuhan lebih
                                        }
                                    ]
                                },
                                options: {
                                    scales: {
                                        x: {
                                            type: 'linear',
                                            position: 'bottom',
                                            title: {
                                                display: true,
                                                text: 'Umur (bulan)'
                                            }
                                        },
                                        y: {
                                            title: {
                                                display: true,
                                                text: 'Berat Badan (kg)',
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                }
                            });

                            // Mengisi data KMS (contoh data, sesuaikan dengan kebutuhan Anda)
                            for (var bulan = <?php echo $totalBulan - 5; ?>; bulan <= <?php echo $totalBulan; ?>; bulan++) {
                                kmsChart.data.labels.push(bulan);

                                // Gantilah logika di bawah ini dengan logika sesuai kebutuhan Anda
                                var berat = Math.random(5) + 3; // Data berat acak untuk contoh
                                if(bulan == <?php echo $totalBulan; ?>){
                                    berat = <?php echo $balita->berat; ?>
                                }
                                else {
                                    berat = null
                                }
                                kmsChart.data.datasets[0].data.push(berat);
                            }

                            // Update grafik
                            kmsChart.update();
                            
                        </script>


                    </div>
                </div>
            </div>





        </div>
    </div>

</x-app-layout>