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
                            <li class="breadcrumb-item active">{{  date('F') }} Expenses</li>
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
                        <div class="mb-3">
                            <a href="{{ route('admin.expense.month', 'january') }}" class="btn btn-info">January</a>
                            <a href="{{ route('admin.expense.month', 'february') }}" class="btn btn-primary">February</a>
                            <a href="{{ route('admin.expense.month', 'march') }}" class="btn btn-secondary">March</a>
                            <a href="{{ route('admin.expense.month', 'april') }}" class="btn btn-warning">April</a>
                            <a href="{{ route('admin.expense.month', 'may') }}" class="btn btn-info">May</a>
                            <a href="{{ route('admin.expense.month', 'june') }}" class="btn btn-success">June</a>
                            <a href="{{ route('admin.expense.month', 'july') }}" class="btn btn-danger">July</a>
                            <a href="{{ route('admin.expense.month', 'august') }}" class="btn btn-primary">August</a>
                            <a href="{{ route('admin.expense.month', 'september') }}" class="btn btn-info">September</a>
                            <a href="{{ route('admin.expense.month', 'october') }}" class="btn btn-secondary">October</a>
                            <a href="{{ route('admin.expense.month', 'november') }}" class="btn btn-warning">November</a>
                            <a href="{{ route('admin.expense.month', 'december') }}" class="btn btn-danger">December</a>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <strong class="text-danger">{{ strtoupper($month) }}</strong> EXPENSES LISTS
                                    <small class="text-danger pull-right">Total Expenses : {{ $expenses->sum('amount') }} Taka</small>
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
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Expense Title</th>
                                        <th>Amount</th>
                                        <th>Month</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($expenses as $key => $expense)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $expense->name }}</td>
                                            <td>{{ number_format($expense->amount, 2) }}</td>
                                          {{--  <td>{{ $expense->date->toFormattedDateString() }}</td>--}}
                                      {{--      <td>
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
