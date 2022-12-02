@extends ('layout.main')

@section('title', 'Eventos')

@section('content')


<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/evento-de-lançamento.png" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-data">01/12/2022</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participantes">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
