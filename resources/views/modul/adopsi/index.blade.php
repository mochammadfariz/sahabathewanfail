@extends('master')
@section('content')
<section class="header-main shadow">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-3 col-sm-4">
	<div class="brand-wrap">
		<img width="70" height="70" class="logo" src="asset/img/logo/sahabathewan1.png">
	</div> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-8">
			<form action="#" class="search-wrap">
				<div class="input-group w-100">
				    <input type="text" class="form-control" style="width:40%;" placeholder="Search">
				    <select class="custom-select" name="category_name">
							<option value="">Sumber Adopsi</option><option value="codex">Komunitas</option>
							<option value="comments">User</option>
					</select>
				    <div class="input-group-append">
				      <button class="btn btn-primary" type="submit">
				        <i class="fas fa-search"></i>
				      </button>
				    </div>
			    </div>
			</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-md-12">
		
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section>


<section class="section-content bg padding-y">
<div class="container">

<div class="row">
	<aside class="col-sm-3">

<div class="card card-filter">
	<article class="card-group-item">
		<header class="card-header">
			<a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Jenis Hewan</h6>
			</a>
		</header>
		<div style="" class="filter-content collapse show" id="collapse22">
			<div class="card-body">
				<form class="pb-3">
				<div class="input-group">
				  <input class="form-control" placeholder="Search" type="text">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>

				<ul class="list-unstyled list-lg">
					<li><a href="#">Kucing <span class="float-right badge badge-light round">142</span> </a></li>
					<li><a href="#">Anjing  <span class="float-right badge badge-light round">3</span>  </a></li>
				</ul>  
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse44">
				<i class="icon-action fa fa-chevron-down"></i>
				<h6 class="title">Berdasarkan Lokasi </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse44">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">5</span>
				    Jakarta Utara
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">13</span>
				    Jakarta Timur
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">12</span>
				    Jakarta Selatan
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Jakarta Barat
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" value="" type="checkbox">
				  <span class="form-check-label">
				  	<span class="float-right badge badge-light round">32</span>
				    Jakarta Pusat
				  </span>
				</label>  <!-- form-check.// -->
			</form>
			</div> <!-- card-body.// -->
		</div> <!-- collapse .// -->
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->


	</aside> <!-- col.// -->
	<main class="col-sm-9">


<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/hewanku/husky.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> Cody <span class="badge badge-pill badge-success">Free</span> </h4>
			
					
				
				<p> Cody berumur 2,5 tahun. Berkulit Putih dan Coklat. Silahkan adopsi Cody karena saya tidak boleh memelihara anjing lagi oleh orang tua saya. </p>
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <dd>Jakarta Utara</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Kategori</dt>
				  <dd>Anjing</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Siberian Husky</dd>
				</dl>  <!-- item-property-hor .// -->
			
				
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					
				</div> <!-- info-price-detail // -->
			
				<br>
				<p>
					<a href="/profilteman" class="btn btn-primary"> Hubungi </a>
					<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#husky"> Detail  <i class="fas fa-eye"></i> </a>
				</p>
				
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

<article class="card card-product">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="asset/img/fotokomunitas/defaultuser.jpg"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<h4 class="title"> Popo <span class="badge badge-pill badge-success">Free</span> </h4>
			
				<p> Kucing Anggora berumur 2 bulan, alasan kenapa saya open adopsi karena saya terlalu banyak memelihara kucing.</p>
				<dl class="dlist-align">
				  <dt>Lokasi</dt>
				  <dd>Jakarta Timur</dd>
				</dl>  <!-- item-property-hor .// -->
				<dl class="dlist-align">
				  <dt>Kategori</dt>
				  <dd>Kucing</dd>
				</dl>  <!-- item-property-hor .// -->
				
				<dl class="dlist-align">
				  <dt>Jenis</dt>
				  <dd>Anggora</dd>
				</dl>  <!-- item-property-hor .// -->
				
			
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					
				</div> <!-- info-price-detail // -->
			
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Hubungi </a>
					<a href="#" class="btn btn-secondary"> Detail <i class="fas fa-eye"></i>  </a>
				</p>
				
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- card product .// -->

	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>

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