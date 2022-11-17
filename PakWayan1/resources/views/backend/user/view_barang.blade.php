@extends('admin.admin_master')

@section('admin')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	
		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">kelola barang</h3>
                  <a href="{{route('user.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>nama</th>
								<th>harga</th>
								<th>jumlah</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($nama as $key => $barang)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{$barang->nama }}</td>
								<td>{{ $barang->harga }}</td>
								<td>{{ $barang->jumlah }}</td>
								<td>
									<a href="{{route('barang.edit', $barang->id)}}" class="btn btn-info">Edit</a>
									<a href="{{route('users.delete', $barang->id)}}" id="delete" class="btn btn-danger">Delete</a>
								</td>
								
							</tr>
							@endforeach
						
						</tbody>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								
							</tr>
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			 
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->




@endsection

<!-- Vendor JS -->

  <script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>