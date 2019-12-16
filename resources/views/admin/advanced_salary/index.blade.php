@include('layouts.adminapp')

<!-- Content Wrapper. Contains page content -->
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
                                    <th>Employee Name</th>
                                    <th>Photo</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Salary</th>
                                    <th>Advanced Salary</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Serial</th>
                                    <th>Employee Name</th>
                                    <th>Photo</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Salary</th>
                                    <th>Advanced Salary</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($advanced_salaries as $key => $salary)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $salary->employee->name }}</td>
                                        <td>
                                            <img width="50" height="50" src="{{ URL::asset('images/'. $salary->employee->photo) }}" alt="{{ $salary->employee->name }}">
                                        </td>
                                        <td>{{ ucfirst($salary->month) }}</td>
                                        <td>{{ $salary->year }}</td>
                                        <td>{{ $salary->employee->salary }}</td>
                                        <td>{{ $salary->advanced_salary }}</td>
                                   {{--     <td>
                                            <a href="{{ route('admin.advanced_salary.show', $salary->id) }}" class="btn btn-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('admin.advanced_salary.edit', $salary->id) }}" class="btn
													btn-info">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <button class="btn btn-danger" type="button" onclick="deleteItem({{ $salary->id }})">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            <form id="delete-form-{{ $salary->id }}" action="{{ route('admin.advanced_salary.destroy', $salary->id) }}" method="post"
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
</div>
