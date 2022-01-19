<!-- light-blue - v4.0.1 - 2018-10-31 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>
    <link href="{{ asset('css/application.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
    <div class="single-widget-container">
         <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- common libraries. required for every page-->
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery-pjax/jquery.pjax.js') }}"></script>
<script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/widgster/widgster.js') }}"></script>
<script src="{{ asset('lib/underscore/underscore.js') }}"></script>

<!-- common application js -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
</body>
</html>