<x-guest-layout>

    <body>
        <header class="header">
            <div class="p-3 flex  flex-col justify-center items-center">
                <h1 class="mb-2 text-xs font-bold text-gray-800">コスゲリアン.com | 無料で楽しく利用できる素材サイト</h1>
                <p class="level-item column logo has-text-centered">
                    <a href="https://kosugelian.net" class="flex">
                        <img src="{{ asset('images/stamp18.png') }}" alt="" width="80">
                        <img src="{{ asset('images/logo.svg') }}" alt="コスゲリアン" width="160" class="typo-logo">
                    </a>
                </p>
            </div>
        </header>

        <div class="bg-[#18c5ff] mt-4">
            <nav class="container mx-auto p-4">
                <ul class=" flex justify-between gap-4">
                    <li class="">
                        <a class="text-white" href="#">コスゲリアンについて</a>
                    </li>
                    <li class="">
                        <a class="text-white" href="#">素材の使い方・規約</a>
                    </li>
                    <li class="">
                        <a class="text-white" href="#">コスゲリアン体操</a>
                    </li>
                    <li class="">
                        <a class="text-white" href="#">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="container mt-8 mx-auto px-2 md:px-6 py-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Illustration <span class="text-sm text-gray-400 block mb-4">素材イラスト一覧</span></h2>
            <p class="section-message">スマートフォンをお使いの場合は、画像を長押しするなどして<br>
                「イメージを保存（iPhoneの場合）」などをご選択の上、<br>
                素材をダウンロードいただいて問題ありません。</p>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8 mt-4">
                @foreach ($icons as $icon)
                <div class=" p-4">
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $icon->image_path) }}" alt="">
                    </div>
                    <p class="text-sm text-blue-500 mb-4">{{ $icon->title }}</p>
                    <div class="entry-footer">
                        <form action="{{ route('download') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $icon->image_path }}" name="filename">
                            <button class="button is-outlined entry-link">
                                <span class="flex items-center justify-center gap-2 text-sm"><img src="{{ asset('images/download.svg') }}" width="20" alt="" class="text-sm">素材ダウンロード</span>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



        <div class="text-center mt-4">
            <ul class="flex justify-center gap-4">
                <li class="banner-item">
                    <a href="https://store.line.me/stickershop/product/1450874/ja" target="_blank"><img src="https://kosugelian.net/images/banner.png" alt="LINEスタンプ・コスゲの日常発売中"></a>
                </li>
            </ul>
        </div>

        <footer class="bg-gray-500 p-4 mt-8">
            <div class="text-center text-white">
                <small class="copyrights">copyrights©2024 コスゲリアン.com All Rights Resereved.</small>
            </div>
        </footer>
    </body>
</x-guest-layout>
