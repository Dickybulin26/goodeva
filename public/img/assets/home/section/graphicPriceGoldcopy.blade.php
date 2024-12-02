<section class="sectionGraphic">
  <div class="containerHome">

    <h1 id="namaGrafik" class="text-grafik">Grafik Harga Emas(Jual dan Beli) PT. Bank Syariah Indonesia</h1>
    <h3 class="text-grafik-date">{{ Helper::tanggal_indo($start_date) }} - {{ Helper::tanggal_indo($end_date) }}</h2>
      {{-- <div class="row">
        <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-end">
          <button class="btn btnJual active" id="btnJual">Harga Jual</button>
        </div>
        <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-start">
          <button class="btn btnBeli" id="btnBeli">Harga Beli</button>
        </div>
      </div> --}}
      <div class="chart-container mt-4">
        {{-- <div class="panel-body" id="panelJual">
          <canvas id="canvasJual" style="height: 300px" class="grafik-chart"></canvas>
        </div>
        <div class="panel-body" id="panelBeli">
          <canvas id="canvasBeli" style="height: 300px" class="grafik-chart"></canvas>
        </div> --}}
        <div id="container"></div>
      </div>
  </div>
</section>

@section('scriptPage')
<!--chartjs script  -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>


<script type="text/javascript">
      Highcharts.getJSON("https://demo-live-data.highcharts.com/aapl-c.json", (data) => {
        const chart = Highcharts.stockChart("container", {
          chart: {
            height: 600,
          },

          rangeSelector: {
            selected: 1,
          },

          series: [
            {
              name: "Harga Emas",
              data: data,
              type: "area",
              threshold: null,
              tooltip: {
                valueDecimals: 2,
              },
            },
          ],

          responsive: {
            rules: [
              {
                condition: {
                  maxWidth: 500,
                },
                chartOptions: {
                  chart: {
                    height: 300,
                  },
                  subtitle: {
                    text: null,
                  },
                  navigator: {
                    enabled: false,
                  },
                },
              },
            ],
          },
        });
      });
    </script>
@endsection