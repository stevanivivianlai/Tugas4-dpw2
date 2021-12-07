@extends ('admin.base')
@section('content')
<!-- start coding -->

   
   <div class="container">
   	<div class="card mt-3 pt-3">
   	<div class="row ml-1 mr-2 mb-3">
   		<div class="col-md-10">
   			<h2>Data Produk</h2>
   		</div>
   		<div class="col-md-2">
   			<a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Data Produk</a>
   		</div>
   	</div>
      <hr>

   	<div class="container">
         <div class="col-md-12">
            <table class="table">
            <thead>
               <th>No</th>
               <th width="300px">Aksi</th>
               <th>Nama</th>
               <th>Harga</th>
               <th>Brand</th>
               <th>Stok</th>
            </thead>
            <tbody>
               @foreach($list_produk as $produk)
               <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                     <div class="btn btn-group">

                              <a href="{{ url('admin/produk', $produk->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

                              <a href="{{ url('admin/produk', $produk->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                              @include ('admin.utils.delete', ['url' => url('admin/produk', $produk->id)])
                           </div>   
                  </td>
                  <td>{{ucwords($produk->nama)}}</td>
                  <td>{{number_format($produk->harga)}}</td>
                  <td>{{$produk->brand}}</td>
                  <td>{{$produk->stok}}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
         </div>
   		
   		
   	</div>

   	</div>
   </div>

<!-- end coding -->
@endsection

