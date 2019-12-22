<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="nav-small-cap"> MAIN MENU</li>
        <li>
            <a class="waves-effect waves-dark" href="index.html" aria-expanded="false">
                <i class="icon-speedometer"></i>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>

        <li class="nav-small-cap">  PROFESSIONAL</li>

        <li>
            <a class="waves-effect waves-dark" href="{{route('pos')}}" aria-expanded="false">
                <i class="icon-speedometer"></i>
                <span class="hide-menu">Point Of Sale</span>
            </a>
        </li>


        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Employee</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{ route('admin.employee.index') }}">All Employee</a></li>
                <li>	<a href="{{route('admin.employee.create')}}">Add Employee</a></li>

            </ul>
        </li>

        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-docs"></i><span class="hide-menu">Attendance</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="crm-customer-report.html">Customer Reports</a></li>


                <li><a href="crm-sales-report.html">Sales Reports</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Customers</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="crm-customers.html">All Customers</a></li>
                <li><a href="{{route('admin.customer.create')}}">Add Customers</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-handbag"></i><span class="hide-menu">Supplier</span></a>
            <ul aria-expanded="false" class="collapse">

                <li><a href="{{route('admin.supplier.create')}}">Add Supplier</a></li>
                <li><a href="{{route('admin.supplier.index')}}">All Supplier</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Advance Salary</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{route('admin.advanced_salary.create')}}">Add Addvance Salary</a></li>
                <li><a href="{{route('admin.advanced_salary.index')}}">All Addvance Salary</a></li>

            </ul>
        </li>

        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Category</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{ route('admin.category.create') }}">Add Category</a></li>
                <li><a href="{{route('admin.category.index')}}">All Category</a></li>

            </ul>
        </li>

        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Product</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{route('admin.product.create')}}">Add Product</a></li>
                <li><a href="{{route('admin.product.index')}}">ALL Product</a></li>

            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Expence</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="{{ route('admin.expense.create') }}">Add Expense</a></li>
                <li><a href="{{ route('admin.expense.today') }}">Today Expense</a></li>
                <li><a href="{{ route('admin.expense.month') }}">Monthly Expense</a></li>
                <li><a href="{{ route('admin.expense.yearly') }}">Yearly Expense</a></li>
                <li><a href="{{ route('admin.expense.index') }}">All Expense</a></li>
            </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Success Order/Sales</span></a>
            <ul aria-expanded="false" class="collapse">
        <li><a href="{{ route('pending.orders') }}">Pending Orders</a></li>
        <li><a href="{{ route('success.orders') }}">Success Orders / Sales</a></li>
            </ul>
        </li>


        <li class="nav-small-cap"> SUPPORTS</li>
        <li>
      {{--      <a class="waves-effect waves-dark" href="{{ route('logout') }}" aria-expanded="false">--}}
                <a class="waves-effect waves-dark"  aria-expanded="false" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </li>

    </ul>
</nav>
