<section class="sectionReadNews mt-3">
  <!-- other news -->
  <div class="col-md-12 otherNews">
    <div class="row">
  
      <!-- head other news -->
      <div class="col-md-12 headOtherNews my-3">
        <div class="row">
          <div class="col-md-6">
            <h3>Lainnya <b>Untuk Anda</b></h3>
          </div>
        </div>
        <hr class="my-0">
      </div>
      
      <!-- content other news -->
      <div class="col-md-12 contentOtherNews d-none d-sm-block">
        <div class="row">
          @foreach ($artikel as $art_lain)
            <div class="col-md-3 newsCard">
              @if($art_lain->tipe == "media_link")
              <a href="{{$art_lain->url_link}}">
              @elseif($art_lain->tipe == "video_link")
              
              @else
                <a href="{{url('detail-news/'.$art_lain->slug_url)}}">
              @endif

              @if($art_lain->tipe == "video_link")
              @php
                if ($art_lain->url_link != "") {
                  $expl_link = explode('=',$art_lain->url_link);
                  $get_code = $expl_link[1];
                }else{
                  $get_code = "";
                }
              @endphp
               <div class="bg-black coverNews">
                  <div class="control-button text-center">
                    <a href="{{ $art_lain->url_link }}" data-lity="">
                      <img src="{{ asset('public/img/plays_button.png') }}" alt="" class="play-btn">
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bg-black">
                    <img src="{{ 'http://img.youtube.com/vi/'.$get_code.'/mqdefault.jpg' }}" class="cover-img cover-video" alt="image video thumbnail">
                  </div>
              </div>
              @else
              <img src="{{asset('public/img/news/cover/'.$art_lain->foto_cover)}}"  alt="image news bsi">
              @endif

              @if($art_lain->tipe == "video_link")
              <a href="{{url('detail-news/'.$art_lain->slug_url)}}">
              @endif
                
                <h5>
                  @php
                      $judul = $art_lain->judul;
                      $hasil_kata = strlen($judul);
                      if ($hasil_kata >= 53) {
                            $substing = substr(strip_tags($judul),0,52);
                            //echo $substing;
                            //echo "...";
                            $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                            echo $judul_berita_potong;
                      }else {
                            echo $judul;
                      }
                  @endphp
                </h5>

                @if($art_lain->tipe == "video_link")
              </a>
              @endif
                <p><span>{{ $art_lain->created_by }}</span>
                  @php
                      $dt = new Carbon\Carbon($art_lain->publish_date);
                      echo $dt->translatedFormat('j  F Y');
                  @endphp
                </p>
                @if($art_lain->tipe == "media_link")
              </a>
              @elseif($art_lain->tipe == "video_link")
              
              @else
              </a>
              @endif
            </div>
          @endforeach
        </div>
      </div>
      {{-- Mobile --}}
      <div class="col-sm-12 contentOtherNews d-md-none">
        <div class="row product-slide">
          @foreach ($artikel as $art_lain)
            <div class="col-md-3 mr-4">
              @if($art_lain->tipe == "media_link")
              <a href="{{$art_lain->url_link}}">
              @elseif($art_lain->tipe == "video_link")
              
              @else
                <a href="{{url('detail-news/'.$art_lain->slug_url)}}">
              @endif

              @if($art_lain->tipe == "video_link")
              @php
                if ($art_lain->url_link != "") {
                  $expl_link = explode('=',$art_lain->url_link);
                  $get_code = $expl_link[1];
                }else{
                  $get_code = "";
                }
              @endphp
               <div class="coverNews">
                  <div class="control-button text-center">
                    <a href="{{ $art_lain->url_link }}" data-lity="">
                      <img src="{{ asset('public/img/plays_button.png') }}" alt="" class="play-btn">
                    </a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bg-black">
                    <img src="{{ 'http://img.youtube.com/vi/'.$get_code.'/mqdefault.jpg' }}" class="cover-img cover-video" alt="image video thumbnail">
                  </div>
              </div>
              @else
              <img src="{{asset('public/img/news/cover/'.$art_lain->foto_cover)}}"  alt="image news bsi">
              @endif
                {{-- <img src="{{asset('public/img/news/cover/'.$art_lain->foto_cover)}}" alt=""> --}}
                <h5>
                  @php
                      $judul = $art_lain->judul;
                      $hasil_kata = strlen($judul);
                      if ($hasil_kata >= 53) {
                            $substing = substr(strip_tags($judul),0,52);
                            //echo $substing;
                            //echo "...";
                            $judul_berita_potong = preg_replace('/\W\w+\s*(\W*)$/', '$1', $substing);
                            echo $judul_berita_potong;
                      }else {
                            echo $judul;
                      }
                  @endphp
                </h5>
                <p><span>{{ $art_lain->created_by }}</span>
                  @php
                      $dt = new Carbon\Carbon($art_lain->publish_date);
                      echo $dt->translatedFormat('j  F Y');
                  @endphp
                </p>
                @if($art_lain->tipe == "media_link")
              </a>
              @elseif($art_lain->tipe == "video_link")
              
              @else
              </a>
              @endif
            </div>
          @endforeach
        </div>
      </div>
  
    </div>
  </div>
</section>