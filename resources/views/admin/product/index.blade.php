 @include('layouts.adminapp')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{--{{ route('admin.dashboard') }}--}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">PRODUCTS LISTS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center table-responsive-xl">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Code</th>
                                        <th>Garage</th>
                                        <th>Route</th>
                                        <th>Buying Date</th>
                                        <th>Expire Date</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Code</th>
                                        <th>Garage</th>
                                        <th>Route</th>
                                        <th>Buying Date</th>
                                        <th>Expire Date</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img class="img-rounded" style="height:35px; width: 35px;" src="{{ URL::asset("storage/product/".$product->image) }}" alt="{{ $product->name }}">
                                            </td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->supplier->name }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->garage }}</td>
                                            <td>{{ $product->route }}</td>
                                            <td>{{ $product->buying_date->toFormattedDateString() }}</td>
                                            <td>{{ $product->expire_date->toFormattedDateString() }}</td>
                                            <td>{{ number_format($product->buying_price, 2) }}</td>
                                            <td>{{ number_format($product->selling_price, 2) }}</td>
                               {{--             <td>
                                                <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn
													btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteItem({{ $product->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <form id="delete-form-{{ $product->id }}" action="{{ route('admin.product.destroy', $product->id) }}" method="post"
                                                      style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div> <!-- Content Wrapper end -->


