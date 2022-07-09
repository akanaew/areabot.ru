<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AreaBot - поиск заказов для фрилансеров</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="logo">
                <img src="/images/logo.png" alt="" class="logo__images">
            </div>
            <div class="short-info">
                <p class="short-info__text">Всего пользователей: <span class="accent">1786 чел.</span></p>
                <p class="short-info__text">Оплатили подписку: <span class="accent">1786 чел.</span></p>
            </div>
            <div class="user-area">
                <div class="avatar">
                    <img src="/images/avatar.png" alt="" class="avatar__images">
                </div>
                <div class="user-area__content">
                    <p class="user-area__name">AreaBot</p>
                    <p class="user-area__role">Админ</p>
                </div>
                <div class="user-area__action" role="button">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_93_117)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.8002 1.60001C4.37585 1.60001 3.96888 1.76858 3.66882 2.06864C3.36877 2.36869 3.2002 2.77566 3.2002 3.20001V20.8C3.2002 21.2244 3.36877 21.6313 3.66882 21.9314C3.96888 22.2314 4.37585 22.4 4.8002 22.4H16.8002C17.0124 22.4 17.2159 22.3157 17.3659 22.1657C17.5159 22.0157 17.6002 21.8122 17.6002 21.6C17.6002 21.3878 17.5159 21.1844 17.3659 21.0343C17.2159 20.8843 17.0124 20.8 16.8002 20.8H4.8002V3.20001H16.8002C17.0124 3.20001 17.2159 3.11572 17.3659 2.96569C17.5159 2.81566 17.6002 2.61218 17.6002 2.40001C17.6002 2.18783 17.5159 1.98435 17.3659 1.83432C17.2159 1.68429 17.0124 1.60001 16.8002 1.60001H4.8002ZM20.1666 7.83361C20.0164 7.68339 19.8126 7.599 19.6002 7.599C19.3878 7.599 19.184 7.68339 19.0338 7.83361C18.8836 7.98383 18.7992 8.18757 18.7992 8.40001C18.7992 8.61245 18.8836 8.81619 19.0338 8.96641L21.269 11.2H10.4002C10.188 11.2 9.98454 11.2843 9.83451 11.4343C9.68448 11.5844 9.6002 11.7878 9.6002 12C9.6002 12.2122 9.68448 12.4157 9.83451 12.5657C9.98454 12.7157 10.188 12.8 10.4002 12.8H21.269L19.0338 15.0336C18.8836 15.1838 18.7992 15.3876 18.7992 15.6C18.7992 15.8124 18.8836 16.0162 19.0338 16.1664C19.184 16.3166 19.3878 16.401 19.6002 16.401C19.8126 16.401 20.0164 16.3166 20.1666 16.1664L23.7666 12.5664C23.8411 12.4921 23.9002 12.4038 23.9405 12.3066C23.9809 12.2094 24.0016 12.1052 24.0016 12C24.0016 11.8948 23.9809 11.7906 23.9405 11.6934C23.9002 11.5962 23.8411 11.5079 23.7666 11.4336L20.1666 7.83361Z" fill="black" fill-opacity="0.5"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_93_117">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="page-title">
            <h1 class="page-title__text">@isset($title) {{$title}} @endif</h1>
        </div>
        @yield('content')
    </main>
    @yield('modal')
    <script src="/scripts/main.js"></script>
</body>
</html>
