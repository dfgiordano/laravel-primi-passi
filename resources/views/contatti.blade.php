<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../style/style-contatti.css">
        <title>Contatti</title>
    </head>
    <body>
        <div>
            <ul class="contatti">
                @foreach ($contatti_links as $link)
                <li> <a href="#"> {{ $link }} </a> </li> 
                @endforeach 
            </ul>
        </div>
    </body>
</html>