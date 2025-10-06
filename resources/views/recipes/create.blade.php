
@extends('layouts.app')

@section('title', 'إضافة محاضر جديد')

@section('Form')


<h2 style="color: white">New Recipe</h2>
<form action="{{ route('recipes.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="name..">

    <label for="ingredients">Ingredients</label>
    <input type="text" id="ingredients" name="ingredients" placeholder="ingredient , ingredient , ingredient...">

    <label for="steps">Steps</label>
    <input type="text" id="steps" name="steps" placeholder="step - step - step...">

    <input type="submit" value="Add">
</form>
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection