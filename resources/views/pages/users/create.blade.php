@extends('layouts.app')

@section('title','Create User')

@section('content')

    <x-page-header title="Create User" />

    <x-card>

        @include('pages.users.form')

    </x-card>

@endsection
