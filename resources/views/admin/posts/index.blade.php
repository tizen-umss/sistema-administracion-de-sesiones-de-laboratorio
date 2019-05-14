@extends('admin.layout')

@section('header')
<h1>
        Todas las publicaciones
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        {{-- <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Inicio</a></li> --}}
        <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Posts</li>
      </ol>
@stop

@section('content')
    <h1>Dashboard</h1>
    {{-- <h1>{{Auth::user()->get() }}</h1> --}}

    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Crear publicacion</button>

    <div class="box-body">
            <table id="posts-table" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>posts
                <th>Titulo</th>
                <th>extracto</th>
                <th>acciones</th>
              </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->excerpt}}</td>
                        <td>
                            <a href="{{route('posts.show',$post)}}" class="btn btn-xs btn-default" target="_blank"><i class="fa fa-eye"></i></a>
                            <a href="{{route('admin.posts.edit',$post)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              
              </tfoot>
            </table>
          </div>
@stop


@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="/otro/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endpush

@push('scripts')
<!-- DataTables -->
<script src="/otro/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/otro/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
      $('#posts-table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
</script>

@endpush
