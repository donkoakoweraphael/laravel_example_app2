@extends('layouts.base')
@section('content')
    <div class="row"
        style="padding: 50px; margin-top: 50px; background: linear-gradient(#ada491, #5b6278); border-radius: 10px">
        <div class="col-lg-4 p-0">
            <img class="img-fluid"
                src="https://thumbs.dreamstime.com/b/two-students-folder-backpacks-backpack-isolated-over-white-background-30507715.jpg"
                alt="Image de deux étudiants debout" style="height: 100%; width:100%">
        </div>
        <div class="col-lg-8 bg-white text-dark">
            <div class="" style="padding: 50px">
                <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <div class="mb-3">
                        <label class="form-label me-3">Sex</label>
                        <input type="radio" class="form-check-input" id="sexMasculin" name="sex" value="M">
                        <label for="sexMasculin" class="form-check-label">Masculin</label>
                        <input type="radio" class="form-check-input" id="sexFeminin" name="sex" value="F">
                        <label for="sexFeminin" class="form-check-label">Feminin</label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
