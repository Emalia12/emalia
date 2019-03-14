@extends('layouts.dashboard')
@section('content')

    <section class="content-header">
      <h1>
        DASHBOARD
        <small>Table Kategori</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3> <h4> <a href="{{url('tambahdata')}}">Add data</a></h4>
              <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="cari" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
              <tr><th> ID</th>
                <th> <center> Nama Kategori  </center> </th> 
                <th> <center> Slug </center> </th>
                <th> <center> Tanggal Input Data </center> </th>
                <th> <center> Opsi </center> </th></tr>
                <?php $no=1 ?>
                @foreach($kategori as $kategori)
                <tr>

                <td> <center>{{$no++}} </center> </td>
                <td> <center>{{$kategori->nama_kategory}} </center> </td>
                <td> <center>{{$kategori->slug}} </center> </td>
                <td> <center>{{$kategori->tanggal_input_data}} </center> </td>
                <td><a href="editKategori/{{$kategori->id}}">Edit</a> | <a href="hapusKategori/{{$kategori->id}}" onClick="return confirm('Are you sure you want to delete?')
									" class="btn default"><i class="fa fa-trash-o"></i> Hapus</a></td>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
</section>
          <!-- /.box -->
@endsection