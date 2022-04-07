<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="sub-header">
                            @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                        </p>
                        <form class="form-horizontal" wire:submit.prevent="addSliders">
                            {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="image" class="form-label">Slider Image</label>
                                    <input type="file" id="image" class="form-control" wire:model="image">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Slider subtitle</label>
                                    <input class="form-control" id="subtitle" type="text" name="subtitle" placeholder="subtitle" wire:model="subtitle">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Hotel price</label>
                                    <input class="form-control" id="price" type="text" name="price" placeholder="hotel price" wire:model="price">
                                </div>
                                <div class="mb-3">
                                    <label for="infoImage" class="form-label">Info Image</label>
                                    <input type="file" id="infoImage" class="form-control" wire:model="infoImage">
                                </div>
                                <div class="mb-3">
                                    <label for="infoprice" class="form-label">Hotel info price</label>
                                    <input class="form-control" id="infoprice" type="text" name="infoprice" placeholder="hotel info price" wire:model="infoprice">
                                </div>
                                <div class="mb-3">
                                    <label for="tempInfo" class="form-label">Hotel local temperature</label>
                                    <input class="form-control" id="tempInfo" type="text" name="tempInfo" placeholder="hotel local temperature" wire:model="tempInfo">
                                </div>
                                <div class="mb-3">
                                    <label for="maintitle" class="form-label">Main title</label>
                                    <input class="form-control" id="maintitle" type="text" name="maintitle" placeholder="main title" wire:model="maintitle">
                                </div>
                                <div class="mb-3">
                                    <label for="mainprice" class="form-label">Main price</label>
                                    <input class="form-control" id="mainprice" type="text" name="mainprice" placeholder="main price" wire:model="mainprice">
                                </div>
                                <div class="mb-3">
                                    <label for="mainpUrl" class="form-label">More details url</label>
                                    <input class="form-control" id="mainpUrl" type="text" name="mainpUrl" placeholder="more details" wire:model="mainpUrl">
                                </div>

                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Slider Ttle</label>
                                    <input type="text" id="title" class="form-control" wire:model="title">
                                </div>
                                <div class="mb-3">
                                    <label for="Starting" class="form-label">Hotel starting title</label>
                                    <input type="text" id="Starting" class="form-control" placeholder="starting from" wire:model="Starting">
                                </div>
                                <div class="mb-3">
                                    <label for="per" class="form-label">Priceing as</label>
                                    <input type="text" id="per" class="form-control" placeholder="per night/per day or full board" wire:model="per">
                                </div>
                                <div class="mb-3">
                                    <label for="infoImage2" class="form-label">info Image@2x</label>
                                    <input type="file" id="infoImage2" class="form-control" wire:model="infoImage2">
                                </div>
                                <div class="mb-3">
                                    <label for="infotemp" class="form-label">Hotel area temperature</label>
                                    <input class="form-control" id="infotemp" type="text" name="infotemp" placeholder="Temperature 36° " wire:model="infotemp">
                                </div>
                                <div class="mb-3">
                                    <label for="infoText" class="form-label">Hotel info</label>
                                    <input class="form-control" id="infoText" type="text" name="infoText" placeholder="Hotel info" wire:model="infoText">
                                </div>
                                <div class="mb-3">
                                    <label for="spantitle" class="form-label">Main subtitle</label>
                                    <input class="form-control" id="spantitle" type="text" name="spantitle" placeholder="Main subtitle" wire:model="spantitle">
                                </div>
                                <div class="mb-3">
                                    <label for="mainper" class="form-label">Main Priceing as</label>
                                    <input class="form-control" id="mainper" type="text" name="mainper" placeholder="per night/per day or full board" wire:model="mainper">
                                </div>
                                <div class="mb-3">
                                    <label for="sliderType" class="form-label">Select Slider Header</label>
                                    <select class="form-select" id="sliderType" wire:model="sliderType">
                                        <option value="DEFAULT">Slider with search</option>
                                        <option value="SLIDER">Slider</option>
                                        <option value="VIDEO">Video slider</option>
                                    </select>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-lg-12">
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
