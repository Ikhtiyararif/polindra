@extends('layouts.default')
@section('page-title', 'Home')
@include('includes.header')

<header id="home-header" class="bg-fixed bg-no-repeat h-screen relative">
  <div class="bg-local bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url({{url ('/assets/images/backg.png') }})">
    <div class="block px-8 md:px-28 md:w-3/4">
      
      <link rel="stylesheet" href="/css/home.css/">
      <link rel="stylesheet" href="/css/search.css/">

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
          $(document).ready(function(){
            $(".default_option").click(function(){
                $(".dropdown ul").toggleClass("active");
            });
            $(".dropdown ul li").click(function(){
                var text = $(this).text();
                $(".default_option").text(text);
                $(".dropdown ul").removeClass("active");
            })
          });
        </script>
      </head>
      <body>
        
        <div class="wrapper">
          <h2 class="text-4x1 uppercase text-center text-white">polindra property</h2>
      <h1 class="text-5xl font-bold pb-2 text-center text-white">Cari Properti Terbaikmu</h1>
{{-- 
      <form id="search" action="{{ route('page.career') }}" method="GET">
        <div class="mb-4 w-full md:w-2/6">
          <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
              <div class="absolute inset-y-0 left-0 flex h-full items-center pl-3 pointer-events-none">
                <i class="ri-search-line"></i>
              </div>
              <input id="keyword" name="keyword" class="outline-none outline-offset-0 border border-2 rounded-md py-2 pl-10 pr-24 focus:outline-2 focus:outline-[#004cd2] w-full" placeholder="Search a position that suits you"/>
              <div class="absolute flex items-center inset-y-0 right-0 pr-1.5">
                <button type="submit" class="text-white bg-[#004cd2] hover:bg-[#004cd2] focus:outline-none font-medium rounded text-xs px-4 py-1.5">Search</button>
              </div>
          </div>
        </div>
      </form> --}}

        <form id="search" action="{{ route('pages.home') }}" method="GET">
          <div class="search_box">
            <div class="dropdown">
              <div class="default_option">Filter</div>
              <ul>
                @foreach ($types as $type)
                    <li>{{ $type->name }}</li>
                @endforeach
              </ul>
            </div>
            <div class="search_field">
              <input id="keyword" class="input" placeholder="search" name="keyword">
             <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
        </form>

          <div class="pb-2"></div>
            <div class="form-check form-check-inline text-white">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Dijual</label>
            </div>
            <div class="form-check form-check-inline text-white">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Disewa</label>
            </div>
        </div>
      </body>
      </html>

      {{-- <link rel="stylesheet" href="/css/rumah.css">  --}}

        {{-- <div class="col font-bold text-white flex justify-content-end">
          <p class="text-white"><a href="#" data-bs-toggle="modal" data-bs-target="#AddContactModal" class="text-decoration-none text-white">Lebih Spesifik <i class="fa fa-caret-down"></i></a>
          </p>
        </div>


        <div class="modal fade" id="AddContactModal" tabindex="-1" aria-labelledby="AddContactModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-black" id="AddContactModalLabel">Pencarian Lebih Spesifik</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <ul id="saveform_errList"></ul>
                <div class="pb-4">
                  <select class="form-select" aria-label="Default select example">
                    @foreach ($types as $type)
                    <option>{{ $type->name }}</option>
                    @endforeach
                  </select>

                </div>
                <div class="row row-cols-1 row-cols-md-2 g-2 pb-4">
                  <div class="col">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                      </select>
                      <label for="floatingSelect" class="text-black">Kamar Tidur</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                      </select>
                      <label for="floatingSelect" class="text-black">Kamar Mandi</label>
                    </div>
                  </div>
                </div>

                <div class="pb-4">
                  <label for="exampleFormControlInput1" class="form-label text-black">Luas Bangunan</label>
                  <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Min. Luas">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Max. Luas">
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <label for="exampleFormControlInput1" class="form-label text-black">Luas Tanah</label>
                  <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Min. Luas">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Max. Luas">
                    </div>
                  </div>
                </div>


                <div class="row row-cols-1 row-cols-md-2 g-2 pb-4">
                  <div class="col">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label text-black" for="inlineCheckbox1">Beli</label>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label text-black" for="inlineCheckbox2">Sewa</label>
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <label for="exampleFormControlInput1" class="form-label text-black">Harga</label>
                  <div class="row row-cols-1 row-cols-md-2 g-2">
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Min. Harga">
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Max. Harga">
                    </div>
                  </div>
                </div>


              </div>
              <div class="modal-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Cari Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div> --}}

    </div>

  </div>
  <script src="/js/script.js"></script>

  </div>
  </div>

</header>
@section('content')

<div class="text-center font-bold py-8">
  <h1 class="font-bold underline underline-offset-4">Our Recommendation</h1>
  <!-- <span class="divider"></span> -->

</div>


<div class="px-8 md:px-8 pb-8">
  <div class="row">
    <div class="owl-carousel recommended-carousel owl-theme">
      @foreach($recommended_properties as $prop)
      <div class="item pb-8">
        <div class="card">
          <a href="{{ url($prop->category->name.'/'.$prop->name) }}" class="text-black text-decoration-none">

            <img src="{{ url(Storage::url($prop->image)) }}" class="card-img-top" alt="...">
            <div class="card-img-overlay">
              <p class="card-title btn btn-secondary text-white"> Di{{ $prop->category->name  }}</p>
            </div>
            <div class="card-body">
              <h5 class="card-title font-bold">{{ $prop->name }}</h5>
              <p class="card-text text-black pb-2 text-8px">{{ $prop->district->name }}, {{ $prop->regency->name }}</p>

              <div class="row text-center">
                <ul class="col">
                  <li class="d-flex justify-content-center"><x-fas-bed class="h-5 w-5" /></li>
                  <li>{{ $prop->kt }} KT</li>
                </ul>
                <ul class="col">
                  <li class="d-flex justify-content-center"><x-bxs-bath class="h-5 w-5" /></li>
                  <li>{{ $prop->km }} KM</li>
                </ul>
                <ul class="col">
                  <li class="d-flex justify-content-center"><x-fas-home class="h-5 w-5" /></li>
                  <li>{{ $prop->lb }}M<sup>2</sup></li>
                </ul>
                <ul class="col">
                  <li class="d-flex justify-content-center"><x-ri-ruler-2-fill class="h-5 w-5" /></li>
                  <li>{{ $prop->lt }}M<sup>2</sup></li>
                </ul>
              </div>

              <div class="px-28">
                <h6 class="card-title text-center text-white py-1.5 bg-primary rounded-full">Rp {{ $prop->price }}</h6>
              </div>

            </div>

          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- <div class="d-flex justify-content-center align-items-center"><x-carbon-previous-outline class="w-12 h-12" /><x-carbon-next-outline class="w-12 h-12" /></div> -->
<!-- <div class="text-center px-8 md:px-12">
  <h1 class="text-3x1 font-bold underline underline-offset-4 pb-4">Property Type</h1>

  <div class="row row-cols-1 row-cols-md-4 text-center text-black pb-8">

    @foreach ($types as $type)

    <div class="col pb-8">
      <div class="text-center text-black font-bold">{{ $type->name }}</div>
    </div>

    @endforeach

  </div>
</div> -->
<div class="text-center font-bold py-8">
  <h1 class="underline underline-offset-4">Find More Properties</h1>
  <!-- <span class="divider"></span> -->
</div>

<div class="px-8 md:px-8">
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 pb-4">
    @foreach($properties as $property)
    <div class="item pb-8">
      <div class="card">
        <a href="{{ url($property->category->name.'/'.$property->name) }}" class="text-black text-decoration-none">

          <img src="{{ url(Storage::url($property->image)) }}" class="card-img-top" alt="...">
          <!-- <div class="card-img-overlay">
            <p class="card-title btn btn-secondary text-white"> Di{{ $property->category->name  }}</p>
          </div> -->
          
          <div class="card-img-overlay">
            <p class="card-title btn btn-secondary text-white"> Di{{ $property->category->name  }}</p>
            @if($property->recommended == '1')
            <p class="float-end card-title btn btn-success text-white">Recom</p>
            @endif
          </div>
          
          <div class="card-body">
            <h5 class="card-title font-bold">{{ $property->name }}</h5>
            <p class="card-text text-black pb-2 text-8px">{{ $property->district->name }}, {{ $property->regency->name }}</p>

            <div class="row text-center">
              <ul class="col">
                <li class="d-flex justify-content-center"><x-fas-bed class="h-5 w-5" /></li>
                <li>{{ $property->kt }} KT</li>
              </ul>
              <ul class="col">
                <li class="d-flex justify-content-center"><x-bxs-bath class="h-5 w-5" /></li>
                <li>{{ $property->km }} KM</li>
              </ul>
              <ul class="col">
                <li class="d-flex justify-content-center"><x-fas-home class="h-5 w-5" /></li>
                <li>{{ $property->lb }}M<sup>2</sup></li>
              </ul>
              <ul class="col">
                <li class="d-flex justify-content-center"><x-ri-ruler-2-fill class="h-5 w-5" /></li>
                <li>{{ $property->lt }}M<sup>2</sup></li>
              </ul>
            </div>

            <div class="px-28">
              <h6 class="card-title text-center text-white py-1.5 bg-primary rounded-full">Rp {{ $property->price }}</h6>
            </div>

          </div>

        </a>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="text-center px-8 md:px-12">
  <h1 class="text-3x1 font-bold underline underline-offset-4">Available in major cities in Indonesia</h1>
  <p class="text-lg">There are many promising offers.</p>
</div>
<div class="px-8 md:px-8">
  <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/bdg.jpg" class="card-img-top" alt="...">
        <div class="px-8 md:px-8 card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Bandung</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/jakarta.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Jakarta</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/srby.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Surabaya</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/yogya.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white  py-1.5 bg-warning rounded-full">Yogyakarta</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/malang.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white  py-1.5 bg-warning rounded-full">Malang</h5>
        </div>
      </div>
    </div>
  </div>
</div>


<br>
<div class="px-8 md:px-8">
  <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/balines.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Bali</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/crb.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Cirebon</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/boyolali.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Boyolali</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/solo.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full">Solo</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="/assets/images/subang.jpg" class="card-img-top" alt="...">
        <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
          <h5 class="card-title text-center text-white py-1.5 bg-warning rounded-full ">Subang</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@include('includes.footer')
@endsection