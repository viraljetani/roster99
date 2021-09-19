<x-app>

    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Role</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
        
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            
                @if(isset($role))
                    {{ Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'role.store']) }}
                @endif
                <div class="col">
            <!-- Input addon -->
                    <div class="card card-info">
                            <div class="card-header">
                                {{-- <h3 class="card-title">Subheading</h3> --}}
                            </div>
                            <div class="card-body">
                                        <div class="form-group w-100">
                                            <input name="name" type="text" value="{!! isset($role) ? $role->name : "" !!}" required="required" class="form-control form-control-lg" placeholder="Role" aria-label="Role">
                                        </div>
                                        
                                        <div class="form-group">
                                            <strong>Permissions:</strong>
                                            <br/>
                                            @foreach($permission as $value)
                                                @if(isset($rolePermissions))
                                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                @else
                                                <label>{{ Form::checkbox('permission[]', $value->id, array('class' => 'name')) }}
                                                @endif
                                                {{ $value->name }}</label>
                                            <br/>
                                            @endforeach
                                        </div>

                                        <x-error></x-error>
                            
                        </div> <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-info" name="save" value="{!! isset($role) ? "Update Role" : "Create Role"!!}" >
                            <input type="reset" class="btn btn-default float-right" name="reset" value="Reset" >
                        </div>
                        
                    </div> <!-- /.card -->   
                </div>
                {{ Form::close() }}
        </div>
    </x-slot>

</x-app>