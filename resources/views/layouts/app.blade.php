<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Sofia Sahara')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0; padding: 0; box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fef9f3;
            min-height: 100vh;
            color: #333;
            display: flex;
            flex-direction: column;
        }
        nav {
            background-color: #ab0ab1;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.2s ease;
        }
        nav a:hover {
            opacity: 0.8;
        }
        .btn {
            background-color: #c9a94a;
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
        }
        .btn:hover {
            background-color: #a88939;
        }
        .content {
            flex: 1;
            max-width: 1000px;
            width: 100%;
            margin: 40px auto;
            padding: 0 20px;
        }
        footer {
            background-color: #ab0ab1;
            color: #eee;
            text-align: center;
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            font-family: inherit;
            resize: vertical;
        }
        textarea {
            min-height: 120px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }
            nav a {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    <nav>
        <div class="logo">Sofia Sahara</div>
        <div>
            <a href="{{ url('/') }}">Accueil</a>
            <a href="{{ route('service') }}">Services</a>
            
            <a href="{{ route('login') }}">Login</a>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Sofia Sahara – Tous droits réservés.
    </footer>

</body>
</html>
