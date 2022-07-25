<x-admin-layout>
    @section('title')
    All Employee List | Manvik
    @endsection

    <div class="page-wrapper">
        {{-- {{ dd($employees) }} --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h4 class="page-title text-xl font-bold">All Employee list</h4>
                </div>
                <div class="col-6">
                    <div class="text-end">
                        <a class="btn btn-primary" href="{{ route('admin.add.employee') }}">Add New <span><i class="fa-solid fa-plus"></i></span></a>
                    </div>
                </div>
            </div>

            {{-- employee table --}}
            <div class="bg-white mt-5">
                @foreach ($employees as $employee)
                <p>{{ $employee->name }}</p>
                @if($employee->img)
                <img src="{{ asset($employee->img) }}" alt="">
                @endif

                @endforeach

            </div>
        </div>

    </div>
</x-admin-layout>
