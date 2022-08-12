<x-admin-layout>
    @section('title')
    Pay Advance | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    @if ($searchedEmployees)
                    @foreach ($searchedEmployees as $searchedEmployee)
                        <input type="text" value="{{ $searchedEmployee- }}">
                    @endforeach
                    @endif
                </div>
              </nav>
        </div>
    </div>
</x-admin-layout>
