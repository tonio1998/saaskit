@extends('layouts.app')

@section('title','Settings')

@section('content')

    <x-page-header title="Settings" />

    <x-card>

        <form>

            <div class="mb-3">

                <label class="form-label">System Name</label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Enter system name"
                />

            </div>

            <button class="btn btn-primary">
                Save Settings
            </button>

        </form>

    </x-card>

@endsection
