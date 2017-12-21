<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hello Worker</title>
        <link rel="stylesheet" href="css/app.css"/>
    </head>
    <body>
        <h1>hello, worker</h1>
        <script>
            window.Laravel = window.Laravel || {};
            window.Laravel.csrfToken = "{{csrf_token()}}";
        </script>
    </body>
</html>