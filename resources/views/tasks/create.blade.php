@extends('tasks.master')
@section('content')
@section('title') | Create Task @endsection

<div class="row">
    <div class="col-xl-6 mx-auto">
        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"> Create Task </h5>
                </div>

                <div class="card-body">
                    <div class="form-group my-3">
                        <label for="title"> Title </label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" />
                    </div>

                    <div class="form-group my-3">
                        <label for="description"> Description </label>
                        <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group my-3">
                        <label for="end"> Emd </label>
                        <input type="date" name="end" id="end" class="form-control" placeholder="end">
                        </div>

                    <div class="form-group my-3">
                        <label for="start"> Start </label>
                        <input type="date" name="start" id="start" class="form-control" placeholder="start">
                    </div>

                    <div class="form-group my-3">
                        <label for="numberVolunteerNiceToHave"> Nice </label>
                        <input type="number" name="numberVolunteerNiceToHave" id="numberVolunteerNiceToHave" class="form-control" placeholder="0">
                    </div>

                    <div class="form-group my-3">
                        <label for="numberVolunteerNiceToHave"> Need </label>
                        <input type="number" name="numberVolunteerNeedToHave" id="numberVolunteerNeedToHave" class="form-control" placeholder="0">
                    </div>

                    <div class="form-group my-3">
                        <label for="meetingPoint"> Meeeting Point </label>
                        <input type="text" name="meetingPoint" id="meetingPoint" class="form-control" placeholder="meetingPoint" />
                    </div>

                    <div class="form-group my-3">
                        <label for="udvalg"> Udvalg </label>
                        <input type="number" name="udvalg" id="udvalg" class="form-control" placeholder="id" />
                    </div>

                    <div class="form-group my-3">
                        <label for="createdBy"> Createdby </label>
                        <input type="number" name="createdBy" id="createdBy" class="form-control" placeholder="id" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success"> Save </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
