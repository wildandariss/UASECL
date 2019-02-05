@extends ('templates/header')

@section ('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Home</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	  @include ('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('/') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i>Kembali</a>
		  </div>
        <div class="box-body">
			<form action="{{ empty($result) ? url ('kelas/add') : url ("kelas/$result->id_kelas/edit") }}" class="form-horizontal" method="POST">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Home</label>
				<div class="col-sm-10">
					<input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Nama Kelas" value="{{ @$result->nama_kelas }}"/>
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
				</div>
			</div>
			</form>
		</div>
			<!-- /.box-body -->						
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection