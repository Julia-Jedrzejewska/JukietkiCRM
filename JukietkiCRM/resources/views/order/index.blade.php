<head>
    <title>Zamówienia</title>
</head>
@include('layout.app')

<body>

<div>

<main class="bg-purple1 h-[92%] flex flex-col justify-center items-center">
    <h2 class="text-[30px] text-center mb-3 text-purple5 font-bold">Zamówienia</h2>
    <div class=" bg-purple3 w-[90%] min-h-[92%] rounded-[30px]">

        <div class="bg-purple1 flex flex-col justify-between w-[96%] min-h-[97%] mx-[2%] mt-[1%] rounded-[30px] overflow-x-auto">

            <table class="table-auto w-full h-[5%] text-center">
                <tr class="bg-purple4 h-[55px] w-full ">
                    <td class="min-w-[50px] rounded-l-[30px] table-item-th"> Id</td>
                    <td class="min-w-[180px] table-item-th">Klient</td>
                    <td class="min-w-[120px] table-item-th">Status</td>
                    <td class="min-w-[80px] table-item-th">Cena</td>
                    <td class="min-w-[200px] table-item-th">Zamówienie</td>
                    <td class="min-w-[120px] table-item-th">Termin</td>
                    <td class="min-w-[200px] table-item-th">Komentarz</td>
                    <td class="min-w-[100px] rounded-r-[30px] text-white text-[28px]">
                        <a href="{{route('orders.create')}}">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </a>
                    </td>
                </tr>
                <tr class="bg-purple1">
                    <td class="h-[30px]"></td>
                </tr>
                @foreach($orders as $o)
                <tr class="bg-purple3 h-auto border-b-4 border-purple2">
                    <td class="table-item-td">{{$o->id}}</td>
                    <td class="table-item-td">{{$o->client->name ?? " "}} {{$o->client->surname ?? " "}}</td>
                    <td class="table-item-td">{{$o->order_status}}</td>
                    <td class="table-item-td">{{$o->price}}</td>
                    <td class="table-item-td">{{ $o->order_items }}</td>
                    <td class="table-item-td">{{$o->end_date}}</td>
                    <td class="table-item-td">{{$o->comment}}</td>
                    <td class=" text-white text-[28px] flex gap-3 justify-center mt-[30px]">
                        <form method="get" action="" class="flex">
                            @csrf
                            <button>
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </form>
                        <form action="" method="get">
                            @csrf
                            <button>
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="justify-center">
                {{$orders->links('vendor.pagination.custom')}}
            </div>
        </div>
    </div>
</main>
</div>
</body>
