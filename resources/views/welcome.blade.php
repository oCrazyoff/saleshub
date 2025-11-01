<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <title>Sales Hub</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="header-welcome">
        <div class="interface">
            <div class="logo">
                <x-application-logo />
                <h1>Sales Hub</h1>
            </div>
            <nav>
                <a class="entrar-btn" href="{{ route('login') }}" wire:navigate>Entrar</a>
                <a href="{{ route('register') }}" wire:navigate>Começar Grátis</a>
            </nav>
        </div>
    </header>
    <section id="hero">
        <div class="interface">
            <h2>Gerencie seu negócio com <span>inteligência</span></h2>
            <p>
                O sistema completo de gestão de vendas que sua empresa precisa. Controle clientes, produtos, vendas e
                muito mais em um só lugar.
            </p>
            <nav>
                <a href="#">Começar agora <i class="bi bi-arrow-bar-right"></i></a>
                <a class="login-btn" href="#">Fazer Login</a>
            </nav>
        </div>
    </section>
</body>

</html>
