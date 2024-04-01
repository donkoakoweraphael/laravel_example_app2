@extends('layouts.base')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-4"><a href="{{ route('students.create') }}">Inscrire un étudiant</a></div>
            <div class="col-4"><a href="{{ route('students.index') }}">Liste des étudiants</a></div>
        </div>
    </div>
@endsection
