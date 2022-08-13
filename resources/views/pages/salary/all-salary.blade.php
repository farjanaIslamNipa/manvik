<x-admin-layout>
    @section('title')
    Employee Salary List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          @include('pages.salary.includes.salary-common-nav')
            <div class="table-responsive-xxl mt-3">
                <table style=" overflow-x:auto; white-space: nowrap;" class="table table-dark table-hover">
                  <thead>
                      <tr>
                        <th scope="col"><span class="text-brand text-md">#</span></th>
                        <th scope="col"><span class="text-brand text-md">Image</span></th>
                        <th scope="col"><span class="text-brand text-md">Employee Name</span></th>
                        <th scope="col"><span class="text-brand text-md">Position</span></th>
                        <th scope="col"><span class="text-brand text-md">Month</span></th>
                        <th scope="col"><span class="text-brand text-md">Year</span></th>
                        <th scope="col"><span class="text-brand text-md">Advance</span></th>
                        <th scope="col"><span class="text-brand text-md">Salary</span></th>
                        <th scope="col"><span class="text-brand text-md">Paid</span></th>
                        <th scope="col"><span class="text-brand text-md">Action</span></th>
                      </tr>
                    </thead>
                    <tbody style="">
                        @foreach ($salaries as $salary)
     {{-- {{ dd($salary->employee) }} --}}
                        @endforeach
                      @foreach ($employees as $employee)
                      {{ dd($employee->paidSalary) }}

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
                          <td class="text-capitalize">{{ $employee->position }}</td>
                          <td class="text-capitalize">{{ $employee->paidSalary->month }}</td>
                          <td>{{ $employee->paidSalary->year }}</td>
                          <td>{{ $employee->paidSalary->advance }}</td>
                          <td>{{ $employee->salary }}</td>
                          <td>{{ $employee->paidSalary->salary }}</td>
                          <td class="text-capitalize">Action</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="mt-2 p-2 bg-dark text-white base-pagination">
              {!! $employees->links() !!}
          </div> --}}
        </div>

    </div>
  </x-admin-layout>
