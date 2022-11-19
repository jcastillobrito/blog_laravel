@extends('admin.layout')
    @section('content')
    
        <div class="row">
            <h4 class="mb-sm-0 font-size-18">Crear Post</h4>
        </div>
        <form action="">
            <div class="row mt-2">

                <div class="col-sm-8">
                    <div class="card border border-primary">
                        
                        <div class="card-body">

                                <div class="form-group">
                                    <label class="fs-5 fw-bold" for="">Titulo de la Publicación</label>
                                    <input name="title type="text" class="form-control" placeholder="Ingresar Titulo de la Publicación">
                                </div>
                                

                                <div class="form-group">
                                    <label class="fs-5 fw-bold" for="">Contenido Publicación</label>
                                    <textarea row="10" name="body" class="form-control" placeholder="Ingresa el contenido de la Publicación"> </textarea>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border border-primary">
                            
                        <div class="card-body">

                            <div class="form-group">
                                <label class="fs-5 fw-bold" for="">Categorías</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccionar Categorias</option>
                                    @foreach($categorias as $cat)}
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label>Inline Datepicker</label>
                                
                                <div class="input-group" id="datepicker">
                                    <input type="text" 
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
        <link href="/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    @endpush

    @push('scripts')
        <script src="/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $('datepicker').datepicker({autoclose:true})
            })
        </script>
    @endpush