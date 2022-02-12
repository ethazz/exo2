@extends('main')
@section('title' , 'bienvenue')
@section('contenu')

<table class = 'tableau'>
    @foreach($departements as $departement)
    <tr>
    <td>{{$departement->no}}</td>
    <td>{{$departement->nom}}</td>
    </tr>
    @endforeach
</table>
@endsection