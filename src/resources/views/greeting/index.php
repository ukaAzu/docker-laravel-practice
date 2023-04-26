<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Greeting</title>
    </head>
    <body>
        <h1>Greeting</h1>
        <form action="/greeting/welcome" method="post">
            <?php echo e(csrf_field()); ?>
            <input type="text" name="username">
            <input type="submit" value="送信">
        </form>
    </body>
</html>
