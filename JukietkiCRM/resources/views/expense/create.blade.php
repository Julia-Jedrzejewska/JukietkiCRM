<head>
    <title>Strona głowna</title>
</head>
@include('layout.app')

<body>

<main class="bg-purple1 h-[92%] flex flex-col justify-center items-center">

    <div class=" bg-purple3 w-[30%] min-h-[50%] rounded-[40px] overflow-x-auto min-w-[550px] ">
        <h2 class="text-white text-[38px] text-center my-4 font-semibold">Nowy wydatek</h2>
        <form method="POST" action="{{route('expenses.store')}}" >
            @csrf
            <table class="justify-center table-fixed flex my-8 border-separate border-spacing-y-4 w-full">

                <tr class="mt-4">
                    <td class="text-white text-center text-[34px]">Kategoria</td>
                    <td>
                        <select id="select" name="category" class="create-table-input text-gray-400 hover:cursor-pointer">
                            <option value="" selected disabled hidden class="text-gray-400">Wybierz opcje...</option>
                            <option value="promocja_firmy" class="text-gray-800">promocja firmy</option>
                            <option value="materiały" class="text-gray-800">materiały</option>
                            <option value="inne" class="text-gray-800">inne</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="text-white text-center text-[34px]">Cena</td>
                    <td><input class="create-table-input" type="text" name="price" placeholder="Podaj cenę..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Link</td>
                    <td><input class="create-table-input" type="text" name="link" placeholder="Podaj link..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Data</td>
                    <td><input class="create-table-input text-gray-400 " type="date" name="date" id="dateInput"></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Komentarz</td>
                    <td><textarea class="h-32 w-[250px] rounded-[10px] ml-6 outline-none text-[22px] p-2" name="comment" placeholder="Dodaj komentarz..."></textarea></td>
                </tr>
                <tr>
                    <td class="create-table-input"><button type="reset" class="create-table-button">Reset</button></td>
                    <td class="create-table-input"><button class="create-table-button">Zatwierdź</button></td>
                </tr>
            </table>
        </form>
    </div>
</main>
@vite(['resources/js/app.js'])
</body>

