 <!-- /.content-wrapper -->
 <footer class="main-footer text-center text-sm">
    &copy; 2021 <a href="#">Cryptozen</a>
  </footer>
  </div>
  <!-- /.content-wrapper -->

  
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */


      var lineChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'september', 'oct', 'nov', 'dec'],
        datasets: [
          {
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: '#ffc107',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [28, 2, 40, 19, 86, 27, 90, 10, 80, 50, 25, 75]
          }
        ]
      }

      var lineChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
              drawBorder: false,
            },
            ticks: {
              display: false //this will remove only the label
            }
          }],
          yAxes: [{
            gridLines: {
              drawBorder: false,
              display: false
            },
            ticks: {
              display: false
            }
          }]
        }
      }

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas1 = $('#lineChart1').get(0).getContext('2d')
      var lineChartCanvas2 = $('#lineChart2').get(0).getContext('2d')
      var lineChartCanvas3 = $('#lineChart3').get(0).getContext('2d')
      var lineChartCanvas4 = $('#lineChart4').get(0).getContext('2d')
      var lineChartCanvas5 = $('#lineChart5').get(0).getContext('2d')
      var lineChartOptions = $.extend(true, {}, lineChartOptions)
      var lineChartData = $.extend(true, {}, lineChartData)
      lineChartData.datasets[0].fill = false;
      lineChartOptions.datasetFill = false

      var lineChart2 = new Chart(lineChartCanvas1, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
      // 
      lineChartData.datasets[0].borderColor = "#627eea";
      var lineChart2 = new Chart(lineChartCanvas2, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
      lineChartData.datasets[0].borderColor = "#28a745";
      var lineChart3 = new Chart(lineChartCanvas3, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
      lineChartData.datasets[0].borderColor = "red";
      var lineChart4 = new Chart(lineChartCanvas4, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
      lineChartData.datasets[0].borderColor = "green";
      var lineChart5 = new Chart(lineChartCanvas5, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })

    })
  </script>
</body>

</html>