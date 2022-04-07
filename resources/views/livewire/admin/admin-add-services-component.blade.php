<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                        <h4 class="header-title mt-0 mb-3">Slider Headers</h4>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slide Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($settings as $setting )
                                    <tr>
                                        <td>{{ $setting->id }}</td>
                                        <td>{{ $setting->name }}</td>
                                        @if ($setting->status == 'active')
                                             <td><span class="badge bg-success">{{ $setting->status }}</span></td>
                                        @else
                                            <td><span class="badge bg-danger">{{ $setting->status }}</span></td>
                                        @endif

                                    <td>
                                        @if ($setting->status == 'active')
                                        <a href="#" onclick="confirm('Ara you sure, You want to deactivate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="deleteVector({{ $setting->status }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-danger"></i></a>
                                        @else
                                        <a href="#" onclick="confirm('Ara you sure, You want to deactivate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="deleteVector({{ $setting->status }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-success"></i></a>
                                        @endif
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
               
            </div><!-- end col -->

        </div>
        <!-- end row -->       
        
    </div> <!-- container-fluid -->
</div>
