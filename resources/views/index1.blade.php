<!doctype html>
<html lang="en">
{{-- https://www.canva.com/colors/color-palettes/gingerbread-ice-cream/ --}}
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css"/>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand border-bottom ">
            <div class="container w-90 d-flex">
                <div class="container w-20">
                    <div class="navbar-brand p-4 w-100">
                        Z A L O R A D U L U
                    </div>
                </div>
                <div class="container w-60">
                    <form class="d-flex w-100">
                        <input class="form-control mr-0" type="search" placeholder="Search items" style="border-radius: 10px 0 0 10px"
                            aria-label="Search" />
                        <button class="btn bg-light ml-0 border" type="submit" style="border-radius: 0 10px 10px 0">Search</button>
                    </form>
                </div>
                <div class="container w-20">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                  </svg>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container w-100 rounded mb-5">
            <div id="carouselExample" class="carousel slide mt-4 mb-4 rounded">
                <div class="carousel-inner">
                    <div class="carousel-item active popoff">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g"
                            class="d-block w-100 rounded"
                            alt="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g">
                    </div>
                    <div class="carousel-item popoff">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g"
                            class="d-block w-100 rounded"
                            alt="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g">
                    </div>
                    <div class="carousel-item popoff">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g"
                            class="d-block w-100 rounded"
                            alt="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/9/30/cf2d041d-36c9-4fcc-aadf-22c13a69c89a.jpg?ect=4g">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container mb-5">
          <div class="row mb-1">
            <div class="col-12">
              <div class="text-wrap">
                <h2 class="display-7">Category</h2>
                  Explore our vast category
              </div>
            </div>
          </div>
          <div class="slider">
            @for ($i = 0; $i < 10; $i++)
            <a class="card m-3 overflow-hidden popoff" href="#">
              <img src="https://img.freepik.com/free-photo/picture-frame-by-velvet-armchair_53876-132788.jpg?size=626&ext=jpg&ga=GA1.1.1819120589.1728086400&semt=ais_hybrid" alt="" style="height: auto; width:100%;">
              <div class="card-img-overlay">
              </div>
              <div class="card-footer text-center">Kategori</div>
            </a>
              
            @endfor
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="text-wrap">
                <h2 class="display-7">Reccomendation</h2>
                Our Recomendation
              </div>
            </div>
          </div>
          <div class="row">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            @for ($i = 0; $i < 17; $i++)
              <div class="col">
                <a class="card product-card border-0" href="#">
                  <img src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title mb-3" style="overflow:hidden; text-overflow:ellipsis; white-space:nowrap">Dior Sauvage Super Mahal Gila Ngapain Beli</h5>
                    <b><p class="card-text mt-3 mb-3">Rp.3.000.000,00</p></b>
                    <button class="add-cart bg-primary border-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                      </svg>
                    </button>
                  </div>
                </a>
              </div>
              @endfor
            </div>
          </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script type="text/javascript" src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
