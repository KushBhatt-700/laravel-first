<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ $sum = $first + $second }}
    <h1>{{ $first }} + {{ $second }} = {{ $sum }}</h1>
    {{ $first ?? "guest" }}
    <br/>
    <br/>
    @if($sum > 20)
        {{ "It's gretter then 20" }}
    @elseif($sum == 20)
        {{ "Sum = 20" }}
    @else
        {{ "It's less then 20" }}
    @endif
</body>
</html>