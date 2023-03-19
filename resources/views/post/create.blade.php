@extends('layouts.app')

@section('title')Create @endsection

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fs-2">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fs-3">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fs-3">Post Creator</label>
            <select name="creator" class="form-control">
                <option value="Viola">Viola</option>
                <option value="Martina">Martina</option>
                <option value="George">George</option>
               
            </select>
        </div>
        <button type="submit" class="btn btn-success" style="background-color: orange;">Create</button>
    </form>
</div>
@endsection