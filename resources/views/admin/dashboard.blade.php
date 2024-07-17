@extends('mainLayout')

@section('page-content')
<div class="container-fluid">

        <a href="{{ route('usertool') }}" class="link-primary">Manage User Roles and Permissions</a>
    </p>
    <p>
        <a href="{{ route('home') }}" class="link-dark">Back</a>
    </p>
</div>
@endsection

