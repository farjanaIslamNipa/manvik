<x-admin-layout>
    @section('title')
    All Employee List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h4 class="page-title text-xl font-bold">All Employee list</h4>
                </div>
                <div class="col-6">
                    <div class="text-end">
                        <a class="btn btn-primary" href="{{ route('admin.add.employee') }}">Add New <span><i class="fa-solid fa-plus"></i></span></a>
                        <a class="btn btn-danger" href="{{ route('admin.edit.employee') }}">Edit / Delete</a>
                    </div>
                </div>
            </div>

            {{-- employee table --}}
            <div class="table-responsive-xxl mt-3">
                <table style="display: block; overflow-x:auto; white-space: nowrap; width:100%" class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><span class="text-brand text-md">#</span></th>
                          <th scope="col"><span class="text-brand text-md">Image</span></th>
                          <th scope="col"><span class="text-brand text-md">Employee Name</span></th>
                          <th scope="col"><span class="text-brand text-md">Phone</span></th>
                          <th scope="col"><span class="text-brand text-md">NID</span></th>
                          <th scope="col"><span class="text-brand text-md">Father's Name</span></th>
                          <th scope="col"><span class="text-brand text-md">Gender</span></th>
                          <th scope="col"><span class="text-brand text-md">Position</span></th>
                          <th scope="col"><span class="text-brand text-md">Salary</span></th>
                          <th scope="col"><span class="text-brand text-md">Joining Date</span></th>
                          <th scope="col"><span class="text-brand text-md">Employee Address</span></th>
                        </tr>
                      </thead>
                      <tbody style="">
                        @foreach ($employees as $employee)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td><img style="height: 40px; width:40px; border-radius:50%" src="{{ asset($employee->img) }}" alt=""></td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->nid }}</td>
                                <td>{{ $employee->fathers_name }}</td>
                                <td>{{ $employee->gender }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->joining_date }}</td>
                                <td>{{ $employee->address }}</td>
                                {{-- <td><i class="fa-solid fa-circle-chevron-down"></i></td> --}}
                                {{-- <td>
                                    <div class="dropdown">
                                        <a class="btn btn-secondary text-brand dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="{{ route('admin.users.assign.role.view', $user->id) }}">Assign Role</a></li>
                                          <li><a class="dropdown-item" href="#">Remove Role</a></li>
                                        </ul>
                                      </div>
                                </td> --}}
                          </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>
