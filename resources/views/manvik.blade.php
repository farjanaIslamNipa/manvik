<x-auth-layout>
    @section('title')
    Manvik
    @endsection
  <div class="text-center">
    <div class="d-flex justify-content-center"><img class="home-icon" src="{{ asset('/assets/images/home-icon.gif') }}" alt=""></div>
    <div class="text-center pb-4 pt-2">
        <img src="{{ asset('/assets/images/logo-icon.png') }}" alt="homepage" class="d-inline-block" />
        <img src="{{ asset('/assets/images/logo-text.png') }}" alt="homepage" class="d-inline-block" />
      </div>

    @if (Route::has('login'))
    <div class="">
        @auth
           <h4></h4>
        @else
            <a href="{{ route('login') }}" class="home-login-btn">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="home-register-btn ms-2">Register</a>
            @endif
        @endauth
    </div>
@endif
  </div>
</x-auth-layout>
