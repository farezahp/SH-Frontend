@extends('layouts.master')

@section('content')
    <!-- SEARCH -->
    <div class="container">
      <form action="/" method="GET" class="form">
        <input
          type="search"
          placeholder="Search Article"
          class="search-field"
        />
        <button type="submit" class="search-button">
          <img src="{{asset('/layouts/img/loupe.png')}}" />
        </button>
      </form>
    </div>
    <!-- AKHIR SEARCH -->

    <!-- ARTIKEL -->
    <div class="container">
      <div
        id="carouselExampleCaptions"
        class="carousel slide mt-5 mb-5"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('/layouts/img/artikel1.jpeg')}}" class="d-block w-100" alt="slide 1" />
            <div class="carousel-caption d-none d-md-block">
              <h1>
                The Movie Hidden Figures Through the Lens of Feminist Criticism
              </h1>
              <h5>21 August 2021</h5>
              <p>
                The feminist movement started as a reaction to gender inequality
                in society.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('/layouts/img/article3.png')}}" class="d-block w-100" alt="slide 2" />
            <div class="carousel-caption d-none d-md-block">
              <h1>
                Rising Rape Cases in Pakistan: It's The Rapist's Fault Not Their
                Clothes
              </h1>
              <h5>Evelyn Fidelia - 26 August 2021</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                illo.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="{{asset('/layouts/img/artikel2_sex_edu.png')}}"
              class="d-block w-100"
              alt="slide 3"
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>Empowering Women Through Sex Ed</h1>
              <h5>Tiffani Tirta Chanjaya - 22 September 2021</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                illo.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- akhir artikel carousel-->

      <!-- NEW ARTICLE -->

      <h2 class="text-center font-weight-bold m-5">New Article</h2>

      <div class="allcard">
        <div class="row mx-auto text-center">

          @foreach ($articles as $key=>$article)
          <div class="card ms-3 me-3 mt-4" style="width: 18rem" href="/article/{{$article->id}}">
            <img src="{{asset('img-upload/'.$article->picture)}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">
                {{$article->topic}}
              </h4>
              <h5>{{$article->name}} - {{$article->created_at}}</h5>
              <a href="/article/{{$article->id}}"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
          @endforeach 

        </div>

        {{-- <div class="row mx-auto text-center mt-5">
          <div class="card ms-3 me-3" style="width: 18rem">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">Article Title</h4>
              <h5>Author - Date Published</h5>
              <a href="article1.html"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="card ms-3 me-3" style="width: 18rem">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">Article Title</h4>
              <h5>Author - Date Published</h5>
              <a href="article1.html"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="card ms-3 me-3" style="width: 18rem">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">Article Title</h4>
              <h5>Author - Date Published</h5>
              <a href="article1.html"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>

          <div class="card ms-3 me-3" style="width: 18rem">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title">Article Title</h4>
              <h5>Author - Date Published</h5>
              <a href="article1.html"
                >Read More <i class="bi bi-arrow-right"></i
              ></a>
            </div>
          </div>
        </div> --}}
      </div>

      <!-- akhir card artikel-->

      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-5">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"
              >Previous</a
            >
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
@endsection