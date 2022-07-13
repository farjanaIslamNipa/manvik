<x-auth-layout>
    @section('title')
    Login | Manvik
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
          <form method="POST" action="{{ route('login') }}">
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
                    id="email" type="email" name="email" :value="old('email')" required
                    class="form-control form-control-lg custom-auth-input"
                    placeholder="Username"
                    aria-label="Username"
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
              </div>
            </div>
            <div class="row border-top border-secondary">
              <div class="col-12">
                <div class="form-group">
                  <div class="pt-3">
                    @if (Route::has('password.request'))
                    <a class="text-dark-indigo" href="{{ route('password.request') }}">
                        {{ __('Lost password?') }}
                    </a>
                    @endif
                    <button
                      class="btn btn-success float-end text-white auth-btn px-3"
                      type="submit"
                    >
                      Login
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>
</x-auth-layout>
