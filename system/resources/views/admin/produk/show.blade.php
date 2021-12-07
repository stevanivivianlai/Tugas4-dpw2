@extends ('admin.base')
@section('content')
<!-- start coding -->

   
   <div class="container">
   	<div class="card mt-3 pt-3">
   	<div class="row ml-1 mr-2 mb-3">
   		<h2>Detail Data Produk</h2>
   	</div>
      <hr>

   	<div class="container">
   		<div class="card-body">
   			<h3>{{$produk->nama}}</h3>
            <p>Rp. {{number_format($produk->harga)}} |
               Brand : {{$produk->brand}} |
               Stok : {{$produk->stok}} 
            </p>
            {!! nl2br ($produk->deskripsi) !!}
   			</div>	
   		</div>
   		
   	</div>

   	</div>
   </div>

<!-- end coding -->
@endsection

