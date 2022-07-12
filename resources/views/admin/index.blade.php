<x-admin-layout>
    @section('title')
    Manvik | Admin Dashboard
    @endsection
    <div class="page-wrapper">
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                  </h1>
                  <h6 class="text-white">Expenses</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                  </h1>
                  <h6 class="text-white">Employee</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h6 class="text-white">Sales</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-pencil"></i>
                  </h1>
                  <h6 class="text-white">Digital Marketing</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-calendar-check"></i>
                  </h1>
                  <h6 class="text-white">Products</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>
                  </h1>
                  <h6 class="text-white">China Products</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- ============================================================== -->
          <!-- Sales chart -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Site Analysis</h4>
                      <h5 class="card-subtitle">Overview of Latest Month</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">2540</h5>
                            <small class="font-light">Total Users</small>
                          </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-plus fs-3 font-16"></i>
                            <h5 class="mb-0 mt-1">120</h5>
                            <small class="font-light">New Users</small>
                          </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-cart fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">656</h5>
                            <small class="font-light">Total Shop</small>
                          </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-tag fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">9540</h5>
                            <small class="font-light">Total Orders</small>
                          </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-table fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">100</h5>
                            <small class="font-light">Pending Orders</small>
                          </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-3">
                          <div class="bg-dark p-10 text-white text-center">
                            <i class="mdi mdi-web fs-3 mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">8540</h5>
                            <small class="font-light">Online Orders</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- column -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- column -->

            <div class="col-lg-12">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chat Option</h4>
                  <div class="chat-box scrollable" style="height: 475px">
                    <!--chat Row -->
                    <ul class="chat-list">
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../assets/images/users/1.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">James Anderson</h6>
                          <div class="box bg-light-info">
                            Lorem Ipsum is simply dummy text of the printing
                            &amp; type setting industry.
                          </div>
                        </div>
                        <div class="chat-time">10:56 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../assets/images/users/2.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">Bianca Doe</h6>
                          <div class="box bg-light-info">
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div class="chat-time">10:57 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="odd chat-item">
                        <div class="chat-content">
                          <div class="box bg-light-inverse">
                            I would love to join the team.
                          </div>
                          <br />
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd chat-item">
                        <div class="chat-content">
                          <div class="box bg-light-inverse">
                            Whats budget of the new project.
                          </div>
                          <br />
                        </div>
                        <div class="chat-time">10:59 am</div>
                      </li>
                      <!--chat Row -->
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="../assets/images/users/3.jpg" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">Angelina Rhodes</h6>
                          <div class="box bg-light-info">
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div class="chat-time">11:00 am</div>
                      </li>
                      <!--chat Row -->
                    </ul>
                  </div>
                </div>
                <div class="card-body border-top">
                  <div class="row">
                    <div class="col-9">
                      <div class="input-field mt-0 mb-0">
                        <textarea
                          id="textarea1"
                          placeholder="Type and enter"
                          class="form-control border-0"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-3">
                      <a
                        class="btn-circle btn-lg btn-cyan float-end text-white"
                        href="javascript:void(0)"
                        ><i class="mdi mdi-send fs-3"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Our partner (Box with Fix height)</h4>
                </div>
                <div
                  class="comment-widgets scrollable"
                  style="max-height: 130px"
                >
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row mt-0">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/1.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">James Anderson</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">April 14, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/4.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="font-medium">Michael Jorden</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">May 10, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row">
                    <div class="p-2">
                      <img
                        src="../assets/images/users/5.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="font-medium">Johnathan Doeting</h6>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </span>
                      <div class="comment-footer">
                        <span class="text-muted float-end">August 1, 2021</span>
                        <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          Publish
                        </button>
                        <button
                          type="button"
                          class="btn btn-danger btn-sm text-white"
                        >
                          Delete
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tabs -->
              <div class="card">
                <!-- Tab panes -->
                <div class="tab-content tabcontent-border">
                  <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="p-20">
                      <p>
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="tab-pane p-20" id="profile" role="tabpanel">
                    <div class="p-20">
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                      <p class="mt-2">
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                    </div>
                  </div>
                  <div class="tab-pane p-20" id="messages" role="tabpanel">
                    <div class="p-20">
                      <p>
                        And is full of waffle to It has multiple paragraphs and
                        is full of waffle to pad out the comment. Usually, you
                        just wish these sorts of comments would come to an
                        end.multiple paragraphs and is full of waffle to pad out
                        the comment..
                      </p>
                      <img
                        src="../assets/images/background/img4.jpg"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
      </div>
    </div>
</x-admin-layout>

