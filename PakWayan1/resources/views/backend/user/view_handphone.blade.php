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
				  <h3 class="box-title">Data kelola Handphone</h3>
                  <a href="{{route('handphone.add')}}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>nohp</th>
								<th>ktppemilik</th>
								<th>namapemilik</th>	
							</tr>
						</thead>
						<tbody>
							@foreach($nama as $key => $handphone)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $handphone->nohp }}</td>
								<td>{{ $handphone->ktppemilik }}</td>
                                <td>{{ $handphone->namapemilik }}</td>
								<td>
									<!-- <a href="{{route('handphone.edit', $handphone->id)}}" class="btn btn-info">Edit</a> -->
									<!-- <a href="{{route('users.delete', $handphone->id)}}" id="delete" class="btn btn-danger">Delete</a> -->
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