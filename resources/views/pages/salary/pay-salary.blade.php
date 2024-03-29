<x-admin-layout>
    @section('title')
    Pay Salary | Manvik
    @endsection

    <div class="page-wrapper">
       
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
                      <th scope="col" class="text-end"><span class="text-brand text-md">Advance</span></th>
                      <th scope="col" class="text-end"><span class="text-brand text-md">Paid</span></th>
                      <th scope="col" class="text-end"><span class="text-brand text-md">Paid Total</span></th>
                      <th scope="col" class="text-center"><span class="text-brand text-md">Action</span></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($employees as $employee)
                        <form action="{{ route('admin.store.salary', $employee->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td>
                                    @if($employee->img)
                                    <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset($employee->img) }}" alt="">
                                    @else
                                    <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset('/assets/images/users/no-image.jpg') }}" alt="">
                                    @endif
                                </td>
                                <td class="text-capitalize">
                                    {{ $employee->name }}
                                    <input type="hidden" value="{{ $employee->id }}" name="employee_id">
                                </td>
                                <td>
                                    {{ $employee->position }}
                                    <input type="hidden" value="{{ $employee->position }}" name="position">
                                </td>
                                <td class="text-capitalize">
                                    {{ $lastMonth }}
                                    <input type="hidden" value="{{ $lastMonth }}" name="month">
                                </td>
                                <td>
                                    {{ $currentYear }}
                                    <input type="hidden" value="{{ $currentYear }}" name="year">
                                </td>
                                <td class="text-end">
                                    @if ( $employee->advanceSalary && $employee->advanceSalary->month == $lastMonth && $employee->advanceSalary->year = $currentYear)
                                    {{ $employee->advanceSalary->advance }}
                                    <input type="hidden" value="{{ $employee->advanceSalary->advance }}" name="advance">
                                    @else
                                    <span>0</span>
                                    <input type="hidden" value="0" name="advance">
                                    @endif
                                </td>
                                 <td class="text-end">
                                    @if ( $employee->advanceSalary && $employee->advanceSalary->month == $lastMonth && $employee->advanceSalary->year = $currentYear)
                                    {{ $employee->salary - $employee->advanceSalary->advance }}
                                    <input type="hidden" value="{{ $employee->salary - $employee->advanceSalary->advance }}" name="paid">
                                    @else
                                    {{ $employee->salary }}
                                    <input type="hidden" value="{{ $employee->salary }}" name="paid">
                                    @endif
                                </td>
                                <td class="text-end">
                                    @if ( $employee->advanceSalary && $employee->advanceSalary->month == $lastMonth && $employee->advanceSalary->year = $currentYear)
                                    {{ ($employee->salary - $employee->advanceSalary->advance) + $employee->advanceSalary->advance }}
                                    <input type="hidden" value="{{ ($employee->salary - $employee->advanceSalary->advance) + $employee->advanceSalary->advance }}" name="paid_total">
                                    @else
                                    {{ $employee->salary }}
                                    <input type="hidden" value="{{ $employee->salary }}" name="paid_total">
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-success text-white rounded">Pay Now</button>
                                </td>
                              </tr>
                        </form>
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
