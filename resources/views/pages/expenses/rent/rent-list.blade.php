<x-admin-layout>
    @section('title')
    Rent List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <h4 class="page-title text-xl font-bold">All Rent List</h4>
            </div>
            <div class="col-6">
              <div class="text-end">
                <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.rents.add') }}">Add New</span></a>
              </div>
            </div>
          </div>

          {{-- fabrics expenditure list table --}}
          <div class="table-responsive-xxl mt-3">
              <table style=" overflow-x:auto; white-space: nowrap;" class="table table-dark table-hover">
                <thead>
                    <tr>
                      <th scope="col"><span class="text-brand text-md">#</span></th>
                      <th scope="col"><span class="text-brand text-md">Rent Type</span></th>
                      <th scope="col"><span class="text-brand text-md">Month</span></th>
                      <th scope="col"><span class="text-brand text-md">Year</span></th>
                      <th scope="col"><span class="text-brand text-md">Monthly Rent</span></th>
                      <th scope="col"><span class="text-brand text-md">Paid</span></th>
                      <th scope="col"><span class="text-brand text-md">Due</span></th>
                      <th scope="col"><span class="text-brand text-md">Pay Date</span></th>
                      <th scope="col"><span class="text-brand text-md">Note</span></th>
                      <th scope="col"><span class="text-brand text-md">Action</span></th>
                    </tr>
                  </thead>
                  <tbody style="">
                      @if(count($rents) > 0)
                      @foreach ($rents as $rent)
                      <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td class="text-capitalize">{{ $rent->rent_type }}</td>
                        <td class="text-capitalize">{{ $rent->month }}</td>
                        <td class="text-center">{{ $rent->year }}</td>
                        <td class="text-center">{{ $rent->rent_amount }}</td>
                        <td class="text-center">{{ $rent->paid }}</td>
                        <td class="text-center">{{ $rent->due }}</td>
                        <td>{{ $rent->date }}</td>
                        <td>@if($rent->note){{ $rent->note }}@else N/A @endif</td>
                        <td>
                          <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.rents.edit', $rent->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                          <button class="btn btn-sm btn-danger rounded delete-rent"
                              data-bs-toggle="modal"
                              data-bs-target="#deleteRentList"
                              data-id="{{ $rent->id  }}">
                              <span><i class="fa-solid fa-trash-can"></i></span>
                          </button>
                        </td>
                      </tr>
                    @endforeach
                    @else
                    <tr class="text-center">
                      <td colspan="12"><h5 class="text-lg">No data found</h5></td>
                    </tr>
                    @endif
                  </tbody>
              </table>
          </div>
          {{-- @if (count($rents) > 8)
          <div class="mt-2 p-2 bg-dark text-white base-pagination">
            {!! $rents->links() !!}
          </div>
          @endif --}}
      </div>
      {{-- delete modal --}}
      <div class="modal fade" id="deleteRentList" tabindex="-1" role="dialog"
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
                      <a href="" type="submit" id="deleteRentListModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
    @section('scripts')
    <script>
          $('.delete-rent').click(function () {

              let id_value = $(this).data('id');
              let url = '/admin/rent/delete/' + id_value ;
              console.log(url)
              document.getElementById("deleteRentListModalHref").href = url;
          });

    </script>
    @endsection
  </x-admin-layout>
