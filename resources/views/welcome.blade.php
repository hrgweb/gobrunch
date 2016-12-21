<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <style>
            * {
                padding: 0;
                margin: 0;
            }
            
            .container {
                background: silver;
                color: gray;

            }

            h1 {
                background: gold;
                padding: .5em 1em;
            }
            p {
                padding: 1em 1.5em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Go Brunch, {{ $user->Name }}</h1>

            <p>{{ $user->Company }}</p>
        </div>
    </body>
</html>
