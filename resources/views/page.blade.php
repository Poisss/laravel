<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    </head>
    <body>
        {{--
            <h1>{{name}}</h1>
        <h1>Группа: {{$team['name']}}</h1>
        <h2>Альбом: {{$team['album']}}</h2>
        <h2>Состав:</h2>
        <ul>
            <li>
                {{$team['composition'][0]}}
            </li>
            <li>
                {{$team['composition'][1]}}
            </li>
            <li>
                {{$team['composition'][2]}}
            </li>
            <li>
                {{$team['composition'][3]}}
            </li>
        </ul>
        --}}

        <h1>Группа: {{$team->name}}</h1>
        <h2>Альбом: {{$team->album}}</h2>
        <h2>Состав:</h2>
        <ul>
            <li>
                {{$team->composition[0]}}
            </li>
            <li>
                {{$team->composition[1]}}
            </li>
            <li>
                {{$team->composition[2]}}
            </li>
            <li>
                {{$team->composition[3]}}
            </li>
        </ul>
    </body>
</html>