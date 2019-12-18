@extends('admin.home')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Guru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataGuru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="tabelGuru" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Foto</th>
                  <th>Nama Guru</th>
                  <th>Tmpt. Tgl. Lahir</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Telpon</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="dataGuru">
                   
                
                </tbody>
                <tfoot> 
                <tr>
                  <th>Foto</th>
                  <th>Nama Guru</th>
                  <th>Tmpt. Tgl. Lahir</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Telpon</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection