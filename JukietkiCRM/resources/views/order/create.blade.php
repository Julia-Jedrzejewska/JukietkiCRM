<head>
    <title>Strona głowna</title>
</head>
@include('layout.app')

<body>

<main class="bg-purple1 h-[92%] flex flex-col justify-center items-center">

    <div class=" bg-purple3 w-[30%] min-h-[50%] rounded-[40px] overflow-x-auto min-w-[550px] ">
        <h2 class="text-white text-[38px] text-center my-4 font-semibold">Nowe zamówienie</h2>
        <form method="POST" action="{{route('orders.store')}}" >
            @csrf
            <table class="justify-center table-fixed flex my-8 border-separate border-spacing-y-4 w-full">
                <div class="error">
                    @error('client_id')<li>{{$message}}</li>@enderror
                    @error('order_status')<li>{{$message}}</li>@enderror
                    @error('price')<li>{{$message}}</li>@enderror
                    @error('order_items')<li>{{$message}}</li>@enderror
                    @error('end_date')<li>{{$message}}</li>@enderror
                </div>
                <tr>
                    <td class="text-white text-center text-[34px]">Klient</td>
                    <td class="relative">
                        <select id="select" name="client_id" class="create-table-input text-gray-400 hover:cursor-pointer">
                            <option value="" selected disabled hidden class="text-gray-400">Wybierz opcje...</option>
                            @foreach($clients as $client)
                                <option value="{{$client->id}}" class="text-gray-800">{{$client->name}} {{$client->surname}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="mt-4">
                    <td class="text-white text-center text-[34px]">Status</td>
                    <td>
                        <select id="select" name="order_status" class="create-table-input text-gray-400 hover:cursor-pointer">
                            <option value="nowe" selected disabled hidden class="text-gray-400">Wybierz opcje...</option>
                            <option value="nowe" class="text-gray-800">nowe</option>
                            <option value="w realizacji" class="text-gray-800">w realizacji</option>
                            <option value="zrealizowane" class="text-gray-800">zrealizowane</option>
                            <option value="anulowane" class="text-gray-800">anulowane</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Cena</td>
                    <td><input class="create-table-input" type="text" name="price" placeholder="Podaj cenę..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Zamówienie</td>
                    <td><input class="create-table-input" type="text" name="order_items" placeholder="Podaj zamówienie..."></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Termin</td>
                    <td><input class="create-table-input text-gray-400" name="end_date" type="date" id="dateInput"></td>
                </tr>
                <tr>
                    <td class="text-white text-center text-[34px]">Komentarz</td>
                    <td><textarea name="comment" class="h-32 w-[250px] rounded-[10px] ml-6 outline-none text-[22px] p-2" placeholder="Dodaj komentarz..."></textarea></td>
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

{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>--}}
{{--<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}




{{--<script type="text/javascript">--}}
{{--    $(document).ready(function(){--}}

{{--        $('#search').on('keyup', function(){--}}
{{--            var query = $(this).val();--}}

{{--            $.ajax({--}}
{{--                url: "search",--}}
{{--                type: "GET",--}}
{{--                data: {'search' : query},--}}

{{--                success:function(data){--}}
{{--                    $('#search_list').html(data);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--    })--}}
{{--</script>--}}

