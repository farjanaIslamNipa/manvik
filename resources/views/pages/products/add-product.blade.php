<x-admin-layout>
    @section('title')
       Add Product | Manvik
    @endsection

    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Add Product</h4>
          </div>
          <div class="col-6">
            <div class="text-end">
              <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.products.show') }}">View All</span></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-7 col-md-10">
            <div class="card mt-4 pt-4">
              <h4 class="text-lg text-center pb-2 font-bold">Product Information</h4>
              <form action="{{ route('admin.product.store') }}" method="POST" class="base-form" enctype="multipart/form-data">
                @csrf
                <div class="card-body pb-1">
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Product Name:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control text-capitalize" name="name" id="name" value="{{ old('name') }}" placeholder="Enter product name" />
                          @error('name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Product Code:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control text-uppercase" name="prefix" value="{{ old('prefix') }}" placeholder="Prefix" />
                                <input type="text" class="form-control mx-2" name="code" value="{{ old('code') }}" placeholder="Enter product code" />
                                <input type="text" class="form-control text-uppercase" name="suffix" value="{{ old('suffix') }}" placeholder="Suffix" />
                            </div>
                        </div>
                      </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Size:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="size">
                        <option selected disabled>Select Size</option>
                        @if($sizes)
                        @foreach ($sizes as $size)
                          <option class="text-uppercase" value="{{ $size->size }}">{{ $size->size }}</option>
                        @endforeach
                        @endif
                    </select>
                      @error('size') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Color:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="color" class="text-capitalize">
                        <option selected disabled>Select Color</option>
                        @if($colors)
                        @foreach ($colors as $color)
                          <option value="{{ $color->color }}">{{ $color->color }}</option>
                        @endforeach
                        @endif
                    </select>
                      @error('color') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Quantity:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="Enter quantity" />
                      @error('quantity') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Unit Price:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" name="unit_price" value="{{ old('unit_price') }}" placeholder="Enter unit price" />
                      @error('unit_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">status:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="status">
                          <option selected disabled>Select status</option>
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                      </select>
                      @error('status') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Details:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <textarea class="form-control" rows="3" name="details" value="{{ old('details') }}" placeholder="Enter Details (if any)"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="imageFileLabel" for="imageInput" class="col-lg-2 col-sm-3 text-end control-label col-form-label">Image:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="file" name="img" class="form-control file-input" />
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
  </x-admin-layout>
