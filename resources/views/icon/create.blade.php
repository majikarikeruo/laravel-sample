<x-app-layout>
    <div class="bg-white p-8 container rounded-lg shadow-xl w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-8 text-center text-gray-800">
            新規アイコン登録
        </h1>
        <form action="{{ route('icon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    アイコン画像
                </label>
                <div class="relative border-2 border-gray-300 border-dashed rounded-md p-6 mt-1">
                    <input id="image" name="image" type="file"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                    <div class="text-center">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
                        <p class="mt-1 text-sm text-gray-600">クリックまたはドラッグ＆ドロップで画像をアップロード</p>
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    タイトル
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 border-gray-200 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="title" type="text" name="title" required>

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    説明
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 border-gray-200 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="description" name="description" rows="4"></textarea>
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="w-60 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold py-4 px-4 rounded-full focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105"
                    type="submit">
                    登録する
                </button>
            </div>
        </form>

        </ぢv>
</x-app-layout>
