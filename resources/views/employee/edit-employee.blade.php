<x-admin-layout>
    @section('title')
    Update Employee List | Manvik
    @endsection
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="m-4 p-4 bg-white rounded">
                <h3 class="text-2xl mb-3">Edit or Delete Employee</h3>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><span class="text-brand text-lg">#</span></th>
                          <th scope="col"><span class="text-brand text-lg">Name</span></th>
                          <th scope="col"><span class="text-brand text-lg">Position</span></th>
                          <th scope="col"><span class="text-brand text-lg">Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->position }}</td>
                                {{-- <td><i class="fa-solid fa-circle-chevron-down"></i></td> --}}
                                <td>
                                    <a class="btn btn-sm btn-success rounded" href=""><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                    <a class="btn btn-sm btn-danger rounded" href=""><span><i class="fa-solid fa-trash-can"></i></span></a>
                                </td>
                          </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
