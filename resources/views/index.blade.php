<!doctype html>
<html lang="en">
{{-- https://www.canva.com/colors/color-palettes/gingerbread-ice-cream/ --}}

<head>
    <title>Zoro Indonesia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="main.css"/>
</head>

<body style="margin: 0 auto;">
    <header>
        <nav class="w-full border-b-2 border-black flex flex-wrap justify-between items-center ">
            <div class="w-1/5">
                <a href="/" class="mx-3 flex justify-center p-3 content-center text-2xl">Z O R O</a>
            </div>
            <div class="w-3/5">
                <form class="w-full mx-auto my-7" action="{{ route('search.text') }}" method="GET">
                  @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="query" value="{{ request()->query('query') }}"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-500 rounded-lg "
                            placeholder="Search Products..." required />
                          <button type="button" data-modal-target="gambar-modal" data-modal-toggle="gambar-modal" class=" absolute end-28 h-4/6 bottom-2.5  focus:ring-4 focus:outline-none focus:ring-gray-600 rounded-lg px-4 py-2 hover:bg-gray-800 bg-black">
                            <i class="bi bi-image text-center" style="font-size: 1rem; color: white;"></i>
                          </button>
                          <button type="submit" class="text-white absolute end-2.5 bottom-2.5 h-4/6 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-6 py-2 hover:bg-gray-800 bg-black">Search</button>
                   </div>
                </form>
            </div>
            <div class="w-1/5 flex">
              <div class="justify-between flex mx-6">
                <a href="#" class="p-2 rounded-full hover:bg-black hover:stroke-white mx-3 ease-linear duration-100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" >
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                  </svg>
                </a>
                <a href="#" class="p-2 rounded-full hover:bg-black hover:stroke-white mx-3 ease-linear duration-100">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16" class="p-2 rounded-full hover:bg-black">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                  </svg>
                </a>
              </div>
            </div>
        </nav>
    </header>
    <main class="w-4/5 mx-auto">
      <div class="container my-5">
          <div class="first-slider">
              <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g" class="rounded" alt="ikal">
              <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g" class="rounded" alt="ikal">
              <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g" class="rounded" alt="ikal">
          </div>
      </div>

      <div class="container my-5">
        <h2 class="text-4xl my-1">Category</h2>
        <p>Explore Our Vast List Of Category</p>
        <div class="container my-1" >
          <div class="second-slider">
            @foreach ($kategori as $k)
            <a class="border rounded m-4 hover:brightness-75 shadow-sm ease-in duration-200" style="height:30vw;" href="#">
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
        <div class="border-0 flex flex-wrap justify-evenly">
          @foreach ($produk as $p)
          <a href="{{ route ('product.page', $p->id_produk)}}" style="width: 18vw; height: 28vw;" class="my-4 no-underline border rounded hover:scale-105 hover:-translate-y-1 ease-linear duration-300 shadow-lg hover:shadow-2xl">
            <div class="h-3/5 block overflow-hidden"><img src="{{ $p->gambar_produk }}" alt="{{ $p->nama_produk }}" class="w-full h-full object-cover hover:object-contain border-0 rounded-tr rounded-tl "></div>
            <div class="h-1/5 block mx-4 py-2"><p class="text-lg truncate">{{ $p->nama_produk }}</p></div>
            <div class="h-1/5 block mx-4 py-2"><b class="text-sm">Rp. {{ $p->harga_produk }}</b></div>
          </a>
          @endforeach
        </div>
      </div>
    </main>
    
    {{-- Modal semua --}}

  <!-- Gambar modal -->
    <div id="gambar-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-lg font-semibold text-gray-900 ">
                        Find products based on images
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="gambar-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-center w-full my-4">
                      <form class="w-full mx-2" action="{{ route('search.image') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <label id="upload-area" for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" name="file" class="hidden" onchange="showPreview(event)"/>
                          </label>
                          <div class="hidden items-center justify-center w-full my-4 mx-0" id="preview-area">
                            <img src="" alt="No Image" id="preview-img">
                          </div> 
                          <button disabled id="submitImg" type="submit" class="text-white my-3 inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                              Find Product
                          </button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

  <footer class="bg-white rounded-lg shadow dark:bg-black m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Z O R O </span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">Z O R O™</a>. All Rights Reserved.</span>
    </div>
  </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <script type="text/javascript" src="main.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}

</body>

</html>
