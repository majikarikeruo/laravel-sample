<div
    class="w-full md:flex flex-col sm:flex-row w-full justify-between items-center sm:items-center space-y-4 sm:space-y-0">
    <form action="{{ route('dashboard') }}" method="GET" class="w-full">
        <div class="flex items-center w-full">
            <input type="text" name="search" placeholder="アイコンを検索..." value="{{ request('search') }}"
                class="flex-grow sm:w-64 px-4 py-2  border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                class="w-32 ml-2 px-4 py-2 font-bold bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                検索
            </button>
        </div>
    </form>
</div>
