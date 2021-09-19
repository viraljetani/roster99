<x-app>

    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Permission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
        
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            
                @if(isset($permission))
                    {{ Form::model($permission, ['route' => ['permission.update', $permission->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'permission.store']) }}
                @endif
                <div class="col">
            <!-- Input addon -->
                    <div class="card card-info">
                            <div class="card-header">
                                {{-- <h3 class="card-title">Subheading</h3> --}}
                            </div>
                            <div class="card-body">
                                        <div class="form-group w-100">
                                            <input name="name" type="text" value="{!! isset($permission) ? $permission->name : "" !!}" required="required" class="form-control form-control-lg" placeholder="Permission" aria-label="permission">
                                        </div>
                                        
                                        <x-error></x-error>
                            
                        </div> <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-info" name="save" value="{!! isset($permission) ? "Update permission" : "Create permission"!!}" >
                            <input type="reset" class="btn btn-default float-right" name="reset" value="Reset" >
                        </div>
                        
                    </div> <!-- /.card -->   
                </div>
                {{ Form::close() }}
        </div>
    </x-slot>

</x-app>