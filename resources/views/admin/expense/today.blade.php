@include('layouts.adminapp')

    <!-- Content Wrapper. Contains page content -->
    <div class="page-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{--{{ route('admin.dashboard') }}--}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Today Expenses</li>
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
                                <h3 class="card-title">
                                    TODAY EXPENSES LISTS
                                    <small class="text-danger pull-right">Total Expenses : {{ $expenses->sum('amount') }} Taka</small>
                                    <small class="text-primary">{{ date('d F Y') }}</small>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Expense Title</th>
                                        <th>Amount</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Expense Title</th>
                                        <th>Amount</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($expenses as $key => $expense)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $expense->name }}</td>
                                            <td>{{ number_format($expense->amount, 2) }}</td>
                                            <td>{{ $expense->created_at->format('h:i:s A') }}</td>
                                         {{--   <td>
                                                <a href="{{ route('admin.expense.edit', $expense->id) }}" class="btn
													btn-info">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-danger" type="button" onclick="deleteItem({{ $expense->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <form id="delete-form-{{ $expense->id }}" action="{{ route('admin.expense.destroy', $expense->id) }}" method="post"
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
    </div>
