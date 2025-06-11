<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title', 'JukeitkiCRM')</title>
    <script src="https://kit.fontawesome.com/53325baaca.js" crossOrigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="bg-purple4 h-[8%] min-h-24 min-w-[880px]  w-full">

                <div class="float-left h-[100%] px-8 inline ">
                    <a href="{{route('main')}}"><img src="{{asset('images/J4.png')}}" class="size-24 cursor-pointer"></a>
                </div>

            <div>
                <a href="{{route('clients.index')}}" class="nav-item">Klienci</a>

                <a href="{{route('expenses.index')}}" class="nav-item">Wydatki</a>

                <a href="{{route('orders.index')}}" class="nav-item">Zamówienia</a>
            </div>
        </nav>
    </header>

    <main>

        @yield('content')

    </main>

</body>
</html>
