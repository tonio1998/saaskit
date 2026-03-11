@extends('layouts.app')
@section('title','Student Management')
@section('content')
    <x-page-header title="Student Management" subtitle="Manage student">
        <x-slot:action>
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-md">
                <i class="bi bi-plus"></i> Add Students
            </a>
        </x-slot:action>
    </x-page-header>

    <x-card>
        <x-datatable
            id="studentsTable"
            :columns="['Actions','Image','Student Name','LRN','Phone Number','Section','Year','Created At', 'Created By']"
            :ajax="route('students.data')"
            :datatableColumns="[
                ['data'=>'actions','orderable'=>false,'searchable'=>false],
                ['data'=>'image'],
                ['data'=>'name'],
                ['data'=>'lrn'],
                ['data'=>'phone_number'],
                ['data'=>'section'],
                ['data'=>'year'],
                ['data'=>'created_at'],
                ['data'=>'createdBy']
            ]"
        />
    </x-card>
@endsection
@section('scripts')
    <script>
        $(document).on('click','.btn-password',function(){

            let url = $(this).data('url');
            let type = $(this).data('type');

            let title = type === 'regenerate' ? 'Regenerate Password?' : 'Generate Password?';
            let text = type === 'regenerate'
                ? 'This will reset the existing user password.'
                : 'This will create a login account and generate a password.';

            Swal.fire({
                icon:'warning',
                title:title,
                text:text,
                showCancelButton:true,
                confirmButtonText:'Yes, proceed',
                cancelButtonText:'Cancel'
            }).then(function(result){

                if(!result.isConfirmed) return;

                $.ajax({
                    url:url,
                    type:'POST',
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(res){

                        if(res.success){

                            Swal.fire({
                                icon:'success',
                                title:res.message,
                                html:
                                    '<b>Username:</b> '+res.username+
                                    '<br><b>Password:</b> '+res.password
                            });

                        }else{

                            Swal.fire({
                                icon:'error',
                                title:'Error',
                                text:res.message
                            });

                        }

                    },
                    error:function(){

                        Swal.fire({
                            icon:'error',
                            title:'Server Error',
                            text:'Something went wrong.'
                        });

                    }
                });

            });

        });
    </script>
@endsection
