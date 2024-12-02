<section class="sectionGraphic">
  <div class="containerHome">

    <h1 id="namaGrafik" class="text-grafik">Grafik Harga Emas (Jual dan Beli) PT. Antam, Tbk</h1>
    <h3 class="text-grafik-date">{{ Helper::tanggal_indo($start_date) }} - {{ Helper::tanggal_indo($end_date) }}</h2>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-end">
          <button class="btn btnJual active" id="btnJual">Harga Jual</button>
        </div>
        <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-start">
          <button class="btn btnBeli" id="btnBeli">Harga Beli</button>
        </div>
      </div>
      <div class="chart-container mt-4">
        <div class="panel-body" id="panelJual">
          <canvas id="canvasJual" style="height: 300px" class="grafik-chart"></canvas>
        </div>
        <div class="panel-body" id="panelBeli">
          <canvas id="canvasBeli" style="height: 300px" class="grafik-chart"></canvas>
        </div>
      </div>
  </div>
</section>

@section('scriptPage')
<!--chartjs script  -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  $(document).ready(function(){
    $('#panelJual').show();
    $('#panelBeli').hide();
  });

  $('#btnJual').on('click',function(){
    $('#panelJual').show();
    $('#panelBeli').hide();
    
    $(this).addClass('active');
    $('.btnBeli').removeClass('active');
  })

  $('#btnBeli').on('click',function(){
    $('#panelJual').hide();
    $('#panelBeli').show();
    $(this).addClass('active');
    $('.btnJual').removeClass('active');
  })

  var xValues = [@php echo $chart_tanggal; @endphp];
  var yValuesJual = [@php echo $chart_data_jual; @endphp];
  var yValuesBeli = [@php echo $chart_data_beli; @endphp];

  var barChartDataJual = {
    labels: xValues,
    datasets: [{
      // backgroundColor: "fff",
       fill: false,
      borderColor:"#00A39D",
      data: yValuesJual,
      label: 'Harga Jual',
    }]
  };

  var barChartDataBeli = {
    labels: xValues,
    datasets: [{
      // backgroundColor: "fff",
       fill: false,
      borderColor:"#00A39D",
      data: yValuesBeli,
      label: 'Harga Beli',
    }]
  };

  

    var namaGrafik = $("#namaGrafik").html()

 

new Chart("canvasJual", {
  type: "line",
  data: barChartDataJual,
  options: {  
    responsive: true,
    maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: namaGrafik
          }
        },
    scales: {
        y : {
            min: 0,
            beginAtZero: true,
            // stepSize: 10000,
            max: {{ $max_jual+200000 }},
        }
    }
  }
});

new Chart("canvasBeli", {
  type: "line",
  data: barChartDataBeli,
  options: {  
    responsive: true,
    maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: namaGrafik
          }
        },
    scales: {
        y : {
            min: 0,
            beginAtZero: true,
            // stepSize: 10000,
            max: {{ $max_beli+200000 }},
        }
    }
  }
});

  
</script>

@endsection