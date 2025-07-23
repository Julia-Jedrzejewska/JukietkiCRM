<head>
    <title>Strona głowna</title>
</head>
@include('layout.app')

<body>

<main class="bg-purple1 h-[92%] flex flex-col justify-center items-center">

    <div class=" bg-purple3 w-[30%] min-h-[50%] rounded-[40px] overflow-x-auto min-w-[550px] ">
        <h2 class="text-white text-[38px] text-center my-4 font-semibold">Nowy klient</h2>
        <form method="POST" action="{{route('clients.store')}}" >
            @csrf
            <table class="justify-center table-fixed flex my-8 border-separate border-spacing-y-4 w-full">
                <div class="error">
                    @error('name')
                        <li>{{$message}}</li>
                    @enderror
                    @error('email')
                        <li>{{$message}}</li>
                    @enderror
                    @error('phone_number')
                        <li>{{$message}}</li>
                    @enderror
                </div>
                <tr>
                    <td class="text-white text-center text-[34px]">Imię</td>
                    <td><input class="create-table-input" type="text" value="{{old('name')}}" name="name" placeholder="Podaj imię...">
                    </td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Naziwsko</td>
                    <td><input class="create-table-input" type="text" value="{{old('surname')}}" name="surname" placeholder="Podaj nazwisko..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Email</td>
                    <td><input class="create-table-input" type="text" value="{{old('email')}}" name="email" placeholder="Podaj email..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Numer telefonu</td>
                    <td><input class="create-table-input" type="text" value="{{old('phone_number')}}" name="phone_number" placeholder="Podaj numer...">

                    </td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Adres</td>
                    <td><input class="create-table-input" type="text" value="{{old('address')}}" name="address" placeholder="Podaj adres..."></td>
                </tr><tr>
                    <td class="text-white text-center text-[34px]">Komentarz</td>
                    <td><textarea class="h-32 w-[250px] rounded-[10px] ml-6 outline-none text-[22px] p-2" name="comment" placeholder="Dodaj komentarz...">{{old('comment')}}</textarea></td>
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

