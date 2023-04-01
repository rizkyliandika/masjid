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

<body class="dark:bg-zinc-900">
    {{-- BERANDA SECTION --}}
    <x-layouts.home />
    {{-- BERANDA END SECTION --}}
    {{-- TENTANG KAMI SECTION --}}
    <x-layouts.about />
    {{-- TENTANG KAMI END SECTION --}}
    {{-- LAYANAN SECTION --}}
    <x-layouts.service />
    {{-- LAYANAN END SECTION --}}
    {{-- BERITA SECTION --}}
    <x-layouts.news :posts="$posts" />
    {{-- BERITA END SECTION --}}
    {{-- STRUKTUR ORGANISASI SECTION --}}
    <x-layouts.organization />
    {{-- STRUKTUR ORGANISASI END SECTION --}}
    {{-- KONTAK SECTION --}}
    <x-layouts.contact />
    {{-- END KONTAK SECTION --}}
    {{-- Footer --}}
    <x-footer />
    {{-- End Footer --}}
    @vite('resources/js/app.js')
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>
