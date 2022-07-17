<x-admin-layout>
    @section('title')
        Manvik | Admin Dashboard
    @endsection

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="bg-dark p-4">
                <div class="d-flex align-items-start">
                    <div>
                        <p class="text-md text-white"><strong>User Name: </strong>{{ $user->name }}</p>
                        <p class="text-md text-white mb-0"><strong>User Email: </strong><em class="text-brand">{{ $user->email }}</em></p>
                        <div class="mt-4">
                            @if ($user->roles)
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-danger text-white font-bold text-md">{{ $role->name }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="ms-5">
                        <form action="{{ route('admin.users.roles.assign', $user->id) }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <select class="form-select bg-dark border-success text-white" id="role" name="role">
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                  </select>
                            <div class="ms-2">
                                <button type="submit" class="btn bg-sky-blue text-white font-bold py-2">Assign</button>
                            </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
