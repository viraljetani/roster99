<x-app>

    <x-slot name="content">
    
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Permissions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 d-flex flex-row-reverse">
                <a class="btn btn-app" href="{{ route('permission.create')}}">
                      <i class="fas fa-plus"></i> Create
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Permissions</h3>
                    <div class="card-tools">
                        
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            
                            <th style="width: 40px">Actions</th>
                        </tr>
                        </thead>
                        @foreach($permissions as $permission)
                        <tr>
                            <td>{{ $loop->index + 1 }}.</td>
                            <td>{{$permission->name}}</td>
                            
                            <td>
                                <form action="{{ route('permission.destroy',$permission->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')      
                                    <button type="submit" class="btn btn-link badge bg-danger"><i class="far fa-trash-alt"></i></button>
                                    <a href="{{route('permission.edit',$permission->id)}}" ><span class="badge bg-success"><i class="far fa-edit"></i></span></a>
                                </form>
                            
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
    
                    <div class="card-footer clearfix">
                        {{-- <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="{{ $permissions->previousPageUrl() }}">« Previous</a></li>
                        
                        <li class="page-item"><a class="page-link" href="{{ $permissions->nextPageUrl() }}">» Next</a></li>
                        </ul> --}}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </x-slot>
    </x-app>