@extends('layouts.master')

@section('content')
    <!--JUMBOTRON-->
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
        
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{asset('/layouts/img/bannerhome.jpeg')}}" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{asset('/layouts/img/disney.jpeg')}}" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
        
        <a type="button" href="#" class="btn btn-primary btn-xl">Get It</a>
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



      
    <!-- END -->

    <!-- Content section 1-->
    <section id="sectionSatu">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img
                class="img-fluid rounded-circle"
                src="{{asset('/layouts/img/LOGO_SH_FIX.png')}}"
                alt="..."
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">ABOUT US</h2>
              <p>
                Youth Organization Platform – a digital platform made as a
                medium for Indonesian women to discuss about our issues and
                problems in the society. We manage together to support
                Indonesian women's voices, opinions, and aspirations in an
                effort to be heard and accepted in a wider community.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- START ARTICLE -->
    <section id="gallery">
      <div class="container">
        <h1 class="text-center font-weight-bold pt-5 pb-3">New Article</h1>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img
                src="https://miro.medium.com/max/1400/0*C7eO9toRuuTcxxmS.jpg"
                alt=""
                class="card-img-top"
              />
              <div class="card-body">
                <h4 class="card-title">
                  The Movie Hidden Figures Through the Lens of Feminist
                  Criticism
                </h4>
                <p class="card-text">
                  The feminist movement started as a reaction to gender
                  inequality in society. The movement in the 1960s was a renewal
                  of the old feminist movement. It was pioneered by the
                  predecessor ofthis movement —some
                </p>
                <a href="article1.blade.php"
                  >Read More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="{{asset('/layouts/img/article3.png')}}" alt="" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">
                  Rising Rape Cases in Pakistan: It's The Rapist's Fault Not
                  Their Clothes
                </h4>
                <p class="card-text">
                  Perdana Menteri Pakistan, Imran Khan, mendapatkan kecaman
                  keras oleh masyarakat terkait dengan pernyataannya mengenai
                  peningkatan kasus pemerkosaan di Pakistan. Ia menyalahkan
                </p>
                <a href="article1.html"
                  >Read More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img
                src="{{asset('/layouts/img/artikel2_sex_edu.png')}}"
                alt=""
                class="card-img-top"
              />
              <div class="card-body">
                <h4 class="card-title">Empowering Women Through Sex Ed</h4>
                <p class="card-text">
                  Sex has always been traditionally regarded as a taboo subject
                  to discuss. Many people seemed to ignore the fact how it could
                  help young people, especially girls, to understand the changes
                  that they will face with their bodies and mind.
                </p>
                <a href="article1.html"
                  >Read More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END ARTICLE -->

     <!-- Video-->
    <section id="intro">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Lu4H_D7BR6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">INTRODUCTION</h2>
              <p>
                Hello, we are Sisterhoods IDN. In this video, you will witness from our founder & members about our visions, missions, and the philosophy behind Sisterhoods IDN as a youth & non-profit organization. Sisterhoods IDN is a youth organization led by Indonesian young women. Established in 2021, we focus on supporting women by listening to their voices. We have a high hope to help and encourage Indonesian young women to speak up more courageously.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- content section 2-->
    <section id="sectionDua">
      <div class="container">
        <div
          class="embedsocial-hashtag"
          data-ref="3610675c98bb1723385b0cfb46923ff1931dc20b"
        >
          <iframe
            src="./SISTERHOODS IDN_files/saved_resource.html"
            id="embedIFrame_3610675c98bb1723385b0cfb46923ff1931dc20bsxfuqr"
            class="embedsocial-hashtag-iframe"
            scrolling="no"
            style="width: 100%; height: 6263px; border: 0px; overflow: hidden"
          ></iframe>
        </div>
        <script>
          (function (d, s, id) {
            var js;
            if (d.getElementById(id)) {
              return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://embedsocial.com/cdn/ht.js";
            d.getElementsByTagName("head")[0].appendChild(js);
          })(document, "script", "EmbedSocialHashtagScript");
        </script>
      </div>
    </section>
    <!--end-->
@endsection


