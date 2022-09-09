<x-admin-layout>
    @section('title')
    Accessories List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <h4 class="text-lg mb-0 font-bold">All Fabrics</h4>
                <div>
                    <a class="btn btn-primary" href="{{ route('admin.accessory.add') }}">Create Accessory</a>
                </div>
            </div>
            <div class="m-4 p-4 bg-white rounded">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><span class="text-brand text-md">#</span></th>
                          <th scope="col"><span class="text-brand text-md">Accessories</span></th>
                          <th scope="col"><span class="text-brand text-md">Status</span></th>
                          <th scope="col" class="text-end pe-4"><span class="text-brand text-md">Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($accessories as $accessory)
                          <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td  class="text-capitalize">{{ $accessory->accessories }}</td>
                            <td class="text-capitalize">
                                @if ($accessory->status == '1')
                                <span class="badge bg-sky-blue text-white">Active</span>
                                @else
                                <span class="badge bg-danger text-white">Inactive</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.accessory.edit', $accessory->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                <form class="d-inline-block" action="{{ route('admin.accessory.remove', $accessory->id) }}" method="POST" onsubmit="return confirm('are your sure you want to delete this accessory?');">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="btn btn-sm btn-danger bg-danger py-1 text-capitalize" type="submit" > <span><i class="fa-solid fa-trash-can"></i></span></button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>

    </div>
  </x-admin-layout>
