<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mt-0 mb-3">Slider Headers</h4>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aboutus as $about )
                                    <tr>
                                        <td>{{ $about->id }}</td>
                                        <td>{{ $about->left_title }} {{ $about->right_title }}</td>
                                        <td>{{ $about->sign }}</td>
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
