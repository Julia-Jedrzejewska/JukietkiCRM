<head>
    <title>Klienci</title>
</head>
@include('layout.app')

<body>

<div>

<main class="bg-purple1 h-[92%] flex flex-col justify-center items-center">
    <h2 class="text-[30px] text-center mb-3 text-purple5 font-bold">Klienci</h2>
    <div class=" bg-purple3 flex flex-col w-[90%] min-h-[92%] rounded-[30px]">

        <div class="bg-purple1 flex flex-col justify-between w-[96%] min-h-[97%] mx-[2%] mt-[1%] rounded-[30px] overflow-x-auto">

            <table class="table-auto w-full h-[5%] text-center overflow-y-auto">
                <tr class="bg-purple4 h-[55px] w-full ">
                    <td class="min-w-[50px] rounded-l-[30px] table-item-th"> Id</td>
                    <td class="min-w-[120px] table-item-th">Klient</td>
                    <td class="min-w-[80px] table-item-th">Numer telefonu</td>
                    <td class="min-w-[180px] table-item-th">Email</td>
                    <td class="min-w-[180px] table-item-th">Adres</td>
                    <td class="min-w-[120px] table-item-th">Komentarz</td>
                    <td class="min-w-[80px] rounded-r-[30px] text-white text-[28px]">
                        <a href="{{route('clients.create')}}">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </a>
                    </td>
                </tr>
                <tr class="bg-purple1">
                    <td class="h-[30px]"></td>
                </tr>
                @foreach($clients as $client)
                <tr class="bg-purple3 h-auto border-b-4 border-purple2">
                    <td class="table-item-td">{{$client->id}}
                    </td>
                    <td class="table-item-td">{{$client->name}} {{$client->surname}}</td>
                    <td class="table-item-td">{{$client->phone_number}}</td>
                    <td class="table-item-td">{{$client->email}}</td>
                    <td class="table-item-td">{{$client->address}}</td>
                    <td class="table-item-td">{{$client->comment}}</td>
                    <td class=" text-white text-[28px] flex gap-3 justify-center mt-[30px]">
                        <form method="get" action="" class="flex">
                            @csrf
                            <button>
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="{{route('clients.destroy', $client->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('ar ju siur?')" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="justify-center">
                {{$clients->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
</main>
</div>
</body>
