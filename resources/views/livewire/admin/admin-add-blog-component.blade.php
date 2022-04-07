<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" wire:submit.prevent="addBlog">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bgCover" class="form-label">Breadcrumbs Image</label>
                                    <input type="file" id="bgCover" class="form-control" wire:model="bgCover">
                                </div>
                                <div class="mb-3">
                                    <label for="top_title" class="form-label">Top Title</label>
                                    <input class="form-control" id="top_title" type="text" name="top_title" placeholder="Top title" wire:model="top_title">
                                </div>
                                <div class="mb-3">
                                    <label for="blog_pic2" class="form-label">Image 2 </label>
                                    <input class="form-control" id="blog_pic2" type="text" name="blog_pic2" placeholder="Image two " wire:model="blog_pic2">
                                </div>

                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bgParallax" class="form-label">Background Image</label>
                                    <input type="file" id="bgParallax" class="form-control" wire:model="bgParallax">
                                </div>
                                <div class="mb-3">
                                    <label for="left_title" class="form-label">Title</label>
                                    <input class="form-control" id="left_title" type="text" name="left_title" placeholder="Title A (blod) " wire:model="left_title">
                                </div>
                                <div class="mb-3">
                                    <label for="blog_pic" class="form-label">Image</label>
                                    <input class="form-control" id="blog_pic" type="file" name="blog_pic" placeholder="" wire:model="blog_pic">
                                </div>
                                <div class="mb-3">
                                    <label for="blog_title" class="form-label">Blog Title</label>
                                    <input class="form-control" id="blog_title" type="text" name="blog_title" placeholder="Blog title" wire:model="blog_title">
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="body" class="form-label">Description</label>
                                    <textarea class="form-control" id="body" rows="5" wire:model="body"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="blog_text" class="form-label">Blog Description</label>
                                    <textarea class="form-control" id="blog_text" rows="5" wire:model="blog_text"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- end row-->
                      </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
