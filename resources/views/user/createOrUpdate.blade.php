<x-app>

    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Create Employee</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
        
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            
                @if(isset($user))
                    {{ Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'user.store']) }}
                @endif
                <div class="col">
            <!-- Input addon -->
                    <div class="card card-info">
                            <div class="card-header">
                                {{-- <h3 class="card-title">Subheading</h3> --}}
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col">
                                            <input name="name" type="text" value="{!! isset($user) ? $user->name : "" !!}" required="required" class="form-control form-control-lg" placeholder="Name" aria-label="Name">
                                        </div>
                                        
                                        <div class="form-group col">
                                            <input name="email" type="email" value="{!! isset($user) ? $user->email : "" !!}" required="required" class="form-control form-control-lg @if($errors->has('email')) is-invalid @endif" placeholder="abc@example.com" aria-label="Email">
                                        </div>
                                        <div class="form-group col">
                                            <input name="mobile" type="number" value="{!! isset($user) ? $user->mobile : "" !!}" required="required" class="form-control form-control-lg" placeholder="04123456789" aria-label="Mobile">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col">
                                            <select name="role" class="custom-select rounded-0">
                                                @foreach ($roles as $role)
                                                    
                                                    <option value="{{ $role->name }}">{{$role->name}}</option>
                                                    
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col mb-3">
                                            <input type="password" placeholder="Password" id="password" 
                                            class="form-control @if($errors->has('password')) is-invalid @endif" name="password" >
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                    </div>

                                        <x-error></x-error>
                            
                        </div> <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-info" name="save" value="{!! isset($user) ? "Update Employee" : "Create Employee"!!}" >
                            <input type="reset" class="btn btn-default float-right" name="reset" value="Reset" >
                        </div>
                        
                    </div> <!-- /.card -->   
                </div>
                {{ Form::close() }}
        </div>
    </x-slot>

</x-app>