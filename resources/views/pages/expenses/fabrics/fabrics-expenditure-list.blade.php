<x-admin-layout>
  @section('title')
  Fabrics Expenditure List | Manvik
  @endsection

  <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Fabrics Expenditure List</h4>
          </div>
          <div class="col-6">
            <div class="text-end">
              <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.add.fabrics.expenditure') }}">Add New</span></a>
            </div>
          </div>
        </div>
      
        {{-- fabrics expenditure list table --}}
        <div class="table-responsive-xxl mt-3">
            <table style=" overflow-x:auto; white-space: nowrap;" class="table table-dark table-hover">
              <thead>
                  <tr>
                    <th scope="col"><span class="text-brand text-md">#</span></th>
                    <th scope="col"><span class="text-brand text-md">Shop Details</span></th>
                    <th scope="col"><span class="text-brand text-md">Product Name</span></th>
                    <th scope="col"><span class="text-brand text-md">Quantity</span></th>
                    <th scope="col"><span class="text-brand text-md">Unit Price</span></th>
                    <th scope="col"><span class="text-brand text-md">Total Price</span></th>
                    <th scope="col"><span class="text-brand text-md">Paid</span></th>
                    <th scope="col"><span class="text-brand text-md">Due</span></th>
                    <th scope="col"><span class="text-brand text-md">Date</span></th>
                    <th scope="col"><span class="text-brand text-md">Action</span></th>
                  </tr>
                </thead>
                <tbody style="">
                  {{-- @foreach ($employees as $employee)
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
                  @endforeach --}}
                </tbody>
            </table>
        </div>
        <div class="mt-2 p-2 bg-dark text-white base-pagination">
          {{-- {!! $employees->links() !!} --}}
      </div>
    </div>

  </div>
</x-admin-layout>
