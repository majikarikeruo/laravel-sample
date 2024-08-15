@if(session('error'))
    <div class="mb-4 px-3 py-3 bg-red-200 text-red-500">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
<div class="mb-4 px-3 py-3 bg-red-200 text-red-500">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
