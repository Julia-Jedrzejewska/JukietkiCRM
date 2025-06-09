<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/53325baaca.js" crossOrigin="anonymous"></script>
</head>
<body>
    <nav class="bg-purple4 h-[8%] min-h-24 min-w-[880px]  w-ful">

            <div class="float-left h-[100%] px-8 inline ">
                <a><img src="{{asset('images/J4.png')}}" class="size-24 cursor-pointer"></a>
            </div>

        <div class="">
            <a>
                <div class="float-right h-[100%] bg-purple4 pt-9 px-9 mr-5 inline-block hover:bg-purple5 transition-all duration-150 cursor-pointer border-b-0 hover:border-b-4 hover:border-white " >
                    <h1 class="text-white text-[28px]"><i class="fa-solid fa-right-to-bracket"></i></h1>
                </div>
            </a>

            <a>
                <div class="float-right h-[100%] bg-purple4 inline-block p-7 mr-6 hover:bg-purple5 transition-all duration-150 cursor-pointer border-b-0 hover:border-b-4 hover:border-white " >
                    <h1 class="text-white text-[28px]">Klienci</h1>
                </div>
            </a>

            <a>
                <div class="float-right h-[100%] bg-purple4 inline-block p-7 mr-6 hover:bg-purple5 transition-all duration-150 cursor-pointer border-b-0 hover:border-b-4 hover:border-white " >
                    <h1 class="text-white text-[28px]">Wydatki</h1>
                </div>
            </a>

            <a>
                <div class="float-right h-[100%] bg-purple4 inline-block p-7 mr-6 hover:bg-purple5 transition-all duration-150 cursor-pointer border-b-0 hover:border-b-4 hover:border-white " >
                    <h1 class="text-white text-[28px]">Zamówienia</h1>

                </div>
            </a>
        </div>

    </nav>


</body>
</html>
