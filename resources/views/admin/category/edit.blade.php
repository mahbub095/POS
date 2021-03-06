@include('layouts.adminapp')

<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Add Customers</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Customers</li>
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
                        <h5 class="card-title">Category Name</h5>
                        {{--     <form class="form-material form-horizontal m-t-30">--}}
                        <form role="form" action="{{ route('admin.category.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-md-12" for="example-text">Category</span>
                                </label>
                                <div class="col-md-12">
                                    <input type="text"  name="name" class="form-control" placeholder="Enter Category name" value="{{ $category->name }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
