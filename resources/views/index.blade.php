<x-app-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <div class="container my-5">
    <div class="first-slider">
        <img src="{{asset("HeaderIklan/1.png")}}" class="rounded-3xl border-4 border-black" alt="ikal">
        <img src="{{asset("HeaderIklan/2.png")}}" class="rounded-3xl border-4 border-black" alt="ikal">
        <img src="{{asset("HeaderIklan/3.png")}}" class="rounded-3xl border-4 border-black" alt="ikal">
    </div>
  </div>
  
  <div class="container my-5">
  <h2 class="text-4xl my-1">Category</h2>
  <p>Explore Our Vast List Of Categories</p>
  <div class="container my-1" >
    <div class="second-slider">
      @foreach ($kategori as $k)
      <a class="border rounded m-4 hover:brightness-75 shadow-sm ease-in duration-200" style="height:30vw;" href="{{ route ('search.category', $k->id_item) }}">
        <div class=" overflow-hidden h-5/6"><img src="{{$k->gambar_item}}" alt="{{$k->nama_item}}" class="w-full h-full object-cover border-0 rounded-tr rounded-tl"></div>
        <div class="h-1/6 text-center no-underline bg-black text-white block items-center rounded-bl rounded-br content-center"><p class="p-2 justify-center items-center">{{$k->nama_item}}</p></div>
      </a>
      @endforeach
    </div>
  </div>
  
  <div class="container">
  <div>
    <h2 class="text-4xl my-1">Recommendation</h2>
    <p>Check Out Our Reccommendation!</p>
  </div>
  <div class="border-0 grid grid-cols-4 justify-evenly">
    @foreach ($produk as $p)
    <a href="{{ route ('product.page', $p->id_produk)}}" style="width: 18vw; height: 28vw;" class="my-4 no-underline border rounded hover:scale-105 hover:-translate-y-1 ease-linear duration-300 shadow-lg hover:shadow-2xl">
      <div class="h-3/5 block overflow-hidden"><img src="{{ asset( $p->gambar_produk) }}" alt="{{ $p->nama_produk }}" class="w-full h-full object-cover hover:object-contain border-0 rounded-tr rounded-tl "></div>
      <div class="h-1/5 block mx-4 py-2"><p class="text-lg truncate">{{ $p->nama_produk }}</p></div>
      <div class="h-1/5 block mx-4 py-2"><b class="text-sm">Rp. {{ number_format($p->harga_produk, 0, ',', '.') }}</b></div>
    </a>
    @endforeach
  </div>
  </div>
</x-app-layout>
