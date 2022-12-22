@extends('admin.layout')
    @section('content')
    
        <div class="row">
            <h4 class="mb-sm-0 font-size-18">Crear Post</h4>
        </div>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            {{csrf_field() }}
            <div class="row mt-2">

                <div class="col-sm-8">
                    <div class="card border border-primary">
                        
                        <div class="card-body">

                                <div class="form-group">
                                    <label class="fs-5 fw-bold" for="">Titulo de la Publicación</label>
                                    <input name="title" type="text" class="form-control" placeholder="Ingresar Titulo de la Publicación">
                                </div>
                                

                                <div class="form-group">
                                    <label class="fs-5 fw-bold" for="">Contenido Publicación</label>
                                    <textarea id="cuerpo" row="10" name="body" class="form-control" placeholder="Ingresa el contenido de la Publicación"> </textarea>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border border-primary">
                            
                        <div class="card-body">

                            <div class="form-group">
                                <label class="fs-5 fw-bold" for="">Categorías</label>
                                <select 
                                name="category_id" 
                                multiple="multiple" 
                                data-placeholder="Seleccionar una o mas categorias"
                                id="categorias"
                                class="form-control">
                                    <option value="">Seleccionar Categorias</option>
                                    @foreach($categorias as $cat)}
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="fs-5 fw-bold" for="">Tags</label>
                                <select 
                                name="tag" 
                                data-placeholder="Seleccionar tag"
                                id="tag_id"
                                class="form-control">
                                    <option value="">Seleccionar Categorias</option>
                                    @foreach($tags as $tag)}
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label>Inline Datepicker</label>
                                
                                <div class="input-group" id="datepicker">
                                    <input type="text" 
                                    name="published_at"
                                    class="form-control" 
                                    placeholder="dd M, yyyy"
                                    data-date-format="dd M, yyyy" 
                                    data-date-container='#datepicker' 
                                    data-provide="datepicker"
                                    data-date-autoclose="true">

                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div><!-- input-group -->
                            </div>

                            <div class="form-group">
                                <label class="fs-5 fw-bold" for="">Extracto</label>
                                <textarea name="excerpt" class="form-control" placeholder="Ingresa un extracto de la Publicación"> </textarea>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Guardar Publicación</button>
                            </div>

                        </div>
                    </div>
                </div>
            
            </div>
        </form>

          
    @endsection

    @push('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    @endpush

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/gpkkscdgtthwly4bkhhpbprs6sbgrnlkie7ncwr7fhiwgzs0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: '#cuerpo',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
        <script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $('datepicker').datepicker({autoclose:true})
                $('#categorias').select2();
            })
        </script>
    @endpush