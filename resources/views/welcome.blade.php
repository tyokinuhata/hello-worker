<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello Worker</title>
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
        <div id="app">
            <example></example>
        </div>
        <script>
            window.Laravel = window.Laravel || {};
            window.Laravel.csrfToken = "{{csrf_token()}}";
        </script>
        <script src="js/app.js"></script>
    </body>
</html>