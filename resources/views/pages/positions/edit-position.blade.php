<x-admin-layout>
    @section('title')
    Update Position | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-7 col-md-10">
              <div class="card mt-4">
                <h4 class="text-lg text-center pt-4 pb-2 font-bold">Update Position</h4>
                <form action="{{ route('admin.position.update', $position->id) }}" method="POST" class="base-form">
                  @csrf
                  <div class="card-body pb-1">
                    <div class="form-group row">
                        <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                        <div class="col-lg-10 col-sm-9 px-5">
                          <input type="text" class="form-control" name="position" value="{{ $position->position }}" />
                          @error('position') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                        </div>
                      </div>
                    <div class="form-group row">
                      <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Status:</label>
                      <div class="col-lg-10 col-sm-9 px-5">
                        <select name="status">
                            <option {{ $position->status == '1' ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $position->status == '0' ? 'selected' : '' }} value="0">Inactive</option>
                        </select>
                        @error('status') <p class="text-danger mb-0">{{ $message }}</p> @enderror
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
