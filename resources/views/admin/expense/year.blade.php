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
                            <li class="breadcrumb-item active">{{  date('Y') }} Expenses</li>
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

                        <div class="mb-3">
                            @foreach($years as $year)
                                <a href="{{ route('admin.expense.yearly', $year->year) }}" class="btn btn-info">{{ ucfirst($year->year) }}</a>
                            @endforeach
                        </div>


                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    {{ strtoupper(date('Y')) }} EXPENSES LISTS
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
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Expense Title</th>
                                        <th>Amount</th>
                                        <th>Month</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($expenses as $key => $expense)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $expense->name }}</td>
                                            <td>{{ number_format($expense->amount, 2) }}</td>
                                   {{--         <td>{{ $expense->date->toFormattedDateString() }}</td>--}}
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
