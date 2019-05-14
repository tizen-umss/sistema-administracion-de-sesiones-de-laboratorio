@extends('admin.layout')

@section('header')
<h1>
        POSTS
        <small>Crear publicacion</small>
      </h1>
      <ol class="breadcrumb">
      {{-- <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Inicio</a></li> --}}
      <li><a href="{{route('admin.posts.index')}}"><i class="fa fa-list"></i>Posts</a></li>
      <li class="active">Crear</li>
      </ol>
@stop

@section('content')
    <div class="row">

        <form method="POST" action="{{route('admin.posts.update',$post)}}">
          {{csrf_field()}} {{method_field('PUT')}}
        <div class="col-md-8">
                <div class="box box-primary">
                        
                            <div class="box-body">
                                <div class="form-group {{ $errors->has('title')? 'has-error' : 'no hay'}} ">
                                    <label>Titulo de la publicacion</label>
                                    <input name = "title" class="form-control" value="{{old('title',$post->title)}}" placeholder="ingrresa aqui el titulo de la publicacion">
                                    {!!$errors->first('title','<span class="help-block">:message</span>')!!}
                                </div>
                                

                                <div class="form-group {{ $errors->has('body')? 'has-error' : 'no hay'}}">
                                        <label>contenido de  la publicacion</label>
                                        <textarea row="10"name = "body" id="editor" class="form-control"  placeholder="contenido  de la publicacion">{{old('body',$post->body)}}</textarea>
                                        {!!$errors->first('body','<span class="help-block">:message</span>')!!}
                                </div>

                                
                
                
                            </div>
                                
                    </div>

        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                
                <div class="box-body">
                    <!-- Date -->
              <div class="form-group">
                    <label>Fecha de publicacion:</label>
    
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="published_at" type="text" class="form-control pull-right" value="{{old('published_at', $post->published_at ? $post->published_at->format('m/d/Y'): null)}}"id="datepicker">
                    </div>
                    <!-- /.input group -->
                  </div>
                      <div class="form-group {{ $errors->has('category')? 'has-error' : 'no hay'}} ">
                        <label >Category</label>
                        <select name="category"class="form-control">
                          <option value="">Selecciona una categoria</option>
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{ old('category',$post->category_id) == $category->id ? 'selected' : ''}}> {{$category->name}} </option>
                              
                          @endforeach
                        </select>
                        {!!$errors->first('category','<span class="help-block">:message</span>')!!}
                      </div>

                      <div class="form-group {{ $errors->has('category')? 'has-error' : 'no hay'}}">
                      <label >Etiquetas </label>
                        <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona una o mas etiquetas"
                        style="width: 100%;">
                        @foreach ($tags as $tag)
                      <option {{collect(old('tags',$post->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''}} value="{{ $tag->id}}">{{$tag->name}}</option>
                        @endforeach
                            
                        </select>
                        {!!$errors->first('tags','<span class="help-block">:message</span>')!!}
                      </div>

                        <div class="form-group {{ $errors->has('excerpt')? 'has-error' : 'no hay'}}">
                                <label>extracto de publicacion</label>
                        <textarea name = "excerpt" class="form-control" placeholder="extracto de la publicacion">{{old('excerpt',$post->excerpt)}}</textarea>
                                {!!$errors->first('excerpt','<span class="help-block">:message</span>')!!}
                        </div>

                        <div class="form-group">
                          <div class="dropzone"></div>
                        </div>

                        <div class="div form-group">
                          <button type="submit" class="btn btn-primary btn-block">Guardar publicacion</button>
                        </div>
                </div>
            </div>
        </div>
    </form>


    <div class="col-md-8">
      <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                @foreach ($post->photos as $photo)
                  <form method="POST" action="{{ route('admin.photos.destroy',$photo)}}">
                    {{method_field('DELETE')}} {{ csrf_field()}}
                  <div class="col-md-2">
                      <button class="btn btn-danger btn-xs" style="position:absolute"><i class="fa fa-remove"></i></button>
                      <img class="img-responsive" src="{{url($photo->url)}}" alt="">
                  </div>
                </form>
                  
                @endforeach
              </div>
        </div>
      </div>
    </div>
    </div>  

@stop

@push('styles')
 
{{-- dropzone css --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/otro/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/otro/adminlte/bower_components/select2/dist/css/select2.min.css">

@endpush

@push('scripts')
{{-- dropzone --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<!-- CK Editor -->
<script src="/otro/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<!-- bootstrap datepicker -->
<script src="/otro/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="/otro/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
    autoclose: true
    })
    $('.select2').select2();
    CKEDITOR.replace('editor')
    CKEDITOR.config.height= 315;

    //creamos una nueva instancia de prpzone para especificar
    var myDropzone=new Dropzone('.dropzone',{
      url:'/admin/posts/{{$post->id}}/photos',
      acceptedFiles:'image/*',
      maxFilesize: 2,
      paramName:'photo',
      headers:{
        'X-CSRF-TOKEN':'{{csrf_token()}}'
      },
      dictDefaultMessage:'Arrastra las fotos a qui para subirla',
    });
    myDropzone.on('error',function(file, res){
      var msg= res.message;
      $('.dz-error-message:last > span').text(msg);
    });
    Dropzone.autoDiscover = false;
</script>
@endpush



