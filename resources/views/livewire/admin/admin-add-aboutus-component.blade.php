<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" wire:submit.prevent="addAbout">
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
                                    <label for="right_title" class="form-label">Title B (<small>This is the continuation of the title but not blod </small>)</label>
                                    <input class="form-control" id="right_title" type="text" name="right_title" placeholder="Title B" wire:model="right_title">
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">video</label>
                                    <input class="form-control" id="video" type="text" name="video" placeholder="video" wire:model="video">
                                </div>
                                <div class="mb-3">
                                    <label for="sign" class="form-label">Name of founder</label>
                                    <input class="form-control" id="sign" type="text" name="sign" placeholder="Founders name" wire:model="sign">
                                </div>

                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="bgImage" class="form-label">Background Image</label>
                                    <input type="file" id="bgImage" class="form-control" wire:model="bgImage">
                                </div>
                                <div class="mb-3">
                                    <label for="left_title" class="form-label">Title</label>
                                    <input class="form-control" id="left_title" type="text" name="left_title" placeholder="Title A (blod) " wire:model="left_title">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" id="image" type="file" name="image" placeholder="" wire:model="image">
                                </div>
                                <div class="mb-3">
                                    <label for="sliderType" class="form-label">Select Category</label>
                                    <select class="form-select" id="sliderType" wire:model="category_id">
                                        <option value="DEFAULT">Slider category</option>
                                        <option value="1">Slider</option>
                                        <option value="2">Video slider</option>
                                    </select>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="body" class="form-label">Description</label>
                                    <textarea class="form-control" id="body" rows="5" wire:model="body"></textarea>
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
