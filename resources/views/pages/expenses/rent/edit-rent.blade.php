<x-admin-layout>
    @section('title')
        Edit Rent | Manvik
    @endsection

    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Update Rent Details</h4>
          </div>
          <div class="col-6">
            <div class="text-end">
              <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.rents.show') }}">View All</span></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-7 col-md-10">
            <div class="card mt-4 pt-4">
              <h4 class="text-lg text-center pb-2 font-bold">Update Rent Information</h4>
              <form action="{{ route('admin.rents.update', $rent->id) }}" method="POST" class="base-form">
                @csrf
                <div class="card-body pb-1">
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Rent Type:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control text-capitalize" name="rent_type" value="{{ $rent->rent_type }}" placeholder="Enter rent type name" />
                      @error('rent_type') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Month:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="month">
                        <option {{ $rent->month == 'january' ? 'selected' : '' }} value="january">January</option>
                        <option {{ $rent->month == 'fabruary' ? 'selected' : '' }} value="february">February</option>
                        <option {{ $rent->month == 'march' ? 'selected' : '' }} value="march">March</option>
                        <option {{ $rent->month == 'april' ? 'selected' : '' }} value="april">April</option>
                        <option {{ $rent->month == 'may' ? 'selected' : '' }} value="may">May</option>
                        <option {{ $rent->month == 'june' ? 'selected' : '' }} value="june">June</option>
                        <option {{ $rent->month == 'july' ? 'selected' : '' }} value="july">July</option>
                        <option {{ $rent->month == 'august' ? 'selected' : '' }} value="august">August</option>
                        <option {{ $rent->month == 'september' ? 'selected' : '' }} value="september">September</option>
                        <option {{ $rent->month == 'october' ? 'selected' : '' }} value="october">October</option>
                        <option {{ $rent->month == 'november' ? 'selected' : '' }} value="november">November</option>
                        <option {{ $rent->month == 'december' ? 'selected' : '' }} value="december">December</option>
                      </select>
                      @error('month') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Year:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <input type="text" class="form-control" value="{{ $rent->year }}" id="yearpicker" name="year" />
                        @error('year') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Rent Amount:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" id="rent-edit-amount" name="rent_amount" value="{{ $rent->rent_amount }}" placeholder="Enter rent amount" />
                      @error('rent_amount') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="paid" id="rent-paid-edit-amount" value="{{ $rent->paid }}" placeholder="Enter paid amount" />
                      @error('paid') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Due:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                        <input onkeyup="getValue()" type="text" class="form-control" name="due" id="rent-due-edit-amount" value="{{ $rent->due }}" placeholder="Enter due amount" />
                        @error('due') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Date:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" value="{{ $rent->date }}" id="datepicker-autoclose" name="date" placeholder="yyyy" />
                      @error('date') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Note:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <textarea class="form-control" rows="3" name="note" value="{{ $rent->note }}">{{ $rent->note }}</textarea>
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
    @section('scripts')
      <script>
          const getValue = () => {
              let rentAmount = document.getElementById('rent-edit-amount');
              let paidAmount = document.getElementById('rent-paid-edit-amount');
              let dueAmount = document.getElementById('rent-due-edit-amount');
              if(paidAmount){
                  dueAmount.value = rentAmount.value - paidAmount.value
              }
          }
      </script>
    @endsection
  </x-admin-layout>
