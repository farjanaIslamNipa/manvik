<x-admin-layout>
    @section('title')
    Employee Salary List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          @include('pages.salary.includes.salary-common-nav')
            {{-- employee table --}}
            {{-- <div class="table-responsive-xxl mt-3">
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
                          <td scope="row">{{ $loop->index + 1 }}</td>
                          <td>
                              @if($employee->img)
                              <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset($employee->img) }}" alt="">
                              @else
                              <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset('/assets/images/users/no-image.jpg') }}" alt="">
                              @endif
                          </td>
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
            </div> --}}
            {{-- <div class="mt-2 p-2 bg-dark text-white base-pagination">
              {!! $employees->links() !!}
          </div> --}}
        </div>

    </div>
  </x-admin-layout>
