<x-admin-layout>
  @section('title')
  Update Advance Salary | Manvik
  @endsection
  <div class="page-wrapper">
      <div class="container-fluid">
        @include('pages.salary.includes.salary-common-nav')
        <div class="row justify-content-center">
          <div class="col-xl-7 col-md-10">
            <div class="card mt-4">
              <h4 class="text-lg text-center pt-4 pb-2 font-bold">Update Advance Salary</h4>
              <form action="{{ route('admin.advance.salary.update', $advanceSalary->id) }}" method="POST" class="base-form">
                @csrf
                <div class="card-body pb-1">
                  <div class="form-group row">
                    <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Name:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control text-capitalize" readonly value="{{ $advanceSalary->employee->name }}" name="employee_id" />
                      @error('employee_id') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control text-capitalize" readonly value="{{ $advanceSalary->employee->position }}" name="position" />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Month:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select class="text-capitalize" name="month">
                            <option {{ $advanceSalary->month == 'january' ? 'selected' : '' }} value="january">January</option>
                            <option {{ $advanceSalary->month == 'fabruary' ? 'selected' : '' }} value="february">February</option>
                            <option {{ $advanceSalary->month == 'march' ? 'selected' : '' }} value="march">March</option>
                            <option {{ $advanceSalary->month == 'april' ? 'selected' : '' }} value="april">April</option>
                            <option {{ $advanceSalary->month == 'may' ? 'selected' : '' }} value="may">May</option>
                            <option {{ $advanceSalary->month == 'june' ? 'selected' : '' }} value="june">June</option>
                            <option {{ $advanceSalary->month == 'july' ? 'selected' : '' }} value="july">July</option>
                            <option {{ $advanceSalary->month == 'august' ? 'selected' : '' }} value="august">August</option>
                            <option {{ $advanceSalary->month == 'september' ? 'selected' : '' }} value="september">September</option>
                            <option {{ $advanceSalary->month == 'october' ? 'selected' : '' }} value="october">October</option>
                            <option {{ $advanceSalary->month == 'november' ? 'selected' : '' }} value="november">November</option>
                            <option {{ $advanceSalary->month == 'december' ? 'selected' : '' }} value="december">December</option>
                        </select>
                        @error('month') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Year:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control" value="{{  $advanceSalary->year }}" id="yearpicker" name="year" />
                        @error('year') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Advance Salary:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control" name="advance" value="{{  $advanceSalary->advance }}" placeholder="Advance salary amount" />
                        @error('advance') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
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
