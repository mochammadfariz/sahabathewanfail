@extends('master')
@section('content')
<!-- Required Resources -->

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="asset/img/user/rafif.PNG" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                   
                    <div class="work-experience pt-2">
                          <div class="section">
                        <h3>@Rafffvn</h3>
                       
                       
                    </div>
                       
                    </div>    
                </section>
                <section class="mb-5 mb-md-0">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">Kontak Saya </h3>
                 <p> <i style="color:green"class="fas fa-phone-alt"></i> +6287888562143</p>
                 <a href=""><img height="40px;" width="auto"src="asset/img/desainpelaporan/whatsapp.png"> Hubungi Whatsapp saya. </a>
                </section>
            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    Rafif Favian
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                    Jakarta Timur, ID
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
              
            </p>
            <p class="lead mt-4">Pecinta Kucing Anggora. Teknik Informatika UG 16 . Sedang mencari kucing lucu untuk dipelihara siapapun bisa contact saya. Work Hard Pray Hard </p>
           
            <section class="d-flex mt-5">
           
                <button class="btn btn-danger  mr-3 mb-3">
                    <i class="fa fa-warning"></i>
                    Laporkan
                </button>
               
                
            </section>
            <section class="mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            Tentang saya
                        </a>
                    </li>
                  
                   
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h4 class="text-uppercase font-weight-bold text-success">
                           Ambil Hewan Adopsi Milik @Rafffvn
                        </h4>
                       <!-- Konten Gallery Peliharaanku -->
         
       <section class="gallery-block grid-gallery">
            <div class="container">
                
                <div class="row">
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/anggora.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/anggora.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/husky.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/husky.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#husky">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kitten.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kitten.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucinglucu2.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucinglucu2.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                    <div class="col-6 col-md-4 item">
                        <a class="lightbox" href="asset/img/hewanku/kucingsungapura.jpg">
                            <img style="margin-top: 25px;width: 200px; height: 200px;object-fit: cover;" class="rounded img-fluid image scale-on-hover" src="asset/img/hewanku/kucingsungapura.jpg">
                        </a>
                        <button type="button" class="btn btn-success btn-sm">  <i class="far fa-eye"></i> Detail</button>
                    </div>
                  
                </div>
            </div>
        </section>
        
        <br>
        <br>
        <br>
        
                        <!-- Selesai Konten Gallery Peliharaanku -->

                       




<!-- Modal detail hewan -->
<!-- Modal -->
<div class="modal fade" id="husky" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cody</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <b>Kategori :</b> <p>Anjing <i style="color:orange;" class="fas fa-dog"></i></p>
        <b>Jenis :</b> <p>Siberian Husky</p>
        <b>Jenis Kelamin :</b> <p>Laki-laki <i style="color:blue;"class="fas fa-mars"></i></p> 
        <b>Lahir :</b> <p>14 Oktober 2018</p>
        <b>Tingkat agresivitas:</b> <span class="badge badge-pill badge-danger">Galak</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      
      </div>
    </div>
  </div>
</div>
<!-- Akhir modal detail hewan -->
@endsection