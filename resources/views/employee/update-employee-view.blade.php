<x-admin-layout>
  @section('title')
  Update Employee | Manvik
  @endsection
  <div class="page-wrapper">
      <div class="container-fluid">
        @include('employee.inclueds.emplye-common-nav')
          <div class="m-4 p-4 bg-white rounded">
              <table class="table table-dark table-hover">
                  <thead>
                      <tr>
                        <th scope="col"><span class="text-brand text-md">#</span></th>
                        <th scope="col"><span class="text-brand text-md">Image</span></th>
                        <th scope="col"><span class="text-brand text-md">Name</span></th>
                        <th scope="col"><span class="text-brand text-md">Position</span></th>
                        <th scope="col" class="text-end pe-4"><span class="text-brand text-md">Action</span></th>
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
                          <td  class="text-capitalize">{{ $employee->name }}</td>
                          <td class="text-capitalize">{{ $employee->position }}</td>
                          <td class="text-end pe-4">
                            <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.edit.employee', $employee->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <button class="btn btn-sm btn-danger rounded delete-employee"
                                data-bs-toggle="modal"
                                data-bs-target="#deleteEmployee"
                                data-id="{{ $employee->id  }}">
                                <span><i class="fa-solid fa-trash-can"></i></span>
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
              </table>
              <div class="mt-2 p-2 bg-dark text-white base-pagination">
                {!! $employees->links() !!}
            </div>
          </div>
      </div>
    {{-- delete modal --}}
    <div class="modal fade" id="deleteEmployee" tabindex="-1" role="dialog"
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
                    <a href="" type="submit" id="deleteEmployeeModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                </div>
            </div>
        </div>
    </div>
  </div>

  @section('scripts')
  <script>
       $('.delete-employee').click(function () {
            let id_value = $(this).data('id');
            let url = '/admin/employee/delete/' + id_value ;
            document.getElementById("deleteEmployeeModalHref").href = url;
        });

  </script>
  @endsection
</x-admin-layout>
