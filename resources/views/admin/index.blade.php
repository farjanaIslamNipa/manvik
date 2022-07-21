<x-admin-layout>
    @section('title')
    Manvik | Admin Dashboard
    @endsection
    @role('admin')
    <div class="page-wrapper">
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
            <div class="scroll-height">
                <div class="row py-xl-4 py-2">
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
                      <div class="card pb-4">
                        <div class="card-body">
                          <div class="d-md-flex align-items-center">
                            <div>
                              <h4 class="card-title">Business Analysis</h4>
                              <h5 class="card-subtitle">Overview of Latest Month</h5>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="row">
                                <div class="col-lg-4 col-6 mt-3">
                                  <a href="#" class="d-block bg-dark p-6 text-white text-center">
                                    <span class="text-sky-blue card-icon"><i class="fa-solid fa-box-open"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>2540</span></h2>
                                    <h3 class="font-light text-sky-blue card-title">Total Expenses</h3>
                                  </a>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                  <div class="bg-dark p-6 text-white text-center">
                                    <span class="text-brand card-icon"><i class="fa-solid fa-cart-arrow-down"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>3040</span></h2>
                                    <h3 class="font-light text-brand card-title">Total Sales</h3>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                  <div class="bg-dark p-6 text-white text-center">
                                    <span class="text-success card-icon"><i class="fa-solid fa-chess-rook"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>5670</span></h2>
                                    <h3 class="font-light text-success card-title">Total Product</h3>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                  <div class="bg-dark p-6 text-white text-center">
                                    <span class="text-warning card-icon"><i class="fa-solid fa-people-group"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>170</span></h2>
                                    <h3 class="font-light text-warning card-title">Total Employee</h3>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                  <div class="bg-dark p-6 text-white text-center">
                                    <span class="text-primary card-icon"><i class="fa-solid fa-rectangle-list"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>170</span></h2>
                                    <h3 class="font-light text-primary card-title">Total Orders</h3>
                                  </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-3">
                                  <div class="bg-dark p-6 text-white text-center">
                                    <span class="text-red card-icon"><i class="fa-solid fa-sun"></i></span>
                                    <h2 class="mb-0 mt-1 count-text"><span>110</span></h2>
                                    <h3 class="font-light text-red card-title">Other Orders</h3>
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
            </div>
        </div>
        <footer class="footer text-center footer-bottom bg-white pt-3">
          <div class="text-center">
            All Rights Reserved by <strong class="text-danger">Manvik</strong> | Designed and Developed by
          <a href="https://sharp-keller-344464.netlify.app/"><strong class="text-info">Farjana Islam</strong></a>.
          </div>
        </footer>
      </div>
    </div>
@else
<div class="bg-dark auth-screen d-flex justify-content-center">
    <div class="pt-20 text-center">
        <h1 class="text-sky-blue pb-4 text-5xl font-bold text-center"><i class="fa-solid fa-holly-berry"></i></h1>
        <h1 class="text-brand text-3xl font-bold">Welcome to Manvik Dashboard !</h1>
        @unlessrole('user')
          <h4 class="text-xl text-white mb-4">Please ask your officials to give you the right permission to perform the operations <span class="text-brand"><i class="fa-solid fa-face-smile-beam"></i></span></h4>
        @endunlessrole     
    </div>
</div>
@endrole


</x-admin-layout>

