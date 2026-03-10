@extends('layouts.app')

@section('title','Users')

@section('content')

    <x-page-header title="Users">

        <x-slot:action>

            <a href="#" class="btn btn-primary btn-sm">
                Add User
            </a>

        </x-slot:action>

    </x-page-header>

    <x-card>

        <table class="table">

            <thead>

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th width="120">Actions</th>
            </tr>

            </thead>

            <tbody>

            <tr>
                <td>Juan Dela Cruz</td>
                <td>juan@email.com</td>
                <td>Admin</td>
                <td>

                    <button class="btn btn-sm btn-outline-primary">
                        Edit
                    </button>

                    <button class="btn btn-sm btn-outline-danger">
                        Delete
                    </button>

                </td>
            </tr>

            </tbody>

        </table>

    </x-card>

@endsection
