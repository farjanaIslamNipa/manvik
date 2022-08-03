<x-admin-layout>
    @section('title')
    Employee Salary List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          @include('pages.salary.includes.salary-common-nav')
          <div class="row justify-content-center">
            <div class="col-xl-7 col-md-10">
              <div class="card mt-4">
                <h4 class="text-lg text-center pt-4 pb-2 font-bold">Provide all Information</h4>
                <form action="{{ route('admin.store.salary') }}" method="POST" enctype="multipart/form-data" class="base-form">
                  @csrf
                  <div class="card-body pb-1">
                    <div class="form-group row">
                      <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Select Employee:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="employee_id" class="w-100">
                            <option selected disabled>Select employee name</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                        @error('employee_id') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control" name="position" value="{{ old('position') }}" placeholder="Enter position" />
                          @error('position') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Month:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="month">
                            <option selected disabled>Select Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
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
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Advance (<small>If any</small>):</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="" class="form-control" name="phone" value="{{ old('advance') }}" placeholder="Advance taken if any" />
                        @error('advance') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid Total:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control" name="paid_total" value="{{ old('paid_total') }}" placeholder="Paid Total" />
                        @error('paid_total') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Status:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                       <select name="status">
                        <option selected value="1">Paid</option>
                        <option value="0">Due</option>
                       </select>
                        @error('status') <p class="text-danger mb-0">{{ $message }}</p> @enderror
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
