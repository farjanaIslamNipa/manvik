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
                        <div class="mt-4 d-flex">
                            @if ($user->roles)
                                @foreach ($user->roles as $role)
                                <form action="{{ route('admin.users.roles.remove', [$user->id, $role->id]) }}" method="POST" onsubmit="return confirm('are your sure you want to delete this role?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger bg-danger ms-2 py-1 text-capitalize" type="submit" >{{ $role->name }}</button>
                                </form>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="ms-5">
                        <form  onsubmit="return roleSubmit()" action="{{ route('admin.users.roles.assign', $user->id) }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="ms-5">
                                    <select class="form-select bg-dark border-success text-white" id="role" name="role">
                                        <option value="" selected disabled>Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                      </select>
                                      <p class="mb-0 text-danger" id="role-error"></p>
                                </div>
                            
                            <div class="ms-2">
                                <button type="submit" class="btn bg-sky-blue text-white font-bold py-2">Assign</button>
                            </div>
                        </div>
                          </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        <script>
            const roleSubmit = () => {
                let selectRole = document.getElementById('role').value;
                let roleError = document.getElementById('role-error');
                if(selectRole == '' || selectRole == null){
                    roleError.innerText = 'Please select a role first !'
                    return false;
                }else{
                    return true;
                }
            }
        </script>
    @endsection
</x-admin-layout>
