<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<x-mobile-layout>
                        @php($tanggal_lahir= date('d M Y', strtotime($balita->tgl_lahir)))
                        @php($datetime1 = new DateTime($balita->tgl_lahir))
                        @php($now = new DateTime(date('Y-m-d')))
                        @php($umur=$datetime1->diff($now))
                        @php($umur_tahun=$umur->y)
                        @php($umur_bulan=$umur->m)
                        @php($umur_hari=$umur->d)
                        @php($totalBulan = ($umur_tahun * 12)+ ($umur_bulan))


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  
                        <div><a href="{{route('mobile.ortu', $token)}}" class="btn btn-primary btn-xs sm:btn-sm md:btn-sm lg:btn-sm">Kembali</a></div>


        </div>
    </div>                        

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Grafik BB/U</h2>
                        
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Grafik TB/U</h2>
                        
                        <div class="chart-container">
                        
                            <div class="kms-chart-container">
                                <canvas id="kms-chart2"></canvas>
                            </div> 

                        </div>

                        <script type="text/javascript">

                            var ctx = $("#kms-chart2");

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


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Grafik BB/TB</h2>
                        
                        <div class="chart-container">
                        
                            <div class="kms-chart-container">
                                <canvas id="kms-chart3"></canvas>
                            </div> 

                        </div>

                        <script type="text/javascript">

                            var ctx = $("#kms-chart3");

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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


        
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <h2>Grafik IMT/U</h2>
                        
                        <div class="chart-container">
                        
                            <div class="kms-chart-container">
                                <canvas id="kms-chart4"></canvas>
                            </div> 

                        </div>

                        <script type="text/javascript">

                            var ctx = $("#kms-chart4");

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

</x-mobile-layout>