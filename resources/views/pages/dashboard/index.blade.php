@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <x-page-header
        title="Dashboard"
        subtitle="Overview of your system"
    />

    <div class="row g-3">
        <div class="col-md-3">
            <x-card title="Students">
                <h4>{{ $students }}</h4>
                <p class="text-muted mb-0">Total students</p>
            </x-card>
        </div>

        <div class="col-md-3">
            <x-card title="Teachers">
                <h4>{{ $teachers }}</h4>
                <p class="text-muted mb-0">Total teachers</p>
            </x-card>
        </div>

        <div class="col-md-3">
            <x-card title="Parents">
                <h4>{{ $parents }}</h4>
                <p class="text-muted mb-0">Total parents</p>
            </x-card>
        </div>
    </div>
@endsection
