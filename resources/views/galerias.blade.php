@extends('layouts.front')

@section('content')
    <header id="header">
        <div class="logo container">
            <div>
                <p>Galerias</p>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="row gtr-200">
                {{-- GALERIA DE FOTOS --}}
                <galeria></galeria>
            </div>
        </div>
    </section>

@endsection
