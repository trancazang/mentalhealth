<!-- resources/views/layouts/header.blade.php -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<header>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo Forum Chăm Sóc Sức Khỏe"></a>
        </div>

        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li><a href="{{ route('forum') }}">Diễn Đàn</a></li>
                <li><a href="{{ route('health-tips') }}">Kiểm tra sức khoẻ</a></li>
                <li><a href="{{ route('about') }}">Về Chúng Tôi</a></li>
                <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search-bar">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Tìm kiếm chủ đề, bài viết...">
                <button type="submit">Tìm Kiếm</button>
            </form>
        </div>
    </div>
</header>
