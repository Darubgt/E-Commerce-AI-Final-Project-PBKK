<x-app-layout class="">
    <div class="container mt-9">
        <div>
            <h2 class="text-4xl my-1">Shopping Cart</h2>
            <p>Confirm your payment</p>
        </div>
    </div>

    <div class="container mt-2 flex">
        <div class="flex-1">
        @if (count($carts))
        <div class="hidden">
            {{$totalQuantity = 0}}
            {{$totalPrice = 0}}
        </div>
        @foreach ($carts as $c)
        @php
            $p = \App\Models\Produk::findOrFail($c->product_id);
        @endphp
        <div class="hidden">
            {{$totalQuantity += $c->quantity }}
            {{$totalPrice += ($p->harga_produk * $c->quantity) }}
        </div>
            <div class="my-4 flex h-56 border hover:ring-2 ring-gray-600 border-black shadow-lg p-4 rounded-xl mr-20 ease-linear duration-100">
                <img src="{{asset($p->gambar_produk)}}" alt="{{ $p->nama_produk}}" class="h-full object-cover hover:object-contain border rounded-2xl border-black ">
                <div class="p-8 flex flex-col h-full w-full">
                    <p class=" text-2xl font-bold">{{ $p->nama_produk}}</p>
                    <p class=" text-gray-500 text-sm">{{ $p->deskripsi_produk}}</p>
                    <div class="flex mt-auto items-center">
                        <p class=" flex-grow">Quantity : {{ $c->quantity}}</p>
                        <div class=" text-right flex items-center">
                            <form action="{{ route("product.deletecart")}}" method="POST">
                                @csrf
                                <input type="text" name="cartid" value="{{$c->id}}" class="hidden">
                                <button type="submit">
                                    <i class="bi bi-trash3 text-sm mr-4" fill="currentColor"></i> 
                                </button>
                            </form>
                            <p class="text-xl font-bold">Rp. {{  number_format(($p->harga_produk * $c->quantity), 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="w-full h-80 flex items-center justify-center">
                <p class="font-bold text-2xl"> You haven't added anything yet</p>
            </div>
        @endif
        </div>
        <div class="border border-black rounded-xl min-w-80 shadow-xl divide-y divide-gray-600 h-fit my-4">
            <div class="p-4">
                <div class="w-full bg-green-100 border-2 border-green-500 rounded-xl h-12 flex items-center px-5 hover:scale-105 ease-linear duration-100">
                        <p> <i class="bi bi-ticket-perforated pr-1"></i> Promo</p>
                </div>
            </div>
            <div class="space-y-2 w-full px-4 py-8">
            @if (count($carts))
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Subtotal Product ({{ $totalQuantity  }} Item)</span>
                  <span class="font-medium">Rp. {{ number_format($totalPrice, 0, ',', '.')}}</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Shipping Cost</span>
                  <span class="font-medium">Rp. 500.000</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Tax</span>
                  <span class="font-medium">Rp. {{ number_format(($totalPrice + 500000) / 10, 0, ',', '.') }}</span>
                </div>
                <div class="flex justify-between text-xl font-bold">
                  <span class="text-black">Total Cost</span>
                  <span class="">Rp. {{ number_format((($totalPrice + 500000) / 10 + $totalPrice + 500000), 0, ',', '.') }}</span>
                </div>
              </div>
              @else
              <div class="flex justify-between text-sm">
                <span class="text-black">Your total cost will appear here</span>
                <span class=""></span>
              </div>
            </div>
              @endif
              <div class="p-4">
                  <form action="{{ route("product.payment")}}">
                      <button class="bg-black rounded-xl text-white w-full p-3 hover:ring-2 ring-gray-600 ease-linear duration-100">Proceed With Payment</button>
                  </form>
              </div>
        </div>
    </div>
    @session('success')
        <div id="toast-success" class="z-50 fixed bottom-0 left-1/2 transform -translate-x-1/2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-gray-300 shadow-xl rounded-lg" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endsession
</x-app-layout>

