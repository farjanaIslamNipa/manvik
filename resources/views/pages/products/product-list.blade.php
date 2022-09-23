<x-admin-layout>
    @section('title')
    Product List | Manvik
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <h4 class="page-title text-xl font-bold">All Products</h4>
            </div>
            <div class="col-6">
              <div class="text-end">
                <a class="btn bg-sky-blue text-white me-2" href="{{ route('admin.product.add') }}">Add New</span></a>
              </div>
            </div>
          </div>

          {{-- fabrics expenditure list table --}}
          <div class="table-responsive-xxl mt-3">
              <table style=" overflow-x:auto; white-space: nowrap;" class="table table-dark table-hover">
                <thead>
                    <tr>
                      <th scope="col"><span class="text-brand text-md">#</span></th>
                      <th scope="col"><span class="text-brand text-md">Image</span></th>
                      <th scope="col"><span class="text-brand text-md">Product Name</span></th>
                      <th scope="col"><span class="text-brand text-md">Code</span></th>
                      <th scope="col"><span class="text-brand text-md">Size</span></th>
                      <th scope="col"><span class="text-brand text-md">Color</span></th>
                      <th scope="col"><span class="text-brand text-md">Quantity</span></th>
                      <th scope="col"><span class="text-brand text-md">Unit Price</span></th>
                      <th scope="col"><span class="text-brand text-md">Status</span></th>
                      <th scope="col"><span class="text-brand text-md">Details</span></th>
                      <th scope="col"><span class="text-brand text-md">Action</span></th>
                    </tr>
                  </thead>
                  <tbody style="">
                      @if(count($products) > 0)
                      @foreach ($products as $product)
                      <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>
                            @if($product->img)
                            <img style="height: 60px; width:60px; object-fit:cover;" src="{{ asset($product->img) }}" alt="">
                            @else
                            <img style="height: 60px; width:60px; object-fit:cover;" src="{{ asset('/assets/images/users/no-image.jpg') }}" alt="">
                            @endif
                        </td>
                        <td class="text-capitalize">{{ $product->name }}</td>
                        <td class="text-uppercase">{{ $product->code }}</td>
                        <td class="text-center text-uppercase">{{ $product->size }}</td>
                        <td class="text-center text-capitalize">{{ $product->color }}</td>
                        <td class="text-center">{{ $product->quantity }}</td>
                        <td class="text-center">{{ $product->unit_price }}</td>
                        <td class="text-center">
                            @if($product->status == 1)
                            <span class="badge bg-sky-blue text-white">Active</span>
                            @elseif($product->status == 0)
                            <span class="badge bg-danger text-white">Inactive</span>
                            @endif
                        </td>
                        <td>@if($product->details){{ $product->details }}@else N/A @endif</td>
                        <td>
                          <a class="btn btn-sm btn-success rounded me-1" href="{{ route('admin.product.edit', $product->id) }}"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                          <button class="btn btn-sm btn-danger rounded delete-product"
                              data-bs-toggle="modal"
                              data-bs-target="#deleteproductList"
                              data-id="{{ $product->id  }}">
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
          {{-- @if (count($products) > 8)
          <div class="mt-2 p-2 bg-dark text-white base-pagination">
            {!! $products->links() !!}
          </div>
          @endif --}}
      </div>
      {{-- delete modal --}}
      <div class="modal fade" id="deleteproductList" tabindex="-1" role="dialog"
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
                      <a href="" type="submit" id="deleteproductListModalHref" class="btn btn-danger bg-danger">Delete it.</a>
                  </div>
              </div>
          </div>
      </div>
    </div>
    @section('scripts')
    <script>
          $('.delete-product').click(function () {

              let id_value = $(this).data('id');
              let url = '/admin/product/delete/' + id_value ;
              console.log(url)
              document.getElementById("deleteproductListModalHref").href = url;
          });

    </script>
    @endsection
  </x-admin-layout>
