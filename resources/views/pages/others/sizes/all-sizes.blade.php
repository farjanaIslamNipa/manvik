<x-admin-layout>
    @section('title')
    size List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <h4 class="text-lg mb-0 font-bold">All Sizes</h4>
                <div>
                    <a class="btn btn-primary" href="{{ route('admin.size.add') }}">Add size</a>
                </div>
            </div>
            <div class="m-4 p-4 bg-white rounded">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><span class="text-brand text-md">#</span></th>
                          <th scope="col"><span class="text-brand text-md">Size</span></th>
                          <th scope="col"><span class="text-brand text-md">Status</span></th>
                          <th scope="col" class="text-end pe-4"><span class="text-brand text-md">Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sizes as $size)
                          <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td  class="text-uppercase">{{ $size->size }}</td>
                            <td class="text-capitalize">
                                @if ($size->status == '1')
                                <span class="badge bg-sky-blue text-white">Active</span>
                                @else
                                <span class="badge bg-danger text-white">Inactive</span>
                                @endif
                            </td>
                            <td class="text-end pe-4">
                                <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.size.edit', $size->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                <form class="d-inline-block" action="{{ route('admin.size.remove', $size->id) }}" method="POST" onsubmit="return confirm('are your sure you want to delete this size?');">
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
