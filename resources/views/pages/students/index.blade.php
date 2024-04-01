@extends('layouts.base')
@section('content')
    <div class="container pt-5">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Sexe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student) { ?>
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->sex }}</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
@endsection
