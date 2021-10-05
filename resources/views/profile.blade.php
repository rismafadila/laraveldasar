<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php

 $status = 2;
@endphp
@if ($status == 1)
status kamu lulus
    @elseif ($status ==2)
    status kamu lulus 100%
@else
    status kamu tidak lulus
@endif

<br>


@for ($i = 1; $i < 10; $i++)
@if( ($i % 2) == 0)
    {{ $i }} Adalah Bilangan Genap<br>
@else
    {{ $i }} Adalah Bilangan Ganjil<br>
@endif
@endfor

@php
    $warna = '<div style="color:red">Risma </div>'
@endphp
{!! $warna !!}
</body>
</html>
