<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="contaner">
        <div class="top">
            <h1>Recipe</h1>
            <a href="/recipes/create">Add New Recipe</a>
            <a href="/">log out</a>
        </div>
        <div class="bottom" style="background: url('{{ asset('image/background.jpeg') }}') ;">
            @foreach ( $recipes as $recipe)
            <div class="recipe">
                <h3>{{ $recipe->name }}</h3>
                <br>
                <p class="ellipsis"> المكونات : {{ $recipe->ingredients }} : المكونات</p>
                <br>
                <a href="/recipes/{{ $recipe->id }}"> تفاصيل الوصفة</a>
                <br>
                <a href="/recipes/{{ $recipe->id }}/edit">تعديل الوصفة</a>
                <br>
                <form action="/recipes/{{ $recipe->id }}" method="POST">
                        @csrf
                         @method('DELETE')
                    <input type="submit" value="حذف الوصفة" class="delet">
                </form>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>
