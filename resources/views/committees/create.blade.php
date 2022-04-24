@extends('tasks.master')
@section('content')
@section('title') | Create Commmittee @endsection

<div class="row">
    <div class="col-xl-6 mx-auto">
        <form action="{{ route('committees.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"> Create Committee </h5>
                </div>

                <div class="card-body">
                    <div class="form-group my-3">
                        <label for="name"> Navn </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Navn" />
                    </div>

                    <div class="form-group my-3">
                        <label for="description"> Beskrivelse </label>
                        <textarea name="description" id="description" class="form-control" placeholder="Beskrivelse"></textarea>
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
