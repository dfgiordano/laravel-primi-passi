<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../style/style.css">
        <title>I miei primi passi con Laravel</title>
    </head>
    <body>
        <header>
            <div class="title">
                <h1>I miei primi passi con Laravel</h1>
            </div>
            <hr>
            <div class="menu_nav">
                <ul>
                    @foreach ($links as $link)
                    <li> <a href="#"> {{ $link }} </a> </li> 
                    @endforeach 
                </ul>
            </div>
        </header>
        <main>
            <div class="container">
                @foreach ($mangas as $key => $manga)
                <div class="item">
                    <div>
                        <img src="{{ $manga['cover'] }}"alt="###">
                    </div>
                    <h3> <a href="#"> {{ $manga['title']}} </a> </h3>
                    <h5> <a href="#"> {{ $manga['year']}} </a> </h5>
                </div>
                @endforeach
            </div>
        </main>
        <footer>
            <ul>
                @foreach ($footer as $link)
                <li> <a href="#"> {{ $link }} </a> </li> 
                @endforeach 
            </ul>
        </footer>
    </body>
</html>