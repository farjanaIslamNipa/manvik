<div class="row">
    <div class="col-6">
      @if (request()->routeIs('admin.all.employee.show'))
        <h4 class="page-title text-xl font-bold">All Employee list</h4>
      @endif
      @if (request()->routeIs('admin.add.employee'))
        <h4 class="page-title text-xl font-bold">Add New Employee</h4>
      @endif
      @if (request()->routeIs('admin.update.employee'))
        <h4 class="page-title text-xl font-bold">Update Employee</h4>
      @endif
      @if (request()->routeIs('admin.edit.employee'))
        <h4 class="page-title text-xl font-bold">Edit Employee</h4>
      @endif

    </div>
    <div class="col-6">
      <div class="text-end">
          @if (request()->routeIs('admin.update.employee') || request()->routeIs('admin.add.employee') || request()->routeIs('admin.edit.employee'))
            <a class="btn btn-success text-white me-2" href="{{ route('admin.all.employee.show') }}">View All<span></a>
          @endif
          @if (request()->routeIs('admin.all.employee.show') || request()->routeIs('admin.update.employee') || request()->routeIs('admin.edit.employee'))
            <a class="btn btn-primary me-2" href="{{ route('admin.add.employee') }}">Add New</span></a>
          @endif
          @if (request()->routeIs('admin.all.employee.show') || request()->routeIs('admin.add.employee'))
          <a class="btn btn-danger" href="{{ route('admin.update.employee') }}">Edit / Delete</a>
          @endif
      </div>
    </div>
</div>
