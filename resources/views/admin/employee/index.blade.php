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
                                            {{--    <a href="{{ route('admin.employee.show', $employee->id) }}" class="btn btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                <form action="{{ route('admin.employee.destroy',$employee->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('admin.supplier.edit',$employee->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                    </tbody>
                                        </tr>--}}
                                                <a href="{{ route('admin.employee.show', $employee->id) }}" class="btn btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('admin.employee.edit', $employee->id) }}" class="btn
													btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteItem({{ $employee->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <form id="delete-form-{{ $employee->id }}" action="{{ route('admin.employee.destroy', $employee->id) }}" method="post"
                                                      style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
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

 @push('js')

     <!-- DataTables -->
     <script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.js') }}"></script>
     <script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
     <!-- SlimScroll -->
     <script src="{{ asset('assets/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
     <!-- FastClick -->
     <script src="{{ asset('assets/backend/plugins/fastclick/fastclick.js') }}"></script>

     <!-- Sweet Alert Js -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.1/dist/sweetalert2.all.min.js"></script>


     <script>
         $(function () {
             $("#example1").DataTable();
             $('#example2').DataTable({
                 "paging": true,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": true,
                 "autoWidth": false
             });
         });
     </script>


     <script type="text/javascript">
         function deleteItem(id) {
             const swalWithBootstrapButtons = swal.mixin({
                 confirmButtonClass: 'btn btn-success',
                 cancelButtonClass: 'btn btn-danger',
                 buttonsStyling: false,
             })

             swalWithBootstrapButtons({
                 title: 'Are you sure?',
                 text: "You won't be able to revert this!",
                 type: 'warning',
                 showCancelButton: true,
                 confirmButtonText: 'Yes, delete it!',
                 cancelButtonText: 'No, cancel!',
                 reverseButtons: true
             }).then((result) => {
                 if (result.value) {
                     event.preventDefault();
                     document.getElementById('delete-form-'+id).submit();
                 } else if (
                     // Read more about handling dismissals
                     result.dismiss === swal.DismissReason.cancel
                 ) {
                     swalWithBootstrapButtons(
                         'Cancelled',
                         'Your data is safe :)',
                         'error'
                     )
                 }
             })
         }
     </script>



 @endpush
