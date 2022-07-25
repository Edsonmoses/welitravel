<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mt-0 mb-3">Sliders</h4>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Slide Name</th>
                                    <th>Slide Image</th>
                                    <th>Status</th>
                                    <th colspan="4">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider )
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        <td>{{ $slider->title }}</td>
                                        <td><img src="{{ asset('assets/frontend/pic/slider/main') }}/{{ $slider->image }}" width="120"/></td>
                                        @if ($slider->status == 'active')
                                             <td><span class="badge bg-success">{{ $slider->status }}</span></td>
                                        @else
                                            <td><span class="badge bg-danger">{{ $slider->status }}</span></td>
                                        @endif

                                    <td>
                                        @if ($slider->status == 'active')
                                        <a href="#" onclick="confirm('Ara you sure, You want to deactivate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="deactivate({{ $slider->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-danger"></i></a>
                                        @else
                                        <a href="#" onclick="confirm('Ara you sure, You want to activate this slider header') || event.stopImmediatePropagation()" wire:click.prevent="updateslider({{ $slider->id }})" style="margin-left: 10px"><i class="fa fa-power-off fa-1x text-success"></i></a>
                                        @endif
                                        </td>
                                        <td>
                                            <a  href="{{ route('admin.editslider',['slug'=>$slider->slug]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        
                                            <button wire:click="delete({{ $slider->id }})" class="btn btn-danger btn-sm">Delete </button>
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
