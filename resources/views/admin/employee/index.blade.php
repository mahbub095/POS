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
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Salary</th>
                                        <th>Vacation</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($employees as $key => $employee)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>
                                                <img class="img-rounded" style="height:35px; width: 35px;" src="{{ URL::asset("images/".$employee->photo) }}" alt="{{ $employee->name }}">
                                            </td>
                                            <td>{{ $employee->email }}</td>
                                            <td>0{{ $employee->phone }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>{{ $employee->city }}</td>
                                            <td>{{ $employee->salary }}</td>
                                            <td>{{ $employee->vacation }}</td>
                                            <td>
                                                <form action="{{ route('admin.employee.destroy',$employee->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{--{{ route('admin.supplier.edit',$employee->id) }}--}}">Edit</a>
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
