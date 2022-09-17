<x-admin-layout>
    @section('title')
    Add Color | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-md-10">
              <div class="card mt-4">
                <h4 class="text-lg text-center pt-4 pb-2 font-bold">Create Color</h4>
                <form action="{{ route('admin.color.store') }}" method="POST" class="base-form">
                  @csrf
                  <div class="card-body pb-1">
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Color:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control text-capitalize" name="color" value="{{ old('color') }}" placeholder="Enter color name" />
                          @error('color') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Color Code:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control text-capitalize" name="color_code" value="{{ old('color_code') }}" placeholder="Enter color code" />
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Status:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="status">
                            <option selected disabled>Select status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                      </div>
                    </div>
                  </div>
                  <div class="text-right pe-5 pb-5 pt-2">
                    <button type="submit" class="btn-brand me-2">Create</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </x-admin-layout>
