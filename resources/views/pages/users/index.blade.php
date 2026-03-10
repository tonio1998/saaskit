@extends('layouts.app')

@section('title','Users')

@section('content')

    <x-page-header title="Users" subtitle="Manage system users">

        <x-slot:action>

            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                <i class="bi bi-plus"></i>
                Add User
            </a>

        </x-slot:action>

    </x-page-header>

    <x-card>

        <x-datatable
            id="usersTable"
            :columns="['Name','Email','Actions']"
            :ajax="route('users.data')"
            :datatableColumns="[
['data'=>'name'],
['data'=>'email'],
['data'=>'actions','orderable'=>false,'searchable'=>false]
]"
        >

        </x-datatable>

    </x-card>

@endsection
