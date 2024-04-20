<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/js/app.js',])
    <title>ホテル予約サイト</title>
</head>
<body>
    {{-- 共通のナビゲーションバー --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/top') }}">ホテル予約サイト</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/access') }}">お部屋</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/access') }}">プラン一覧</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/access') }}">アクセス</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/access') }}">お問合せ</a>
                </li>
            </div>
        </div>
    </nav>
    {{-- メインコンテンツ --}}
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
