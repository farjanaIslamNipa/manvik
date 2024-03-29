<x-admin-layout>
    @section('title')
        Fabrics | Manvik
    @endsection

    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Update Fabrics Expenditure</h4>
          </div>
          <div class="col-6">
            <div class="text-end">
              <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.fabrics.expenditure.show') }}">View All</span></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-7 col-md-10">
            <div class="card mt-4 pt-4">
              <h4 class="text-lg text-center pb-2 font-bold">Update Fabrics Information</h4>
              <form action="{{ route('admin.fabrics.expenditure.update', $fabric->id) }}"  method="POST" class="base-form">
                @csrf
                <div class="card-body pb-1">
                  <div class="form-group row">
                    <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Shop Details:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <textarea class="form-control text-capitalize" rows="2" id="fname" name="shop_details" value="{{ $fabric->shop_details }}" placeholder="Enter shop details">{{ $fabric->shop_details }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Fabrics Name:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="fabrics_name">
                        <option selected disabled>Select Fabric</option>
                        @foreach ($fabricTypes as $fabricType)
                          <option value="{{ $fabricType->fabrics }}" {{ ($fabricType->fabrics == $fabric->fabrics_name) ? 'selected' : '' }}>{{ $fabricType->fabrics }}</option>
                        @endforeach
                    </select>
                      @error('fabrics_name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Quantity:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="quantity" id="quantity" value="{{ $fabric->quantity }}" />
                      @error('quantity') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Unit Price:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="unit_price" id="unit-price" value="{{ $fabric->unit_price }}" />
                      @error('unit_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Total Price:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="total_price" id="total-price" value="{{ $fabric->total_price }}" />
                      @error('total_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="paid" id="paid-amount" value="{{ $fabric->paid }}" />
                      @error('paid') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Due:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                        <input onkeyup="getValue()" type="text" class="form-control" name="due" id="due-amount" value="{{ $fabric->due }}" />
                        @error('due') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Date:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" value="{{ $fabric->date }}" id="datepicker-autoclose" name="date" placeholder="mm/dd/yyyy" />
                      @error('date') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Note:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <textarea class="form-control" rows="3" name="note" value="{{ $fabric->note }}" placeholder="Enter Note (if any)">{{ $fabric->note }}</textarea>
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
    @section('scripts')
      <script>
          const getValue = () => {
              let itemQuantity = document.getElementById('quantity').value;
              let unitPrice = document.getElementById('unit-price').value;
              let totalPrice = document.getElementById('total-price');
              let paidAmount = document.getElementById('paid-amount');
              let dueAmount = document.getElementById('due-amount');

              if(itemQuantity && unitPrice){
                  totalPrice.value = unitPrice * itemQuantity
              }
              if(paidAmount){
                  dueAmount.value = totalPrice.value - paidAmount.value
              }
          }
      </script>
    @endsection
  </x-admin-layout>
