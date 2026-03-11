<div class="card h-100">

    <div class="card-body">

        @isset($title)
            <div class="card-title">
                {{ $title }}
            </div>
        @endisset

        {{ $slot }}

    </div>

</div>
