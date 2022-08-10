<x-admin-layout>
  @section('title')
  Pay Advance | Manvik
  @endsection

  <div class="page-wrapper">
      <div class="container-fluid">
        @include('pages.salary.includes.salary-common-nav')
        <div class="row justify-content-center">
          <div class="col-xl-7 col-md-10">
            <div class="card mt-4">
              <h4 class="text-lg text-center pt-4 pb-2 font-bold">Provide Advance Salary</h4>
              <form action="{{ route('admin.store.advance.salary') }}" method="POST" enctype="multipart/form-data" class="base-form">
                @csrf
                <div class="card-body pb-1">
                  <div class="form-group row">
                    <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Select Employee:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="employee_id" class="w-100">
                          <option selected disabled>Select employee name</option>
                          @foreach ($employees as $employee)
                              <option {{ old('employee_id') == $employee->id ? 'selected' : '' }} value="{{ $employee->id }}">{{ $employee->name }}</option>
                          @endforeach
                      </select>
                      @error('employee_id') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="position" class="w-100">
                          <option selected disabled>Select position</option>
                          @foreach ($positions as $position)
                            <option value="{{ $position->id }}" {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->position }}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Month:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="month">
                            <option selected disabled>Select Month</option>
                            <option {{ old('month') == 'january' ? 'selected' : '' }} value="january">January</option>
                            <option {{ old('month') == 'fabruary' ? 'selected' : '' }} value="february">February</option>
                            <option {{ old('month') == 'march' ? 'selected' : '' }} value="march">March</option>
                            <option {{ old('month') == 'april' ? 'selected' : '' }} value="april">April</option>
                            <option {{ old('month') == 'may' ? 'selected' : '' }} value="may">May</option>
                            <option {{ old('month') == 'june' ? 'selected' : '' }} value="june">June</option>
                            <option {{ old('month') == 'july' ? 'selected' : '' }} value="july">July</option>
                            <option {{ old('month') == 'august' ? 'selected' : '' }} value="august">August</option>
                            <option {{ old('month') == 'september' ? 'selected' : '' }} value="september">September</option>
                            <option {{ old('month') == 'october' ? 'selected' : '' }} value="october">October</option>
                            <option {{ old('month') == 'november' ? 'selected' : '' }} value="november">November</option>
                            <option {{ old('month') == 'december' ? 'selected' : '' }} value="december">December</option>
                        </select>
                        @error('month') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Year:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control" value="{{ old('year') }}" id="yearpicker" name="year" placeholder="Year" />
                        @error('year') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Advance Salary:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="" class="form-control" name="advance" value="{{ old('advance') }}" placeholder="Advance salary amount" />
                        @error('advance') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                  </div>
                </div>
                <div class="text-right pe-5 pb-5 pt-2">
                  <button type="submit" class="btn-brand me-2">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  @section('script')
  <script>



  </script>
  @endsection
</x-admin-layout>
