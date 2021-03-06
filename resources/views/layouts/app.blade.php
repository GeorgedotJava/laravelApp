<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>App Cadastro</title>

</head>
<body>
    <div class="container">
        @component('component_nav', ["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
        
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>