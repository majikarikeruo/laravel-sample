<li class="flex items-center py-4 px-6 hover:bg-gray-50 transition duration-150 ease-in-out">
    <img src="{{ asset('storage/' . $icon->image_path) }}" alt="アイコン1" class="w-20 h-20 object-cover rounded-lg">
    <div class="flex flex-col md:block ml-4">
        <div class=" flex-grow">
            <h2 class="mb-2 text-lg font-semibold text-gray-800">{{ $icon->title }}</h2>
            <p class="text-sm text-gray-500">{{ $icon->created_at }}</p>
            <p class="text-sm text-gray-500 mt-1">{{ $icon->user->name }}</p>
        </div>
        <div class="flex mt-3">
            <a href="{{ route('icon.edit', ['icon' => $icon->id]) }}" class="text-blue-500 hover:text-blue-600 font-medium">編集</a>

            <form action="{{ route('icon.destroy', ['icon' => $icon->id]) }}" method="POST" class="ml-6"
                onsubmit="return window.confirm('選択したアイコンを本当に削除しますか？')">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-red-600 font-medium" type="submit">削除</button>
            </form>
        </div>

    </div>
</li>
