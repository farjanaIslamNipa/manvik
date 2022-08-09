<div class="row">
    <div class="col-6">
      @if (request()->routeIs('admin.all.salary'))
        <h4 class="page-title text-xl font-bold">Employee Salary list</h4>
      @endif
      @if (request()->routeIs('admin.add.salary'))
        <h4 class="page-title text-xl font-bold">Add Salary</h4>
      @endif
      @if (request()->routeIs('admin.advance.salary.all'))
        <h4 class="page-title text-xl font-bold text-capitalize">Advance salary list</h4>
      @endif
      @if (request()->routeIs('admin.advance.salary.add'))
        <h4 class="page-title text-xl font-bold text-capitalize">Pay Advance salary</h4>
      @endif
      {{-- @if (request()->routeIs('admin.edit.employee'))
        <h4 class="page-title text-xl font-bold">Edit Employee</h4>
      @endif --}}

    </div>
    <div class="col-6">
      <div class="text-end">
          @if (request()->routeIs('admin.all.salary') || request()->routeIs('admin.advance.salary.show'))
            <a class="btn btn-success text-white me-2" href="{{ route('admin.add.salary') }}">Add Salary<span></a>
          @endif
          @if (request()->routeIs('admin.all.salary') || request()->routeIs('admin.add.salary'))
            <a class="btn bg-dark-red text-white me-2" href="{{ route('admin.advance.salary.all') }}">Advance Salary<span></a>
          @endif
          @if (request()->routeIs('admin.add.salary') || request()->routeIs('admin.advance.salary.add') || request()->routeIs('admin.advance.salary.all'))
            <a class="btn bg-dark-indigo text-white me-2" href="{{ route('admin.all.salary') }}">All Salary List</span></a>
          @endif
          @if (request()->routeIs('admin.advance.salary.all'))
          <a class="btn btn-primary" href="{{ route('admin.advance.salary.add') }}">Pay Advance</a>
          @endif
          @if (request()->routeIs('admin.advance.salary.add'))
          <a class="btn bg-sky-blue text-white" href="{{ route('admin.advance.salary.all') }}">Advance Salary List</a>
          @endif
      </div>
    </div>
</div>
