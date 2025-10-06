
@extends('layouts.app')

@section('title', 'إضافة محاضر جديد')

@section('Form')
<h2 style="color: white">update Recipe</h2>
<form action="/recipes/{{  $recipe->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="name.." value="{{ $recipe->name }}">

    <label for="ingredients">Ingredients</label>
    <input type="text" id="ingredients" name="ingredients" placeholder="ingredient , ingredient , ingredient..." value="{{ $recipe->ingredients }}">

    <label for="steps">Steps</label>
    <input type="text" id="steps" name="steps" placeholder="step - step - step..." value="{{ $recipe->steps }}">

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
