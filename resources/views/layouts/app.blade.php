
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Portfolio Aca - Digital Art, Visual Design, UI/UX & Creative Technology">

    <title>@yield('title', 'Portfolio — Aca')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Konfigurasi Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        glow: '0 0 60px rgba(99,102,241,.16)',
                    }
                }
            }
        };
    </script>

    <!-- CSS tambahan -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

    @yield('content')

    <!-- JavaScript -->
    <script src="{{ asset('js/portfolio.js') }}" defer></script>
</body>

</html>
