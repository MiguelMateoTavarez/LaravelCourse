<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    @if(!empty($users))
    <ul>
        @forelse($users as $user)
        <li>{{ $user }}</li>
        @empty
        <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
    @else
    <p>No hay usuarios registrados.</p>
    @endif
</body>

</html>