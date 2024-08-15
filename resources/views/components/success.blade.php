@if(session('success'))
    <div class="mb-4 px-2 py-3 bg-blue-200 text-blue-500">
        {{ session('success') }}
    </div>
@endif
