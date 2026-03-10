@extends('layouts.app')

@section('title','Dashboard')

@section('content')

    <div class="row">

        <div class="col-lg-3">

            <x-card title="Users">

                <h4 class="mb-0">1,250</h4>

            </x-card>

        </div>

        <div class="col-lg-3">

            <x-card title="Revenue">

                <h4 class="mb-0">$12,400</h4>

            </x-card>

        </div>

    </div>

@endsection
