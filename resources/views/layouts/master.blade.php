<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Club Scientifique de l'ESI | CSE | We Are Creative Nerds</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="css/base.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/06a369e083.js" crossorigin="anonymous"></script>

    @yield('styles')

    <meta name="theme-color" content="#fafafa">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="CSE Web Section">
    <meta name="description"
        content="The scientific club of ESI (CSE), is the oldest club in the Higher National School of Computer Science. Founded in 2008 by a group of ambitious students and it has made huge progress each year ever since. Nowadays, CSE is considered one of the biggest and most active clubs in Algeria.">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="CSE">
    <meta property="og:description"
        content="The scientific club of ESI (CSE), is the oldest club in the Higher National School of Computer Science. Founded in 2008 by a group of ambitious students and it has made huge progress each year ever since. Nowadays, CSE is considered one of the biggest and most active clubs in Algeria.">
    <meta property="og:site_name" content="CSE">
    <meta property="og:image" content="img/logo.png">
    <meta property="og:url" content="https://cse.club">


    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:title" content="CSE">
    <meta name="twitter:description"
        content="The scientific club of ESI (CSE), is the oldest club in the Higher National School of Computer Science. Founded in 2008 by a group of ambitious students and it has made huge progress each year ever since. Nowadays, CSE is considered one of the biggest and most active clubs in Algeria.">
    <meta name="twitter:site" content="@CSE">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="img/logo.png">

</head>

<body>
    <!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    @yield('body')

    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    @yield('scripts')
</body>

</html>