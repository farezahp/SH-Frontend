@extends('layouts.master')

@section('content')
    <!-- NEW ARTICLE -->

    <h2 class="text-center font-weight-bold m-5">#SuaraWanita</h2>

    <div class="suarawanita">

    <div class="card mb-3  row mx-auto" style="max-width: 90%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">The Movie Hidden Figures Through the Lens of Feminist Criticism</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus nesciunt quibusdam explicabo nostrum numquam vel voluptatem harum cupiditate neque quaerat hic, autem laborum magni eum exercitationem dolorum quod velit laboriosam?</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>

        <div class="card mb-3  row mx-auto" style="max-width: 90%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>

        <div class="card mb-3  row mx-auto" style="max-width: 90%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>

        <div class="card mb-3  row mx-auto" style="max-width: 90%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>

        <div class="card mb-3  row mx-auto" style="max-width: 90%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{asset('/layouts/img/disney.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>

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