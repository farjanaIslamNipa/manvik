<x-admin-layout>
    @section('title')
    Pay Salary | Manvik
    @endsection

    <div class="page-wrapper">
        {{-- {{ dd($employees) }} --}}
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <h4 class="page-title text-xl font-bold">Pay Salary</h4>
                    <h4 class="text-danger text-md font-bold">{{ date('F Y') }}</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a class="btn bg-dark-indigo text-white me-2" href="{{ route('admin.all.salary') }}">All Salary List</span></a>
                </div>
            </div>
        </div>
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
                      <th scope="col"><span class="text-brand text-md">Action</span></th>
                    </tr>
                  </thead>
                  <tbody>
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
                        <td>{{ $employee->position }}</td>
                        <td class="text-capitalize">{{ $lastMonth }}</td>
                        <td>{{ $employee->year }}</td>
                        <td>
                            @isset($employee->advanceSalary->month)
                                @if ( $employee->advanceSalary->month == $lastMonth)
                                    {{ $employee->advanceSalary->month }}
                                @endif
                            @endisset


                            {{-- @isset($employee->advanceSalary)
                            @if ($employee->advanceSalary->month == 'july')
                            {{ $employee->advanceSalary->advance }}
                        @else
                            <span>N/A</span>
                        @endif
                            @endisset --}}

                        </td>
                        <td>
                          <a class="btn btn-success text-white rounded me-1" href="{{ route('admin.advance.salary.edit', $employee->id) }}">Pay Now</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
          <div class="mt-2 p-2 bg-dark text-white base-pagination">
            {!! $employees->links() !!}
          </div>
      </div>
    </div>
  </div>
  </x-admin-layout>
