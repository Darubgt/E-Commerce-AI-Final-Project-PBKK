<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="device-width, initial-scale = 1.0" />
    <title>BeliBeli | Trusted E-commerce</title>
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css"/>
    
  </head>
  <body>
    <div class="container-fluid m-0 p-0">
      {{-- <img src="logo.png" class="mx-auto d-block" style="width: 600px; height: 150px" /> --}}

      <!----------Navbar---------->
      <div>
        <nav class="navbar sticky-top navbar-expand-lg ps-4" style="background-color: rgb(60, 60, 60); font-family: 'Oswald', sans-serif">
          <div class="container-fluid">
            <a class="navbar-brand text-danger border border-warning bg-gradient" href="#"><b>BeliBeli</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                      </svg>
                  </a>
                </li>
              </ul>
              <form class="d-flex w-75">
                <input class="form-control me-2" type="search" placeholder="Search items" aria-label="Search" />
                <button class="btn btn-danger" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>

      <!--------------Berita Utama----------------------->
      <div class="container-fluid ms-5 me-5 pe-4">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-4"><b>Featured Item</b></p>
        <hr class="ms-2">
        <div id="carouselExampleCaptions" class="carousel slide w-95">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active ">
      <img src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2022%2F11%2Ftravis-scott-air-jordan-1-low-og-olive-release-date-dz4137-106-tw.jpg?w=1080&cbr=1&q=90&fit=max" width=100% height=600 class="d-block overflow-y-hidden" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Air Jordan 1 Low Travis Scott Olive</h5>
        <p>Start from Rp5.000.000,00</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images-cdn.ubuy.com.sa/64d60c7c3959e70dff1acfd0-sony-playstation-5-video-game-console.jpg" width=100% height=600 class="d-block w-100 overflow-y-hidden" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sony PlayStation 5 Disc Version</h5>
        <p>Start From Rp12.500.500,--</p>
      </div>
    </div>
    <div class="carousel-item overflow-y-hidden">
      <img src="https://omniluxe.id/cdn/shop/files/DaytonaPanda_2021_-6_1800x.jpg?v=1709958265" width="100%" height=600 class="d-block w-100 overflow-y-hidden" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rolex Daytona 40mm - White Panda Index Dial</h5>
        <p>Start from Rp500.000.000</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        <!---------------------------News Feed---------------------------->
        <div class="row pe-5">
          <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Category</b></p>
          <hr class="ms-2">
          <div class="col-3">
            <div class="card border rounded card">
                <div class="card-header text-center">Sports</div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border rounded card">
                <div class="card-header text-center">Fragrance</div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border rounded card">
                <div class="card-header text-center">Electronics</div>
            </div>
          </div>
          <div class="col-3">
            <div class="card border rounded card">
                <div class="card-header text-center">Toys</div>
            </div>
          </div>

        </div>
        <div class="row pe-5">
            <div class="col-3">
                <div class="card border rounded card">
                    <div class="card-header text-center">Fashion</div>
                </div>
              </div>
              <div class="col-3">
                <div class="card border rounded card">
                    <div class="card-header text-center">F&B</div>
                </div>
              </div>
              <div class="col-3">
                <div class="card border rounded card">
                    <div class="card-header text-center">Cosmetics</div>
                </div>
              </div>
              <div class="col-3">
                <div class="card border rounded card">
                    <div class="card-header text-center">Health</div>
                </div>
              </div>
        </div>
      </div>

      <!---------------------Recomendation--------------------------->
      <div class="container-fluid ms-5 me-5 pe-4 m-4">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Recomendation</b></p>
        <hr class="mb-3">
        <div class="card-deck d-flex flex-wrap w-100">
          @for ($i = 0; $i < 10; $i++)
          
            <div class="card w-14 h-1 m-2 hoverdark product-card" href="#">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          
          @endfor
            <div class="card w-14 h-1 m-2">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card w-14 h-1 m-2">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer m-2">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card w-14 h-1 m-2">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card w-14 h-1 m-2">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text car">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card w-14 h-1 m-2">
              <img class="card-img-top" src="https://whitelabel.dior.com/dw/image/v2/BJSW_PRD/on/demandware.static/-/Sites-pcd-whitelabel-master/default/dw5747630d/Y0998004/Y0998004_C099600456_E01_GHC.jpg?sw=700&sh=700" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text car">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
      </div>

      <!------------------AD SPACES--------------------->
      {{-- <div class="container-fluid ms-5">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Ad Space</b></p>
        <hr class="mb-3">
        <div class="row gx-1">
          <div class="col-4">
            <a href="#"><img src="iklan1.jpg" style="width: 420px; height: 420px" /></a>
          </div>
          <div class="col-4">
            <a href="#"><img src="iklan2.jpg" style="width: 420px; height: 420px" /></a>
          </div>
          <div class="col-4">
            <a href="#"><img src="iklan3.jpg" style="width: 420px; height: 420px" /></a>
          </div>
        </div>
        <div class="row mt-5 gx-1">
          <div class="col-4">
            <a href="#"><img src="iklan4.jpg" style="width: 420px; height: 420px" /></a>
          </div>
          <div class="col-4">
            <a href="#"><img src="iklan5.jpg" style="width: 420px; height: 420px" /></a>
          </div>
          <div class="col-4">
            <a href="#"><img src="iklan6.webp" style="width: 420px; height: 420px" /></a>
          </div>
        </div>
      </div> --}}
      <!----------------------------Form--------------------------->
      {{-- <div class="container-fluid ms-5 pt-4 pb-5">
        <p style="font-size: 28px; font-family: 'Oswald', sans-serif" class="mt-5"><b>Submit Your News Recommendation</b></p>
        <hr / class="mb-3">
        <form class="row g-3 pe-5 me-5">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" placeholder="Danielle" />
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" placeholder="Marsh" />
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="email@example.com" />
          </div>
          <div class="col-md-6">
            <label for="pnumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="pnumber" placeholder="+62" />
          </div>
          <div class="col-12">
            <label for="newssubject" class="form-label">News Category and Title</label>
            <input type="text" class="form-control" id="newssubject" placeholder="Ex: Sports, Tech, etc - Title" />
          </div>
          <div class="col-12">
            <label for="expla" class="form-label">Explanation regarding the News</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" />
              <label class="form-check-label" for="gridCheck">Agree to receive offers and daily newsletter from The Daily Bugle</label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <footer>
    <p style="color: rgb(210, 0, 0)"><b>BeliBeli</b></p>
    <p style="color: orange"><b>Copyright BeliBeli@2023</b></p>
  </footer>
</html>
