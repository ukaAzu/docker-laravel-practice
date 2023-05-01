<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lot</title>
    </head>
    <body>
        <h1>Lot</h1>
        <p>
            くじをひきました！
        </p>
        <p>
            {{$number}}番、
            @if($number == 1)
                {{$prizes[0]}}です！
            @elseif($number == 2)
                {{$prizes[1]}}です！
            @else
                {{$prizes[2]}}です！
            @endif
        </p>
        <p>
            この中からひきました。
        </p>
        <ul>
            @for($i = 0; $i<count($prizes); $i++)
                <li>{{$prizes[$i]}}</li>
            @endfor
            @foreach ($prizes as $prize)
                <li>{{ $prize }}</li>
            @endforeach
        </ul>
    </body>
</html>
