<x-admin-layout>
  @section('title')
      Edit Employee | Manvik
  @endsection

  <div class="page-wrapper">
    <div class="container-fluid">
      @include('employee.inclueds.emplye-common-nav')
      <div class="row justify-content-center">
        <div class="col-xl-7 col-md-10">
          <div class="card mt-4">
            <h4 class="text-lg text-center pt-4 pb-2 font-bold">Update Information</h4>
            <form action="{{ route('admin.update.employee.info', $employee->id) }}" method="POST" enctype="multipart/form-data" class="base-form">
              @csrf
              <div class="card-body pb-1">
                <div class="form-group row">
                  <label for="fname" class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label">Full Name:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" id="fname" name="name" value="{{ isset($employee) ? $employee->name : '' }}" />
                    @error('name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Father's Name:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" value="{{ isset($employee) ? $employee->fathers_name : '' }}" name="fathers_name" />
                    @error('fathers_name') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Phone:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="phone" value="{{ isset($employee) ? $employee->phone : '' }}" />
                    @error('phone') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Address:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="address" value="{{ isset($employee) ? $employee->address : '' }}" placeholder="Enter Address" />
                    @error('address') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end">Gender:</label>
                  <div class="col-md-9 px-5">
                    <div class="d-flex">
                      <div class="form-check">
                        <input @if ($employee->gender == 'male') checked @endif type="radio" class="form-check-input" id="male" name="gender" value="male" />
                        <label class="form-check-label mb-0" for="male">Male</label>
                      </div>
                      <div class="form-check ms-5">
                        <input @if ($employee->gender == 'female') checked @endif  type="radio" class="form-check-input" id="female" name="gender" value="female" />
                        <label class="form-check-label mb-0" for="female">Female</label>
                      </div>
                    </div>
                    @error('gender') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">NID:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="nid" value="{{ isset($employee) ? $employee->nid : '' }}" placeholder="Enter NID number" />
                    @error('nid') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Position:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" name="position" value="{{ isset($employee) ? $employee->position : '' }}" placeholder="Enter position" />
                    @error('position') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Salary:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                      <input type="text" class="form-control" name="salary" value="{{ isset($employee) ? $employee->salary : '' }}" placeholder="Enter salary amount" />
                      @error('salary') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Joining Date:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input type="text" class="form-control" id="datepicker-autoclose" name="joining_date" value="{{ isset($employee) ? $employee->joining_date : '' }}" />
                    @error('joining_date') <p class="text-danger mb-0">{{ $message }}</p> @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label id="imageFileLabel" for="imageInput" class="col-lg-2 col-sm-3 text-end control-label col-form-label">Image:</label>
                  <div class="col-lg-10 col-sm-9 px-5">
                    <input id="imageInput" name="img" type="file" class="form-control file-input" />
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
  {{-- <script>
      function imageConvertToBase64(element){
        let file = element.files[0];

        document.getElementById('imageFileLabel').innerText = file.name;

        let reader = new FileReader();
        reader.onloadend = function () {
            document.getElementById('image').value = reader.result;
        }

        reader.readAsDataURL(file);
      }
  </script> --}}
@endsection
</x-admin-layout>
