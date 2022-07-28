<x-admin-layout>
  @section('title')
  Update Employee | Manvik
  @endsection
  <div class="page-wrapper">
      <div class="container-fluid">
          <div class="m-4 p-4 bg-white rounded">
              <h3 class="text-xl font-bold mb-3">Edit or Delete Employee</h3>
              <table class="table table-dark table-hover">
                  <thead>
                      <tr>
                        <th scope="col"><span class="text-brand text-md">#</span></th>
                        <th scope="col"><span class="text-brand text-md">Name</span></th>
                        <th scope="col"><span class="text-brand text-md">Position</span></th>
                        <th scope="col" class="text-end pe-4"><span class="text-brand text-md">Action</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($employees as $employee)
                        <tr>
                          <th scope="row">{{ $loop->index + 1 }}</th>
                          <td  class="text-capitalize">{{ $employee->name }}</td>
                          <td class="text-capitalize">{{ $employee->position }}</td>
                          <td class="text-end pe-4">
                            <a class="btn btn-sm btn-success rounded" href="{{ route('admin.edit.employee', $employee->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
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
