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
                        <td class="text-capitalize">{{ $advanceSalary->employee->position }}</td>
                        <td class="text-capitalize">{{ $advanceSalary->month }}</td>
                        <td>{{ $advanceSalary->year }}</td>
                        <td>{{ $advanceSalary->advance }}</td>
                        <td>{{ substr($advanceSalary->created_at, 0, 10) }}</td>
                        <td>
                          <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.advance.salary.edit', $advanceSalary->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                          <button class="btn btn-sm btn-danger rounded delete-advance"
                              data-bs-toggle="modal"
                              data-bs-target="#deleteAdvance"
                              data-id="{{ $advanceSalary->id  }}">
                              <span><i class="fa-solid fa-trash-can"></i></span>
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
          @if (count($advanceSalaries) > 8)
          <div class="mt-2 p-2 bg-dark text-white base-pagination">
            {!! $advanceSalaries->links() !!}
          </div>
          @endif
      </div>
    </div>
    {{-- delete modal --}}
    <div class="modal fade" id="deleteAdvance" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="text-danger"><i class="fas fa-exclamation-circle fa-5x mt-3"></i></span>
                    <h3 class="pt-4 mb-2 text-dark text-xl font-bold">Are you sure?</h3>
                    <p class="text-info text-md">Do you really want to delete this records? This process can't be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary bg-primary" data-bs-dismiss="modal">Cancel</button>
                    <a href="" type="submit" id="deleteAdvanceModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                </div>
            </div>
        </div>
    </div>
  </div>

  @section('scripts')
  <script>
        $('.delete-advance').click(function () {

            let id_value = $(this).data('id');
            let url = '/admin/advance-salary/delete/' + id_value ;
            console.log(url)
            document.getElementById("deleteAdvanceModalHref").href = url;
        });
  </script>
  @endsection
  </x-admin-layout>
