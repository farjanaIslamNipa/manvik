<x-admin-layout>
    @section('title')
    Advance Salary List | Manvik
    @endsection

    <div class="page-wrapper">


        <div class="container-fluid">
          @include('pages.salary.includes.salary-common-nav')
            {{-- employee table --}}
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
                        <th scope="col"><span class="text-brand text-md">Paying Date</span></th>
                        <th scope="col"><span class="text-brand text-md">Action</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($advanceSalaries as $advanceSalary)
                        <tr>
                          <td scope="row">{{ $loop->index + 1 }}</td>
                          <td>
                              @if($advanceSalary->employee->img)
                              <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset($advanceSalary->employee->img) }}" alt="">
                              @else
                              <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset('/assets/images/users/no-image.jpg') }}" alt="">
                              @endif
                          </td>
                          <td class="text-capitalize">{{ $advanceSalary->employee->name }}</td>
                          <td>{{ $advanceSalary->employee->position }}</td>
                          <td class="text-capitalize">{{ $advanceSalary->month }}</td>
                          <td>{{ $advanceSalary->year }}</td>
                          <td>{{ $advanceSalary->advance }}</td>
                          <td>{{ $advanceSalary->created_at }}</td>
                          <td>
                            <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.edit.employee', $advanceSalary->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <button class="btn btn-sm btn-danger rounded delete-employee"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteEmployee"
                                data-id="{{ $advanceSalary->id  }}">
                                <span><i class="fa-solid fa-trash-can"></i></span>
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-2 p-2 bg-dark text-white base-pagination">
              {!! $advanceSalaries->links() !!}
          </div>
        </div>

    </div>
  </x-admin-layout>
