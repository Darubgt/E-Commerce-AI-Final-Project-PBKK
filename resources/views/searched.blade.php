<x-app-layout>
  <div class="container min-h-screen">
    <div>
      <h2 class="text-4xl mt-4 mb-1">Result</h2>
      <p>Showing products for 
        @if (session('image'))
          "{{session('image')}}"
        @else
        "{{ request()->query('query') ?? "Products" }}"
        @endif
      </p>
    </div>
    <div class="border-0 grid grid-cols-4 justify-evenly">
    @if (count($produk))
      @foreach ($produk as $p)
      <a href="{{ route ('product.page', $p->id_produk)}}" style="width: 18vw; height: 28vw;" class="my-4 no-underline border rounded hover:scale-105 hover:-translate-y-1 ease-linear duration-300 shadow-lg hover:shadow-2xl">
        <div class="h-3/5 block overflow-hidden"><img src="{{ asset( $p->gambar_produk) }}" alt="{{ $p->nama_produk }}" class="w-full h-full object-cover hover:object-contain border-0 rounded-tr rounded-tl "></div>
        <div class="h-1/5 block mx-4 py-2"><p class="text-lg truncate">{{ $p->nama_produk }}</p></div>
        <div class="h-1/5 block mx-4 py-2"><b class="text-sm">Rp. {{ number_format($p->harga_produk, 0, ',', '.') }}</b></div>
      </a>
      @endforeach
    @else
      <div>Product not found</div>
    @endif
    </div>
  </div>
</x-app-layout>