<x-admin-layout>
  @section('title')
      Edit Salary | Manvik
  @endsection
  <div class="page-wrapper">
    <div class="container-fluid">
     @include('employee.inclueds.emplye-common-nav')
      <div class="row justify-content-center">
        <div class="col-xl-7 col-md-10">
          <div class="card mt-4">
            <h4 class="text-lg text-center pt-4 pb-2 font-bold">Update Salary Information</h4>
            <form action="{{ route('admin.update.salary', $salary->id) }}" method="POST" class="base-form">
              @csrf
              <div class="card-body pb-1">
                <div class="form-group row">
                  <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Name:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" readonly id="fname" value="{{ $salary->employee->name }}" />
                    <input type="hidden" class="form-control" readonly id="fname" name="employee_id" value="{{ $salary->employee_id }}" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" readonly class="form-control" name="position" value="{{ $salary->employee->position }}" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Month:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" readonly class="form-control" name="month" value="{{ $salary->month }}" placeholder="Enter NID number" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Year:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" readonly class="form-control" name="year" value="{{ $salary->year }}" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Advance:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" readonly class="form-control" name="advance" value="{{ $salary->advance }}" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" readonly class="form-control" value="{{ $salary->paid }}" name="paid" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid Total:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" value="{{ $salary->paid_total }}" name="paid_total" />
                    @error('paid_total') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
              <div class="text-right pe-5 pb-5 pt-2">
                <button type="submit" class="btn-brand me-2">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
