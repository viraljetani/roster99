<x-app>

    <x-slot name="content">
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Create New Organization</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
        
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            
                @if(isset($organization))
                    {{ Form::model($organization, ['route' => ['organization.update', $organization->id], 'method' => 'patch']) }}
                @else
                    {{ Form::open(['route' => 'organization.store']) }}
                @endif
                <div class="col">
            <!-- Input addon -->
                    <div class="card card-info">
                            <div class="card-header">
                                {{-- <h3 class="card-title">Subheading</h3> --}}
                            </div>
                            <div class="card-body">
                                        <div class="form-group w-100">
                                            <input name="name" type="text" value="{!! isset($organization) ? $organization->name : "" !!}" required="required" class="form-control form-control-lg" placeholder="Organization" aria-label="Organization">
                                        </div>
                                        <div class="form-group w-100">
                                            <input name="email" type="email" value="{!! isset($organization) ? $organization->email : "" !!}" required="required" class="form-control form-control-lg" placeholder="abc@example.com" aria-label="Email">
                                        </div>
                            
                        </div> <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-info" name="save" value="{!! isset($organization) ? "Update Organization" : "Create Organiation"!!}" >
                            <input type="reset" class="btn btn-default float-right" name="reset" value="Reset" >
                        </div>
                        
                    </div> <!-- /.card -->   
                </div>
                {{ Form::close() }}
        </div>
    </x-slot>

</x-app>