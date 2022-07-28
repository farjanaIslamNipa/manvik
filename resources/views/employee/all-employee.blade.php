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
                  <a class="btn btn-danger" href="{{ route('admin.update.employee') }}">Edit / Delete</a>
                </div>
              </div>
          </div>

          {{-- employee table --}}
          <div class="table-responsive-xxl mt-3">
              <table style=" overflow-x:auto; white-space: nowrap;" class="table table-dark table-hover">
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
                        <td class="text-capitalize">{{ $employee->name }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->nid }}</td>
                        <td class="text-capitalize">{{ $employee->fathers_name }}</td>
                        <td class="text-capitalize">{{ $employee->gender }}</td>
                        <td class="text-capitalize">{{ $employee->position }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->joining_date }}</td>
                        <td class="text-capitalize">{{ $employee->address }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>

  </div>
</x-admin-layout>
