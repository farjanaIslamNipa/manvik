<div class="row">
    <div class="col-6">
      @if (request()->routeIs('admin.all.salary'))
        <h4 class="page-title text-xl font-bold">Employee Salary list</h4>
      @endif
      @if (request()->routeIs('admin.add.salary'))
        <h4 class="page-title text-xl font-bold">Add Salary</h4>
      @endif
      {{-- @if (request()->routeIs('admin.update.employee'))
        <h4 class="page-title text-xl font-bold">Update Employee</h4>
      @endif
      @if (request()->routeIs('admin.edit.employee'))
        <h4 class="page-title text-xl font-bold">Edit Employee</h4>
      @endif --}}

    </div>
    <div class="col-6">
      <div class="text-end">
          @if (request()->routeIs('admin.all.salary') || request()->routeIs('admin.advance.salary'))
            <a class="btn btn-success text-white me-2" href="{{ route('admin.add.salary') }}">Add Salary<span></a>
          @endif
          @if (request()->routeIs('admin.all.salary') || request()->routeIs('admin.add.salary'))
            <a class="btn btn-warning text-white me-2" href="{{ route('admin.advance.salary') }}">Advance Salary<span></a>
          @endif
          @if (request()->routeIs('admin.add.salary') || request()->routeIs('admin.advance.salary'))
            <a class="btn btn-primary me-2" href="{{ route('admin.all.salary') }}">View All</span></a>
          @endif
          {{-- @if (request()->routeIs('admin.all.employee.show') || request()->routeIs('admin.add.employee'))
          <a class="btn btn-danger" href="{{ route('admin.update.employee') }}">Edit / Delete</a>
          @endif --}}
      </div>
    </div>
</div>
