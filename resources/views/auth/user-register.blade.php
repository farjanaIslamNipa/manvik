<x-auth-layout>
    @section('title')
    Register | Manvik
    @endsection
    <div class="main-wrapper login-form p-4">
        <div class="text-center pb-4 pt-2">
            <img src="{{ asset('/assets/images/logo-icon.png') }}" alt="homepage" class="d-inline-block" />
            <img src="{{ asset('/assets/images/logo-text.png') }}" alt="homepage" class="d-inline-block" />
          </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <!-- Form -->
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row pb-4 pt-2">
              <div class="col-12">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-dark-green text-white h-100"
                      id="basic-addon1"
                      ><i class="fa-solid fa-user-tie"></i></span>
                  </div>
                  <input
                    id="name" type="text" name="name" :value="old('name')" required autofocus
                    class="form-control form-control-lg custom-auth-input"
                    placeholder="Full name"
                    aria-label="Full name"
                    aria-describedby="basic-addon1"
                  />
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-info text-white h-100"
                      id="basic-addon1"
                      ><i class="fa-solid fa-at"></i></span>
                  </div>
                  <input
                    id="email" type="email" name="email" :value="old('email')" required
                    class="form-control form-control-lg custom-auth-input"
                    placeholder="User email"
                    aria-label="User email"
                    aria-describedby="basic-addon1"
                  />
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-golden text-white h-100"
                      id="basic-addon2"
                      ><i class="fa-solid fa-unlock-keyhole"></i></span>
                  </div>
                  <input
                    id="password"
                    type="password"
                    name="password"
                    required autocomplete="current-password"
                    class="form-control form-control-lg custom-auth-input"
                    placeholder="Password"
                    aria-label="Password"
                    aria-describedby="basic-addon1"
                  />
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-primary text-white h-100"
                      id="basic-addon2"
                      ><i class="fa-solid fa-lock"></i></span>
                  </div>
                  <input
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation" required
                    class="form-control form-control-lg custom-auth-input"
                    placeholder="Confirm Password"
                    aria-label="Password"
                    aria-describedby="basic-addon1"
                  />
                </div>
              </div>
            </div>
            <div class="row border-top border-secondary">
              <div class="col-12">
                <div class="form-group">
                  <div class="pt-3">
                    <div class="flex items-center justify-end mt-4">
                        <a class="text-brand underline" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button
                        class="btn btn-success float-end text-white auth-btn px-3 ms-3"
                        type="submit"
                      >
                        Register
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>
</x-auth-layout>
