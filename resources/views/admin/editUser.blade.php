@extends('mainLayout')

@section('title', 'Edit User Role')

@section('page-content')
<div >
    <div >
        <div >
            <h4 style="margin: 0;">Edit User Role</h4>
        </div>
        <div >
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label for="userName" style="margin-bottom: 5px; display: block; font-weight: bold;">User Name</label>
                    <input type="text" id="userName" value="{{ $user->name }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 3px; background-color: #f8f9fa;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="userEmail" style="margin-bottom: 5px; display: block; font-weight: bold;">E-mail</label>
                    <input type="email" id="userEmail" value="{{ $user->email }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 3px; background-color: #f8f9fa;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="userFullName" style="margin-bottom: 5px; display: block; font-weight: bold;">Full Name</label>
                    <input type="text" id="userFullName" value="{{ $user->userInfo->user_firstname . ' ' . $user->userInfo->user_lastname }}" readonly style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 3px; background-color: #f8f9fa;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label for="userRole" style="margin-bottom: 5px; display: block; font-weight: bold;">Role</label>
                    <select id="userRole" name="role_id" style="width: 100%; padding: 8px; border: 1px solid #ced4da; border-radius: 3px; background-color: #f8f9fa;">
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->roles->pluck('id')->contains($role->id) ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div style="text-align: right;">
                    <a href="{{ route('usertool') }}" style="text-decoration: none; padding: 8px 20px; border-radius: 3px; background-color: #6c757d; color: #ffffff; margin-right: 10px;">Cancel</a>
                    <button type="submit" >Update Role</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
