<x-app-layout>
    <div class="container mt-4 mb-12">
        <div class="container" id="breadcrumb">
            <p class="text-left py-2 px-5 "> {{ $extraInfo["rooms"][0]->nama_ruangan }} / {{ $extraInfo["categories"][0]->nama_item }} / {{ $produk->nama_produk }}</p>
        </div>
        <div class="container grid grid-cols-2 border rounded h-auto shadow-lg mb-5">
            <div class="col h-full border-r overflow-hidden">
                <img class="w-full border-0 rounded" src="{{ asset( $produk->gambar_produk ) }}" alt="{{ $produk->nama_produk }}">
            </div>
            <div class="col h-full p-8">
                <p class=" text-2xl font-bold mb-5">{{ $produk->nama_produk }}</p>
                <p class="text-xs">Price</p>
                <p class="text-lg mb-4 font-semibold">Rp. {{ number_format($produk->harga_produk, 0, ',', '.')  }}</p>
                <form class="w-full mx-auto" action="{{ route('product.cart') }}" method="POST">
                    @csrf
                    <label for="quantity-input" class=" mb-2 text-sm font-medium text-black inline-block">Choose quantity:</label>
                    <div class="flex mx-auto items-center w-full justify-between">
                        <div class="relative flex items-center w-1/3 border-black border rounded-full px-2 py-1">
                            <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-black  hover:bg-gray-800 border border-black rounded-full p-3  focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                </svg>
                            </button>
                            <input name="quantity" type="text" id="quantity-input" data-input-counter data-input-counter-min="1" data-input-counter-max="{{ $produk->stok_produk }}" aria-describedby="helper-text-explanation" class="bg-white  h-full text-center text-gray-900 text-lg border-0 focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 " placeholder="999" value="1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-black  hover:bg-gray-800 border border-black rounded-full p-3  focus:ring-gray-100  focus:ring-2 focus:outline-none">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                </svg>
                            </button>
                        </div>
                        <input type="text" name="product_id" value="{{ $produk->id_produk }}" class="hidden">
                        <button type="Submit" class="w-1/3 h-full text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-7 py-4 ">Add to Cart</button>
                    </div>
                </form>
                <hr class="h-px my-4 bg-gray-200 border-0">
                <p class=" text-sm">Stock : {{ $produk->stok_produk }}</p>
                <hr class="h-px my-4 bg-gray-200 border-0">
                <p class="text-2xl font-semibold">Description</p>
                <p class="mb-8">{{ $produk->deskripsi_produk }}</p>
                <p class="text-sm">Category : {{ $extraInfo["categories"][0]->nama_item}}</p>
                <p class="text-sm">Room : {{ $extraInfo["rooms"][0]->nama_ruangan }}</p>
            </div>
        </div>
    </div>
    <div class="container my-12">
        <div>
          <h2 class="text-4xl my-1">Recommendation</h2>
          <p>Check Out Our Reccommendation!</p>
        </div>
        <div class="border-0 grid grid-cols-4 justify-evenly">
          @foreach ($produklain as $p)
          <a href="{{ route ('product.page', $p->id_produk)}}" style="width: 18vw; height: 28vw;" class="my-4 no-underline border rounded hover:scale-105 hover:-translate-y-1 ease-linear duration-300 shadow-lg hover:shadow-2xl">
            <div class="h-3/5 block overflow-hidden"><img src="{{ asset( $p->gambar_produk) }}" alt="{{ $p->nama_produk }}" class="w-full h-full object-cover hover:object-contain border-0 rounded-tr rounded-tl "></div>
            <div class="h-1/5 block mx-4 py-2"><p class="text-lg truncate">{{ $p->nama_produk }}</p></div>
            <div class="h-1/5 block mx-4 py-2"><b class="text-sm">Rp. {{ number_format($p->harga_produk, 0, ',', '.') }}</b></div>
          </a>
          @endforeach
        </div>
        </div>

        @session('success')
        <div id="toast-success" class="z-50 fixed bottom-0 left-1/2 transform -translate-x-1/2 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow border-2 border-black " role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">Product added to cart !</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endsession
</x-app-layout>