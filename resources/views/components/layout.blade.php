<!DOCTYPE html>
<html>
	<head>
		<title>{{$titel}}</title>
	</head>
	<body>
    <h1 class="name">Ура!! Заработало</h1>
    @if ($titel == 'Это тайтл')
        <h1>if работает</h1>
    @endif
    <h1>начало перечисления</h1>
    {{$arr}}
    <h1>конец перечисления</h1>
    {{ $slot }}
	</body>
</html>