<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/public/css/output.css?v={{ env('APP_MODE') === 'prod' ? 1 : time() }}" rel="stylesheet">

    <title>
        {{ $code }} -
        @isset($message)
            {{ $message }}
        @endisset
    </title>
</head>

<body class="grid min-h-screen place-items-center items-center justify-center">

    <div class="text-center">
        <h1 class="text-5xl">{{ $code }}</h1>

        <p class="mt-5">
            @isset($message)
                {{ $message }}
            @endisset

        </p>

        <p class="text-xs"> Return to <a class="text-blue-500 underline" href="{{ url('/') }}">Home</a></p>

    </div>

</body>

</html>
