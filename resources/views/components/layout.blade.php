<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Tugas Study Club" }}</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <div class="container">
        <nav class="nav">
            <ul>
                <a href="/home">Home</a>
                <a href="/project">Project</a>
                <a href="/about">About Me</a>
                <a href="/contact">Contact</a>
            </ul>
        </nav>
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>