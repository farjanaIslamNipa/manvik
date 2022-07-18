<x-admin-layout>
    @section('title')
    Manvik | Admin Dashboard
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="m-4 p-4 bg-white rounded">
                <h3 class="text-2xl mb-3">All users list</h3>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                          <th scope="col"><span class="text-brand text-lg">#</span></th>
                          <th scope="col"><span class="text-brand text-lg">Name</span></th>
                          <th scope="col"><span class="text-brand text-lg">Email</span></th>
                          <th scope="col"><span class="text-brand text-lg">Role</span></th>
                          <th scope="col"><span class="text-brand text-lg">Action</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>@if($user->roles)
                                    {{-- {{ dd($collectionOfRoles) }} --}}
                                    @foreach ($user->roles as $role)
                                    <span class="badge bg-sky-blue text-white">{{ $role->name }}</span>
                                    @endforeach
                                @endif</td>
                                {{-- <td><i class="fa-solid fa-circle-chevron-down"></i></td> --}}
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-secondary text-brand dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="{{ route('admin.users.assign.role.view', $user->id) }}">Assign Role</a></li>
                                          <li><a class="dropdown-item" href="#">Remove Role</a></li>
                                        </ul>
                                      </div>
                                </td>
                          </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
