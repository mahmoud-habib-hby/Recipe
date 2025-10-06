<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
          direction: rtl;
    }
        body{
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
         }
        .contaner{
            box-shadow: 0px 0px 22px -1px #000000;
            background: #e7e7e7;
            display: flex;
            flex-direction: column;
            padding: 40px;
            width: 70%;
        }
        h1 ,h2 {
            padding: 5px;
            margin: 5px;
            background:rgb(226, 154, 19);
            text-align: center;
        }
      ul li{
            font-size: larger;
            font-weight: 550;
        }
    </style>
</head>
<body>
    <?php

$text = $recipe->ingredients;

$ingredients = explode(',', $text);

$ingredients = array_map('trim', $ingredients);

$text2 = $recipe->steps;

$steps = explode('-', $text2);

$steps = array_map('trim', $steps);
    ?>
    <div class="contaner">

    <h1>name</h1>
        <h3>{{ $recipe->name }}</h3>
        <br>
        <h2>ingredients</h2>
        <ul>
            @foreach ($ingredients as $ingredient )
                    <li>{{ $ingredient }} </li>
            @endforeach
            </ul>
        <br>
        <h2>steps</h2>     

            <ul>
            @foreach ($steps as $step)
                    <li>{{ $step }} </li>
                    @endforeach         
            </ul>
        </p>
    </div>
</body>
</html>