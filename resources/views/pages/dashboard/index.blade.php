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

                <h4>1,250</h4>
                <p class="text-muted mb-0">Total students</p>

            </x-card>

        </div>

        <div class="col-md-3">

            <x-card title="Teachers">

                <h4>80</h4>
                <p class="text-muted mb-0">Total teachers</p>

            </x-card>

        </div>

        <div class="col-md-3">

            <x-card title="Courses">

                <h4>45</h4>
                <p class="text-muted mb-0">Active courses</p>

            </x-card>

        </div>

        <div class="col-md-3">

            <x-card title="Revenue">

                <h4>$12,400</h4>
                <p class="text-muted mb-0">Monthly revenue</p>

            </x-card>

        </div>

    </div>

@endsection
