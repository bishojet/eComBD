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

        <div class="col-md-6">
            <div class="col-md-6">
                <h3 class="panel-title">Add Category</h3>
            </div>
            <div class="panel-body">
                <form wire:submit.prevent="addCategory">
                    <div class="form-group">
                        <label class="control-label">Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter Category Name"
                            wire:model="category_name">
                        @error('category_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category Slug</label>
                        <input type="text" class="form-control" placeholder="Category Slug"
                            wire:model="category_slug">
                        @error('category_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>
                            Add Category</button>
                    </div>
                </form>
            </div>
        </div>



        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">All Categories <span>New Page</span></h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    {{ $categories->links() }}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>



        <div class="clearfix"></div>

    </div>


</main>
