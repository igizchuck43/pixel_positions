<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>

    <div>
        <nav>
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/blog.png') }}" alt="" srcset="">
                </a>
            </div>

            <div>
                link
            </div>
            <div>
                Post a Job
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
    
</body>
</html>