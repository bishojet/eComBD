<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Category Page</h1>
            <p>Category Page Content Here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Category</h4>
                                </div>
                                <div class="-card-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form wire:submit.prevent="storeCategory">
                                        <div class="form-group mx-3 pt-2">
                                            <label class="control-label">Category Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Category Name"
                                                wire:model="category_name" wire:keyup="genarateslug">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group  mx-3 pt-2">
                                            <label class="control-label">Category Slug</label>
                                            <input type="text" class="form-control" placeholder="Category Slug"
                                                wire:model="slug">
                                            @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="tile-footer  mx-3 pt-2 mb-3">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>
                                                Add Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.categories') }}" class="btn btn-primary">All Categories</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>




        <div class="clearfix"></div>

    </div>


</main>
