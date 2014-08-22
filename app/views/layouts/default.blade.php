<?php
\Debugbar::enable();
$debugbar = App::make('debugbar');
$renderer = Debugbar::getJavascriptRenderer();
?>
<html>
    <head>
        <?php echo $renderer->renderHead() ?>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        <?php echo $renderer->render() ?>
    </body>
</html>