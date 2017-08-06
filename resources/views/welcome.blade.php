<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav>
                    <ul>
                        <li>Home</li>
                        <li>About</li>
                        <li>Contact</li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <h1>Font-Awesome</h1>
                <i class="fa fa-address-book" aria-hidden="true"></i>
            </div>

            <div class="row">
                <h1>Bootstrap CSS</h1>
                <span class="glyphicon glyphicon-trash"></span>

                <div class="alert alert-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not loocking too good.
                </div>
            </div>

            <div class="row">
                <footer>
                    Rodapé
                </footer>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
        <!-- Comentado - Transportado para app.js
        <script type="text/javascript">
            $(document).ready(function (){
                alert('Olá Mundo');
            });
        </script>
        -->
    </body>
</html>
