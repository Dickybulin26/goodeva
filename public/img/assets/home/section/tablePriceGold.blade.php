<section class="sectionPriceGold">

  <!-- table desktop -->
  <div class="containerHome d-sm-block d-md-block d-sm-none mb-5">

    <!-- title section -->
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <p class="text-title mb-3">Informasi Harga Emas Terkini</p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center d-flex justify-content-end">
        <h5 class="text-date">{{ Helper::tanggal_indo(date('Y-m-d')) }}</h5>
      </div>
      <hr class="section-divider mt-0">
    </div>

    <!-- <table style="margin-bottom: 1%;">
      <tr>
        <td><button class="btn text-white" style="background-color: #F6AD3C; border-radius: .5rem;">Harga Emas</button></td>
        <td><button class="btn ml-4 mr-4 btnOff">Harga Beli</button></td>
        <td><button class="btn btnOff">Tabungan Emas</button></td>
      </tr>
    </table> -->

    <!-- button tampil data tertentu -->
    <div class="row mb-3 selectPrice">
      <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
        <button class="btn btnSelect">Harga Emas</button>
        {{-- <button class="btn btnOff">Harga Beli</button>
        <button class="btn btnOff">Tabungan Emas</button> --}}
      </div>
    </div>

    <!-- table list price -->
    <div class="table-responsive">
      <table class="table table-hover">
        <thead style="border-bottom: hidden;">
          <tr style="background-color: #EFEEEC; color: #203745;">
            <th scope="col">Gram</th>
            <th scope="col">Price Per Bar</th>
            <!-- <th scope="col">Harga Antam Retro</th> -->
            <th scope="col">Stock</th>
            <!-- <th scope="col">Harga UBS</th> -->
          </tr>
        </thead>
        <tbody>
          @php
              $tanggal = "";
          @endphp
          @foreach ($harga_emas as $k => $item)
          @if ($k==0)
              @php
                  $tanggal = Helper::tanggal_indo($item->tanggal).', '.date('H:i',strtotime($item->waktu));
              @endphp
          @endif
          <tr>
            <td>{{ $item->gram }}</td>
            <td>Rp. {{ number_format($item->harga_antam,0,',','.') }}</td>
            {{-- <td>Rp. {{ number_format($item->harga_antam_retro,0,',','.') }}</td> --}}
            <td>
              @if($item->stock_emas == 1)
              Available
              @else
              Not Available
              @endif
            </td>
            {{-- <td>Rp. {{ number_format($item->harga_ubs,0,',','.') }}</td> --}}
          </tr>
          @endforeach
        
         
        </tbody>
      </table>
    </div>

    <h5 class="text-update mt-3"><span style="color: #00A39D;">*Update:</span> {{ $tanggal }}</h5>
  </div>
</section>