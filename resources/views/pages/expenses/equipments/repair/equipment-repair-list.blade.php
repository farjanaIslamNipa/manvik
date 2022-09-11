<x-admin-layout>
  @section('title')
  Equipment Repair List | Manvik
  @endsection

  <div class="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <h4 class="page-title text-xl font-bold">Equipment Repair List</h4>
          </div>
          <div class="col-6">
            <div class="text-end">
              <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.equipment.repair.add') }}">Add New</span></a>
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
                    <th scope="col"><span class="text-brand text-md">Equipment Name</span></th>
                    <th scope="col"><span class="text-brand text-md">Quantity</span></th>
                    <th scope="col"><span class="text-brand text-md">Unit Price</span></th>
                    <th scope="col"><span class="text-brand text-md">Total Price</span></th>
                    <th scope="col"><span class="text-brand text-md">Paid</span></th>
                    <th scope="col"><span class="text-brand text-md">Due</span></th>
                    <th scope="col"><span class="text-brand text-md">Date</span></th>
                    <th scope="col"><span class="text-brand text-md">Note</span></th>
                    <th scope="col"><span class="text-brand text-md">Action</span></th>
                  </tr>
                </thead>
                <tbody style="">
                    @if(count($equipments) > 0)
                    @foreach ($equipments as $equipment)
                    <tr>
                      <td scope="row">{{ $loop->index + 1 }}</td>
                      <td class="text-capitalize">{{ $equipment->shop_details }}</td>
                      <td class="text-capitalize">{{ $equipment->equipment_name }}</td>
                      <td class="text-center">{{ $equipment->quantity }}</td>
                      <td class="text-center">{{ $equipment->unit_price }}</td>
                      <td class="text-center">{{ $equipment->total_price }}</td>
                      <td class="text-center">{{ $equipment->due }}</td>
                      <td class="text-center">{{ $equipment->paid }}</td>
                      <td>{{ $equipment->date }}</td>
                      <td>{{ $equipment->note }}</td>
                      <td>
                        <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.equipment.repair.edit', $equipment->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                        <button class="btn btn-sm btn-danger rounded delete-equipment-repair"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteEquipmentRepair"
                            data-id="{{ $equipment->id  }}">
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
        {{-- @if (count($equipments) > 8)
        <div class="mt-2 p-2 bg-dark text-white base-pagination">
          {!! $equipments->links() !!}
        </div>
        @endif --}}
    </div>
    {{-- delete modal --}}
    <div class="modal fade" id="deleteEquipmentRepair" tabindex="-1" role="dialog"
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
                    <a href="" type="submit" id="deleteEquipmentRepairModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                </div>
            </div>
        </div>
    </div>
  </div>
  @section('scripts')
  <script>
        $('.delete-equipment-repair').click(function () {

            let id_value = $(this).data('id');
            let url = '/admin/equipment-repair/delete/' + id_value ;
            console.log(url)
            document.getElementById("deleteEquipmentRepairModalHref").href = url;
        });

  </script>
  @endsection
</x-admin-layout>
