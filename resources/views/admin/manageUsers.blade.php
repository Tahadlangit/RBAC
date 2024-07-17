@extends('mainLayout')

@section('title', 'Manage Users')

@section('page-content')

<style>
    /* body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h2 {
        color: #333333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table th, table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #dddddd;
    }

    table th {
        background-color: #414a4c;
        color: white;
    }

    table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .actions a, .actions button {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
    }

    .actions a.edit {
        background-color: #007bff;
        color: #ffffff;
    }

    .actions button.delete {
        background-color: #dc3545;
        color: #ffffff;
        border: none;
        cursor: pointer;
    }

    .back-button {
        display: inline-block;
        background-color: #6c757d;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .back-button:hover {
        background-color: #5a6266;
    } */
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>User Management</h2>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->userInfo->user_firstname.' '.$user->userInfo->user_lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="actions">
                            <a href="{{ route('users.edit', $user->id) }}" class="edit">Edit</a>
                            <form action="{{ route('users.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="{{ route('dash') }}" class="back-button">Back</a>
        </div>
    </div>
</div>

@endsection
