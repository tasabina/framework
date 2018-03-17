<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/fw.loc/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fw.loc/css/main.css" rel="stylesheet">

    <title>Default</title>
</head>
<body>
<h1></h1>

<?=$content?>

<?= debug(\vendor\core\Db::$countSql)?>
<?= debug(\vendor\core\Db::$queries)?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>