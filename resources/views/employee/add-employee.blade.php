<x-admin-layout>
    @section('title')
    Add Employee | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="card mt-4">
                    <h4 class="text-lg text-center pt-5 pb-3 font-bold">Employee Information</h4>
                    <form action="{{ route('admin.store.employee') }}" method="POST" enctype="multipart/form-data" class="base-form">
                      @csrf
                      <div class="card-body pb-1">
                        <div class="form-group row">
                          <label
                            for="fname"
                            class="col-lg-2 col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Full Name:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="fname"
                              name="name"
                              placeholder="Enter"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Father's Name:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="fathers_name"
                              placeholder="Enter Father's name"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Phone:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="phone"
                              placeholder="Enter phone number"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Address:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="address"
                              placeholder="Enter Address"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-2 col-sm-3 text-end">Gender:</label>
                          <div class="col-md-9 px-5">
                              <div class="d-flex">
                                  <div class="form-check">
                                      <input
                                        type="radio"
                                        class="form-check-input"
                                        id="male"
                                        name="gender"
                                        value="male"
                                      />
                                      <label
                                        class="form-check-label mb-0"
                                        for="male"
                                        >Male</label
                                      >
                                    </div>
                                    <div class="form-check ms-5">
                                      <input
                                        type="radio"
                                        class="form-check-input"
                                        id="female"
                                        name="gender"
                                        value="female"
                                      />
                                      <label
                                        class="form-check-label mb-0"
                                        for="female"
                                        >Female</label
                                      >
                                    </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >NID:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="nid"
                              placeholder="Enter NID number"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Position:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="position"
                              placeholder="Enter position"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                          <label
                            for="lname"
                            class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                            >Salary:</label
                          >
                          <div class="col-lg-10 col-sm-9 px-5">
                            <input
                              type="text"
                              class="form-control"
                              id="lname"
                              name="salary"
                              placeholder="Enter salary amount"
                            />
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-sm-3 text-end control-label col-form-label">Joining Date:</label>
                            <div class="col-lg-10 col-sm-9 px-5">
                              <input
                                type="text"
                                class="form-control"
                                id="datepicker-autoclose"
                                placeholder="mm/dd/yyyy"
                              />
                            </div>
                        </div>

                          <div class="form-group row">
                            <label
                              for="lname"
                              class="col-lg-2 col-sm-3 text-end control-label col-form-label"
                              >Image:</label
                            >
                            <div class="col-lg-10 col-sm-9 px-5">
                              <input
                                type="file"
                                class="form-control file-input"
                                id="lname"
                                name="img"
                              />
                            </div>
                          </div>
                      </div>
                      <div class="text-right pe-5 pb-5 pt-2">
                        <button type="button" class="btn-brand me-2">
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</x-admin-layout>
