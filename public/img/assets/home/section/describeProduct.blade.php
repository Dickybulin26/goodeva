<section class="sectionDescribeProduct">
  <div class="containerHome mt-5">
    <h3 style="color: #00A39D;"><b>Produk Gadai Emas BSI</b></h3>
    <hr class="section-divider">
    <table class="table table-striped border">
      <thead>
        <tr class="produkTabel ">
          <th class="border-end">Perihal</th>
          <th class="text-center">Uraian</th>
        </tr>
      </thead>
      <tbody>
        @foreach($infoGadai as $key => $describe)
        <tr>
          <td class="border">{{ $describe->judul }}</td>
          <td><?php echo $describe->uraian ?></td>
        </tr>
        @endforeach
        {{-- <tr>
          <td class="border">Jenis Emas :</td>
          <td>Emas latakan dan perhiasan, dengan kadar mulai 16 s.d 24 karat.</td>
        </tr>
        <tr>
          <td class="border">Pengikatan (akad) :</td>
          <td>
            1. prinsip gadai menggunakan skim Qardh dalam rangka Rahn. <br>
            2. Pengikatan obyek gadai menggunakan skim gadai. <br>
            3. Jasa penitipan obyek gadai menggunakan skim Ijarah.
          </td>
        </tr>
        <tr>
          <td class="border">Maksimum Qardh :</td>
          <td>
            1. Jaminan Emas Latakan : 95% dari nilai taksiran BSI. <br>
            2. Jaminan Emas Perhiasan : 80% dari nilai taksiran BSI.
          </td>
        </tr>
        <tr>
          <td class="border">Jumlah Pembiayaan :</td>
          <td>Mulai dari Rp500.000,- s.d Rp250.000.000,- per nasabah.</td>
        </tr> --}}
        
      </tbody>
    </table>
  </div>
</section>

<section class="sectionDescribeProduct">
  <div class="containerHome mt-5">
    <h3 style="color: #00A39D;"><b>Produk Cicil Emas BSI</b></h3>
    <hr class="section-divider">
    <table class="table table-striped border">
      <thead>
        <tr class="produkTabel ">
          <th class="border-end">Perihal</th>
          <th class="text-center">Uraian</th>
        </tr>
      </thead>
      <tbody>
        @foreach($infoCicil as $key => $describe)
        <tr>
          <td class="border">{{ $describe->judul }}</td>
          <td><?php echo $describe->uraian ?></td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</section>