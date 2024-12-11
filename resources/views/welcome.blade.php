

@extends('modeles/modele')
    @section('content')
    Bienvenue sur mon portfolio.
    <i class="fas fa-check"></i>

    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/ours_playa.png') }}" class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <a href="{{ route('stage1') }}">Stage1</a>   
    <img src="{{ asset('images/espadon.png') }}"width="120" height="120">    
    
    <i class="fa-solid fa-fish"> test Awesome</i>

    @endsection

