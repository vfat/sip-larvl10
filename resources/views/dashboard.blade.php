<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                
  <div class="chart-container">
    <div class="line-chart-container">
      <canvas id="pie-chart"></canvas>
    </div>

    <div class="sample-chart-container">
      <canvas id="line-chart"></canvas>
    </div>    

    <div class="sample-chart-container">
      <canvas id="kms-chart"></canvas>
    </div> 

  </div>



  <!-- javascript -->

   <script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $chart_data; ?>`);
      var ctx = $("#pie-chart");
      var ctx2 = $("#line-chart");
      var ctx3 = $("#kms-chart");

      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };

      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };

      var options2 = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };


      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
      const xValues = [100,200,300,400,500,600,700,800,900,1000];
      var chart2 = new Chart(ctx2, {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{ 
                data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                borderColor: "red",
                fill: false
                }, { 
                data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                borderColor: "green",
                fill: false
                }, { 
                data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                borderColor: "blue",
                fill: false
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "sample",
                    fontSize: 18,
                    fontColor: "#111"
                },                
                legend: {display: false}
            }
        });




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
        var batasNormal = [3.2, 3.8, 4.4, 5.0, 5.6, 6.2]; // Sesuaikan dengan berat normal bayi per bulan
        var batasKurang = [2.8, 3.3, 3.8, 4.2, 4.7, 5.1]; // Sesuaikan dengan berat batas kurang bayi per bulan
        var batasLebih = [3.6, 4.1, 4.7, 5.3, 5.9, 6.5]; // Sesuaikan dengan berat batas lebih bayi per bulan


        var kmsChart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: [], // Label bulan
                datasets: [
                    {
                        label: 'Berat Badan',
                        data: [], // Data berat badan bayi
                        borderColor: 'blue', // Warna garis data berat badan
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
        for (var bulan = 1; bulan <= 6; bulan++) {
            kmsChart.data.labels.push(bulan);

            // Gantilah logika di bawah ini dengan logika sesuai kebutuhan Anda
            var berat = Math.random(5) + 3; // Data berat acak untuk contoh
            kmsChart.data.datasets[0].data.push(berat);
        }

        // Update grafik
        kmsChart.update();    

  });
</script>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
