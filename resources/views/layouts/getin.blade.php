@extends('layouts.master')

@section('content')
    <!-- SECTION 1 -->
    <div
    id="carouselExampleCaptions"
    class="carousel slide"
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
        <button
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="3"
        aria-label="Slide 4"
        ></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://unsplash.it/1400/600?image=622" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        <h2>Share Your Stories Petition With Sisterhoods IDN</h2>
        <p>Sharing Your Stories in English or Indonesia</p>
        <a type="button" href="#" class="btn btn-primary btn-xl">Get It</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="https://unsplash.it/1400/600?image=315" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        <h2>Donation At Sisterhoods IDN</h2>
        <p>Contribute to our cause by being a donor</p>
        <a type="button" href="#" class="btn btn-primary btn-xl">Get It</a>
        </div>
    </div>
    <div class="carousel-item">
        <img  src="https://unsplash.it/1400/600?image=114" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        <h2>Support Our Programs</h2>
        <br><br><br>
        <a type="button" href="#" class="btn btn-primary btn-xl">Get It</a>
        </div>
    </div>
    <div class="carousel-item">
        <img src="https://unsplash.it/1400/600?image=315" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        <h2>Hotlines</h2>
        <p>Visit this website</p>
        <a type="button" href="hotlines.html" class="btn btn-primary btn-xl">Get It</a>
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
    <!-- END-->

    <!--SECTION 2-->
    <section class="page-section" id="subArticle">
        <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center mb-0">Submit an Article</h2>
        <p style="text-align: center;">Are you interested in writing articles on Women's Issues or other topics? Or do you want to inspire other people ? Submit your article now to get featured in Sisterhoods IDN!</p>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <form action="/admin/submission" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                @csrf
                <!-- Name input-->
                <div class="form-floating mb-3">
                <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                <label for="name">Full name / Anonymous</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <!-- Email address input-->
                <div class="form-floating mb-3">
                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <!-- City-->
                <div class="form-floating mb-3">
                <input class="form-control" name="city" id="city" type="text" placeholder="City" data-sb-validations="required" />
                <label for="city">City</label>
                <div class="invalid-feedback" data-sb-feedback="city:required">A city is required.</div>
                @error('city')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <!-- Topic-->
                <div class="form-floating mb-3">
                <input class="form-control" name="topic" id="topic" type="text" placeholder="Topic" data-sb-validations="required" />
                <label for="phone">Topic of Article</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A topic of article required.</div>
                @error('topic')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <!-- Message input-->
                <div class="form-floating mb-3">
                <textarea class="form-control" name="article" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                <label for="message">Article</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                @error('article')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                {{-- @if(session('success'))
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">{{session('success')}}</div>
                        </div>
                    </div>
                @endif --}}
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit Article</button>
                <br><br>
            </form>
            </div>
        </div>
        </div>
    </section>
  <!--END-->
  
  <!-- SECTION 3 -->
  <section class="sectionTiga">
    <div class="containerhero">
      <div class="row">
        <div class="col-sm-12 text-center" id="textSuara">
          <h1>#SuaraWanita</h1>
          <h3>Tell your story here!</h3>
          <br><br>
          <a type="button" href="/form-suara-wanita" class="btn btn-primary btn-xl">Get It</a>
        </div>
      </div>
    </div>
  </section>
  <!--END-->
@endsection