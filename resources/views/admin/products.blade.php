@extends('admin.layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>

                        <a class="btn btn-primary text-white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">add
                            Product</a>
                    </div>
                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                {{--<th>#</th>--}}
                                <th> Name</th>
                                <th> Description</th>
                                <th> Price</th>
                                <th> Image</th>
                                <th> Stock</th>
                                <th> Category</th>
                                <th> Status</th>

                                <th col="5">Delete</th>
                                <th col="5">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                {{--<td>{{ $product->row }}</td>--}}
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <img src="{{ asset('upload/products/' . $product->image) }}"
                                        alt="{{ $product->name }}" width="90">
                                </td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a href="{{ url('delete_product/' . $product->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>

                                </td>
                                <td>
                                    <a href="{{ ($product->id) }}" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrops">Update</a>

                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('upload_product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-6 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>


                                <div class="col-6 form-group">
                                    <label for="stock">Stock</label>
                                    <input type="number" class="form-control" id="stock" name="stock" required>
                                </div>
                                {{--<div class="col-6 form-group">
                                    <label for="category_id">Category</label>
                                    <input type="text" class="form-control" id="category_id" name="category_id" required>
                                </div>--}}
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        {{--update --}}
        <div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('update_product',$product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-6 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" step="0.01"
                                        value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control"
                                        name="description">{{ $product->description}}</textarea>
                                </div>

                                <div class="col-7 form-group">
                                    <div class="row">
                                        <div class=" form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" class="form-control" name="stock"
                                                value="{{ $product->stock }}">
                                        </div>
                                        <div class=" form-group">
                                            <label for="image">New Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-5  form-group">
                                    <label for="image">Current Image</label><br>
                                    <img src="upload/products/{{ $product->image }}" width="100" alt="">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection