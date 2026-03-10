@props([
'id' => 'datatable',
'columns' => [],
'ajax' => null,
'datatableColumns' => []
])

<table id="{{ $id }}" class="table table-hover table-bordered align-middle w-100">

    <thead class="table-light">
    <tr>
        @foreach($columns as $column)
            <th>{{ $column }}</th>
        @endforeach
    </tr>
    </thead>

    <tbody>
    @if(!$ajax)
        {{ $slot }}
    @endif
    </tbody>

</table>


@push('scripts')

    <script>

        document.addEventListener("DOMContentLoaded",function(){

            $('#{{ $id }}').DataTable({

                processing:true,

                @if($ajax)
                serverSide:true,
                ajax:"{{ $ajax }}",
                columns:@json($datatableColumns),
                @endif

                responsive:true,

                pageLength:10,

                order:[[0,'asc']],

                dom:
                    "<'row mb-3'<'col-md-6 d-flex gap-2'B><'col-md-6 text-end'f>>"+
                    "<'row'<'col-12'tr>>"+
                    "<'row mt-3'<'col-md-6'i><'col-md-6 text-end'p>>",

                buttons: [
                    {
                        extend:'copy',
                        className:'btn btn-outline-secondary btn-sm'
                    },
                    {
                        extend:'excel',
                        className:'btn btn-outline-success btn-sm'
                    },
                    {
                        extend:'csv',
                        className:'btn btn-outline-primary btn-sm'
                    },
                    {
                        extend:'print',
                        className:'btn btn-outline-dark btn-sm'
                    }
                ],

                language:{
                    search:"",
                    searchPlaceholder:"Search..."
                }

            });

        });

    </script>

@endpush
