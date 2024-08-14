<x-app-layout>

    <div class="bg-gray-50 rounded-lg container mx-auto px-6 py-6">
        <header class="mb-8 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">アイコン一覧</h1>
            <div class="flex flex-col sm:flex-row justify-end items-center sm:items-center space-y-4 sm:space-y-0">
                <div class="w-full sm:w-auto">
                    <input type="text" placeholder="アイコンを検索..."
                        class="w-full sm:w-64 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="ml-3">
                    <a href="#"
                        class="w-full sm:w-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg transition duration-300 ease-in-out text-center">
                        新規アイコン登録
                    </a>
                </div>

            </div>
        </header>



        <div class="bg-white rounded-lg shadow overflow-hidden">
            <ul class="divide-y divide-gray-200">
                <li class="flex items-center py-4 px-6 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <img src="https://via.placeholder.com/80" alt="アイコン1" class="w-20 h-20 object-cover rounded-lg">
                    <div class="ml-4 flex-grow">
                        <h2 class="text-lg font-semibold text-gray-800">アイコン名1</h2>
                        <p class="text-sm text-gray-500">作成日: 2023/08/01</p>
                    </div>
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">詳細</a>
                </li>
                <li class="flex items-center py-4 px-6 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <img src="https://via.placeholder.com/80" alt="アイコン2" class="w-20 h-20 object-cover rounded-lg">
                    <div class="ml-4 flex-grow">
                        <h2 class="text-lg font-semibold text-gray-800">アイコン名2</h2>
                        <p class="text-sm text-gray-500">作成日: 2023/08/02</p>
                    </div>
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">詳細</a>
                </li>
                <li class="flex items-center py-4 px-6 hover:bg-gray-50 transition duration-150 ease-in-out">
                    <img src="https://via.placeholder.com/80" alt="アイコン3" class="w-20 h-20 object-cover rounded-lg">
                    <div class="ml-4 flex-grow">
                        <h2 class="text-lg font-semibold text-gray-800">アイコン名3</h2>
                        <p class="text-sm text-gray-500">作成日: 2023/08/03</p>
                    </div>
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">詳細</a>
                    <form action="" class="ml-8">
                        <button class="text-red-500 hover:text-red-600 font-medium">削除</button>
                    </form>
                </li>
            </ul>
        </div>

        <div class="mt-8 flex justify-center">
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">前へ</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">次へ</a>
            </nav>
        </div>
    </div>


</x-app-layout>
