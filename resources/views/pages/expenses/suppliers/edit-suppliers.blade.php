<x-admin-layout>
  @section('title')
  Edit Supplier | Manvik
  @endsection

  <div class="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <h4 class="page-title text-xl font-bold">Update Supplier</h4>
        </div>
        <div class="col-6">
          <div class="text-end">
            <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.suppliers.show') }}">View All</span></a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-7 col-md-10">
          <div class="card mt-4 pt-4">
            <h4 class="text-lg text-center pb-2 font-bold">Update Supplier Information</h4>
            <form action="{{ route('admin.suppliers.update', $supplier->id) }}" method="POST" class="base-form">
              @csrf
              <div class="card-body pb-1">
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Name:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="name" value="{{ $supplier->name }}" placeholder="Enter name" />
                    @error('name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Email:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="email" value="{{ $supplier->email }}" placeholder="Enter email address" />
                    @error('email') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Phone:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}" placeholder="Enter phone number" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Product Name:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="prod_name" value="{{ $supplier->prod_name }}" placeholder="Enter name" />
                    @error('prod_name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Quantity:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input onkeyup="getValue()" type="text" class="form-control" name="quantity" id="supplier-product-edit-quantity" value="{{ $supplier->quantity }}" />
                    @error('quantity') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Unit Price:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input onkeyup="getValue()" type="text" class="form-control" name="unit_price" id="supplier-product-edit-unit-price" value="{{ $supplier->unit_price }}" />
                    @error('unit_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Total Price:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input onkeyup="getValue()" type="text" class="form-control" name="total_price" id="supplier-product-edit-total-price" value="{{ $supplier->total_price }}" />
                    @error('total_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Paid:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input onkeyup="getValue()" type="text" class="form-control" name="paid" id="laundsupplier-product-paid-amount" value="{{ $supplier->paid }}" />
                    @error('paid') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Due:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                      <input onkeyup="getValue()" type="text" class="form-control" name="due" id="supplier-product-edit-due-amount" value="{{ $supplier->due }}" />
                      @error('due') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Date:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" value="{{ $supplier->date }}" id="datepicker-autoclose" name="date" placeholder="mm/dd/yyyy" />
                    @error('date') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Note:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <textarea class="form-control" rows="3" name="note" value="{{ $supplier->note }}" placeholder="Enter Note (if any)">{{ $supplier->note }}</textarea>
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
            let itemQuantity = document.getElementById('supplier-product-edit-quantity').value;
            let unitPrice = document.getElementById('supplier-product-edit-unit-price').value;
            let totalPrice = document.getElementById('supplier-product-edit-total-price');
            let paidAmount = document.getElementById('supplier-product-edit-paid-amount');
            let dueAmount = document.getElementById('supplier-product-edit-due-amount');

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
