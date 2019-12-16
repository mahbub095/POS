@include('layouts.adminapp')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">All Leads</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">All Leads</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Leads</h5>
                        <h6 class="card-subtitle">all projects Leads</h6>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Type</th>
                                    <th>Shop Name</th>
                                    <th>Account Holder</th>
                                    <th>Account Number</th>
                                    <th>Bank Name</th>
                                    <th>Bank Branch</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($suppliers as $key => $supplier)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $supplier->name }}</td>
                                        <td>
                                            <img class="img-rounded" style="height:35px; width: 35px;" src="{{ URL::asset("images/".$supplier->photo) }}" alt="{{ $supplier->name }}">
                                        </td>
                                        <td>{{ $supplier->email }}</td>
                                        <td>0{{ $supplier->phone }}</td>
                                        <td>{{ $supplier->address }}</td>
                                        <td>{{ $supplier->city }}</td>
                                        <td>
                                            @if($supplier->type == 1)
                                                {{ 'Distributor' }}
                                            @elseif($supplier->type == 2)
                                                {{ 'Whole Seller' }}
                                            @elseif($supplier->type == 3)
                                                {{ 'Brochure' }}
                                            @else
                                                {{ 'None' }}
                                            @endif
                                        </td>
                                        <td>{{ $supplier->shop_name }}</td>
                                        <td>{{ $supplier->account_holder }}</td>
                                        <td>{{ $supplier->account_number }}</td>
                                        <td>{{ $supplier->bank_name }}</td>
                                        <td>{{ $supplier->bank_branch }}</td>
                                        <td>
                                            <form action="{{ route('admin.supplier.destroy',$supplier->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('admin.supplier.edit',$supplier->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                </tbody>
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
</div>
