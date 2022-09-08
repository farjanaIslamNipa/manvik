<x-admin-layout>
    @section('title')
    salary Salary List | Manvik
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
                        <th scope="col"><span class="text-brand text-md">salary Name</span></th>
                        <th scope="col"><span class="text-brand text-md">Position</span></th>
                        <th scope="col"><span class="text-brand text-md">Month</span></th>
                        <th scope="col"><span class="text-brand text-md">Year</span></th>
                        <th scope="col" class="text-right"><span class="text-brand text-md">Advance</span></th>
                        <th scope="col" class="text-right"><span class="text-brand text-md">Paid</span></th>
                        <th scope="col" class="text-right"><span class="text-brand text-md">Paid Total</span></th>
                        <th scope="col"><span class="text-brand text-md">Action</span></th>
                      </tr>
                    </thead>
                    <tbody style="">
                        @if ($salaries)
                        @foreach ($salaries as $salary)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>
                                @if($salary->employee->img)
                                <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset($salary->employee->img) }}" alt="">
                                @else
                                <img style="height: 40px; width:40px; border-radius:50%; object-fit:cover;" src="{{ asset('/assets/images/users/no-image.jpg') }}" alt="">
                                @endif
                            </td>
                            <td class="text-capitalize">{{ $salary->employee->name }}</td>
                            <td class="text-capitalize">{{ $salary->employee->position }}</td>
                            <td class="text-capitalize text-warning">{{ $salary->month }}</td>
                            <td class="text-success">{{ $salary->year }}</td>
                            <td class="text-brand text-right">{{ $salary->advance }}</td>
                            <td class="text-success text-right">{{ $salary->paid }}</td>
                            <td class="text-right">{{ $salary->paid_total }}</</td>
                            <td class="text-capitalize">
                                <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.edit.salary', $salary->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                <button class="btn btn-sm btn-danger rounded delete-salary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteFabric"
                                    data-id="{{ $salary->id  }}">
                                    <span><i class="fa-solid fa-trash-can"></i></span>
                                </button>
                            </td>
                        </tr>
                      @endforeach
                        @else
                        <h4 class="text-center">No data found</h4>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="mt-2 p-2 bg-dark text-white base-pagination">
              {!! $salaries->links() !!}
          </div>
              {{-- delete modal --}}
            <div class="modal fade" id="deleteFabric" tabindex="-1" role="dialog"
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
                            <a href="" type="submit" id="deleteFabricModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
          $('.delete-salary').click(function () {
              let id_value = $(this).data('id');
              let url = '/admin/fabric/delete/' + id_value ;
              console.log(url)
              document.getElementById("deleteFabricModalHref").href = url;
          });

    </script>
    @endsection
  </x-admin-layout>
