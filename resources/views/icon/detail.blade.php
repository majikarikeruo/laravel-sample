<x-app-layout>
    <div class="bg-white p-8 container rounded-lg shadow-xl w-full max-w-xl mx-auto">
        <h1 class="text-2xl font-bold mb-8 text-center text-gray-800">
            アイコン情報{{ $is_edit ? '編集':'登録' }}
        </h1>
        @include('components.error')




        <form action="{{ $is_edit ? route('icon.update', $icon->id) : route('icon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($is_edit) @method('PUT') @endif
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    アイコン画像
                </label>
                <div class="relative border-2 border-gray-300 border-dashed rounded-md p-6 mt-1">
                    <input id="image" name="image" type="file"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                    <div class="text-center">
                        <p class="mt-1 text-sm text-gray-600">クリックまたはドラッグ＆ドロップで新しい画像をアップロード</p>
                    </div>
                </div>
                <div id="imagePreviewContainer" class="mt-4 @if(!$is_edit) hidden @endif">
                    <h2 class="text-sm font-bold">現在のアイコン画像</h2>
                    <div id="imagePreview">
                        @if(isset($icon->image_path))
                            <img src="{{ Storage::url($icon->image_path) }}" alt="{{ $icon->title }}" class="mt-2 max-w-full h-auto">
                        @endif
                    </div>

                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    タイトル
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 border-gray-200 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="title" type="text" name="title" value="{{ old('title', $is_edit ? $icon->title : '') }}" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    説明
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 border-gray-200 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500"
                    id="description" name="description" rows="4">{{old('description', $is_edit ? $icon->description : '')}}</textarea>
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="w-60 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-bold py-4 px-4 rounded-full focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105"
                    type="submit">
                    @if ($is_edit)更新する @else 登録する @endif
                </button>
            </div>
        </form>

        <div class="mt-10">
            <a href="{{ route('dashboard') }}" class="text-blue-500 text-sm hover:text-blue-600 font-medium">一覧に戻る</a>
        </div>
    </div>
</x-app-layout>
