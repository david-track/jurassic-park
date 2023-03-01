<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    @foreach ($parkDinosaurs as $parkDinosaur)
        <p>#{{ $parkDinosaur->id }} | Born: {{ $parkDinosaur->date_of_birth }} | Paddock:
            {{ $parkDinosaur->paddock->name }} | Health Report: {{ $parkDinosaur->health_report_id }}</p>
    @endforeach

</body>

</html>
