<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>STUDENTI</title>
</head>

<body>
    <div class="container">
        <h2>
            {{ $saluto }}
        </h2>
        <div class="card-container">
            @foreach ($students as $student)
                <div class="card">
                    <h2>
                        <span>NOME:</span>
                        {{ $student['name'] }}
                    </h2>
                    <h3>
                        <span>COGNOME:</span>
                        {{ $student['surname'] }}
                    </h3>
                    <h3 class="contact">
                        <span>CONTATTI:</span>
                        {{ $student['mobile'] }}
                    </h3>
                </div>
            @endforeach
        </div>
        <a href="/">GO TO HOME!</a>
    </div>
</body>

</html>
