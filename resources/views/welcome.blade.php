@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style lang="scss">
       .cardCustom{
            --gap: 1.5rem;
    		--columns: 3;
    		flex-basis: calc((100% / var(--columns)) - var(--gap) + (var(--gap) / var(--columns)));
       }
    </style>
@endsection

@section('main')
    <div class="d-flex flex-wrap w-75 m-auto gap-4">
        @foreach($trains as $element)
            <div class="card cardCustom">
                <h5 class="card-title">{{$element['title']}}</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Stazione di partenza: {{$element['stazione_partenza']}}</li>
                    <li class="list-group-item">Stazione di arrivo: {{$element['stazione_arrivo']}}</li>
                    <li class="list-group-item">Orario di partenza: {{$element['orario_partenza']}}</li>
                    <li class="list-group-item">Orario di arrivo: {{$element['orario_arrivo']}}</li>
                    <li class="list-group-item">Codice treno: {{$element['codice_treno']}}</li>
                    <li class="list-group-item">Numero Carrozze: {{$element['numero_carrozze']}}</li>
                    <li class="list-group-item">In orario: {{$element['in_orario'] ? "si" : "no"}}</li>
                    <li class="list-group-item">In ritardo: {{$element['in_orario'] ? "no" : "si"}}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection


