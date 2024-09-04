<x-app-layout>

    <div class="bg-gray-50 rounded-lg container mx-auto px-6 py-6">

        <header class="mb-8 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-gray-800">アイコン一覧</h1>
                <div class="ml-8">
                    <a href="{{ route('icon.create') }}"
                        class="w-full text-[13px] sm:w-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 ease-in-out text-center">
                        新規アイコン登録
                    </a>
                </div>
            </div>
            @include('icon.partials.search-form')
        </header>

        @include('components.success')
        @include('components.error')


        <div class="bg-white rounded-lg shadow overflow-hidden">
            <ul class="divide-y divide-gray-200">
                @foreach ($icons as $icon)
                    @include('icon.partials.icon-item')
                @endforeach
            </ul>
        </div>

        {{ $icons->links('components.paginate') }}
    </div>
</x-app-layout>
