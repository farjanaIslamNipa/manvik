<x-admin-layout>
    @section('title')
       Edit Product | Manvik
    @endsection

    <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Update Product Details</h4>
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
              <form action="{{ route('admin.product.update', $product->id) }}" method="POST" class="base-form" enctype="multipart/form-data">
                @csrf
                <div class="card-body pb-1">
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Product Name:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control text-capitalize" name="name" id="name" value="{{ $product->name }}" />
                          @error('name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Product Code:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                            <input type="text" class="form-control text-uppercase" name="code" value="{{ $product->code }}" />
                        </div>
                      </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Size:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="size">
                        @if($sizes)
                        @foreach ($sizes as $size)
                          <option class="text-uppercase" {{ $size->size == $product->size ? 'selected' : '' }} value="{{ $size->size }}">{{ $size->size }}</option>
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
                        @if($colors)
                        @foreach ($colors as $color)
                          <option {{ $color->color == $product->color ? 'selected' : '' }} value="{{ $color->color }}">{{ $color->color }}</option>
                        @endforeach
                        @endif
                    </select>
                      @error('color') <p class="text-danger mb-0">{{ $message }}</p>@enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Quantity:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" name="quantity" value="{{ $product->quantity }}" />
                      @error('quantity') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Unit Price:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" name="unit_price" value="{{ $product->unit_price }}" />
                      @error('unit_price') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Status:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <select name="status">
                          <option {{ $product->status == 1 ? 'selected' : '' }} value="1">Active</option>
                          <option {{ $product->status == 0 ? 'selected' : '' }} value="0">Inactive</option>
                      </select>
                      @error('status') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Details:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <textarea class="form-control" rows="3" name="details" value="{{ $product->details }}"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="imageFileLabel" for="imageInput" class="col-lg-2 col-sm-3 text-end control-label col-form-label">Image:</label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <input type="file" name="img" class="form-control file-input" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label id="imageFileLabel" for="imageInput" class="col-lg-2 col-sm-3 text-end control-label col-form-label"></label>
                    <div class="col-lg-10 col-sm-9 px-5">
                      <div>
                        @if($product->img)
                        <img style="height: 150px; width:150px; border: 4px solid gray" src="{{ asset($product->img) }}" alt="">
                        @endif
                      </div>
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
