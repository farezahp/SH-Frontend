@extends('layouts.master')

@section('content')
    <!-- Events -->

    <section
      class="container"
      style="width: 90%; margin: 100px auto; text-align: center"
    >
      <h4 class="mb-5"><strong>UPCOMING EVENTS</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img
                src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                class="img-fluid"
              />
            </div>
            <div class="card-body">
              <h4 class="card-title">Post title</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a
                href="https://bit.ly/SISTERCAMP"
                class="btn btn-primary"
                style="margin-top: 20px"
                >Register</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img
                src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
                class="img-fluid"
              />
            </div>
            <div class="card-body">
              <h4 class="card-title">Post title</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 20px"
                >Register</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img
                src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                class="img-fluid"
              />
              <a href="#!">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15)"
                ></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Post title</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 20px"
                >Register</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Last Events -->

    <section
      class="container"
      style="width: 90%; margin: 100px auto; text-align: center"
    >
      <h4 class="mb-5"><strong>OUR PAST EVENTS</strong></h4>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img src="{{asset('/layouts/img/sistercamp.jpeg')}}" class="img-fluid" />
            </div>
            <div class="card-body">
              <h4 class="card-title">SISTERCAMP: SPEAK UP YOUR SELF</h4>
              <p class="card-text">
                TOPICS: - We want to hear from you - If I can do it, you can too
                - You are your own brand - Speak the untold truth
              </p>
              <a
                href="https://bit.ly/SISTERCAMP"
                class="btn btn-primary"
                style="margin-top: 20px"
                >Highlight Event</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img
                src="https://mdbootstrap.com/img/new/standard/nature/023.jpg"
                class="img-fluid"
              />
            </div>
            <div class="card-body">
              <h4 class="card-title">Post title</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 20px"
                >Highlight Event</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div
              class="bg-image hover-overlay ripple"
              data-mdb-ripple-color="light"
            >
              <img
                src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
                class="img-fluid"
              />
              <a href="#!">
                <div
                  class="mask"
                  style="background-color: rgba(251, 251, 251, 0.15)"
                ></div>
              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">Post title</h4>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary" style="margin-top: 20px"
                >Highlight Event</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection