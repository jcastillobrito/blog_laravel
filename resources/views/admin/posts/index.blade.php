@extends('admin.layout')
    @section('content')
    
        <div class="row">
            <h4 class="mb-sm-0 font-size-18">Todas las Publicaciones</h4>
            <table id="table_1"  class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Extracto</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->excerpt}}</td>
                        <td> 
                            <a href="#" class="btn btn-sm btn-info"> <i class="bx bx-xs bxs-pencil"></i> </a> 
                            <a href="#" class="btn btn-sm btn-danger"> <i class="bx bx-xs bx-trash-alt"></i> </a> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    @endsection
    
    @push('styles')
        <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
    @endpush
        
    @push('scripts')
        <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script>
                $(document).ready(function()
                {
                    $("#table_1").DataTable({
                        'paging':true,
                        'lengthChange':false,
                        'searching':false,
                        'ordering':true,
                        'info':true,
                        'autoWidth':false,
                    })
                })
        </script>
    @endpush

