<x-admin-layout>
    @section('title')
    All Employee List
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <h4 class="page-title text-lg font-bold text-primary mb-3">Add New Employee</h4>
            <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <form class="form-horizontal">
                      <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        <div class="form-group row">
                          <label
                            for="fname"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Full Name</label
                          >
                          <div class="col-sm-9">
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
                            class="col-sm-3 text-end control-label col-form-label"
                            >Father's Name</label
                          >
                          <div class="col-sm-9">
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
                            class="col-sm-3 text-end control-label col-form-label"
                            >Phone</label
                          >
                          <div class="col-sm-9">
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
                            class="col-sm-3 text-end control-label col-form-label"
                            >Address</label
                          >
                          <div class="col-sm-9">
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
                          <label
                            for="lname"
                            class="col-sm-3 text-end control-label col-form-label"
                            >NID</label
                          >
                          <div class="col-sm-9">
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
                            class="col-sm-3 text-end control-label col-form-label"
                            >Position</label
                          >
                          <div class="col-sm-9">
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
                            class="col-sm-3 text-end control-label col-form-label"
                            >Salary</label
                          >
                          <div class="col-sm-9">
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
                            <label class="col-sm-3 text-end control-label col-form-label">Joining Date</label>
                            <div class="col-sm-9">
                              <input
                                type="text"
                                class="form-control"
                                id="datepicker-autoclose"
                                placeholder="mm/dd/yyyy"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text h-100"
                                  ><i class="mdi mdi-calendar"></i
                                ></span>
                              </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 text-end">Gender</label>
                            <div class="col-md-9">
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
                      </div>
                      <div class="border-top">
                        <div class="card-body">
                          <button type="button" class="btn btn-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Forms Control</h4>
                      <div class="form-group">
                        <label for="hue-demo">Hue</label>
                        <input
                          type="text"
                          id="hue-demo"
                          class="form-control demo"
                          data-control="hue"
                          value="#ff6161"
                        />
                      </div>
                      <div class="form-group">
                        <label for="position-bottom-left"
                          >Bottom left (default)</label
                        >
                        <input
                          type="text"
                          id="position-bottom-left"
                          class="form-control demo"
                          data-position="bottom left"
                          value="#0088cc"
                        />
                      </div>
                      <div class="form-group">
                        <label for="position-top-right">Top right</label>
                        <input
                          type="text"
                          id="position-top-right"
                          class="form-control demo"
                          data-position="top right"
                          value="#0088cc"
                        />
                      </div>
                      <label>Datepicker</label>
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control mydatepicker"
                          placeholder="mm/dd/yyyy"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text h-100"
                            ><i class="mdi mdi-calendar"></i
                          ></span>
                        </div>
                      </div>
                      <label class="mt-3">Autoclose Datepicker</label>
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          id="datepicker-autoclose"
                          placeholder="mm/dd/yyyy"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text h-100"
                            ><i class="mdi mdi-calendar"></i
                          ></span>
                        </div>
                      </div>
                    </div>
                    <div class="border-top">
                      <div class="card-body">
                        <button type="submit" class="btn btn-success text-white">
                          Save
                        </button>
                        <button type="submit" class="btn btn-primary">Reset</button>
                        <button type="submit" class="btn btn-info">Edit</button>
                        <button type="submit" class="btn btn-danger text-white">
                          Cancel
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</x-admin-layout>
