<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/image/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>
        MFM | {{ $title }}
    </title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto 5xl:mx-auto lg:mx-auto">
        <h1 class="text-5xl font-extrabold dark:text-white">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
    @vite('resources/js/app.js')
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>
