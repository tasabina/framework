<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php \fw\core\base\View::getMeta()?>
</head>
<body>
    <div class="container">
        <ul class="nav nav-pills">
            <li><a href="/">HOME</a></li>
            <li><a href="page/about">ABOUT</a></li>
            <li><a href="user/admin">Admin</a></li>
            <li><a href="user/signup">User sign up</a></li>
            <li><a href="user/login">User login</a></li>
            <li><a href="user/logout">USer logout</a></li>
        </ul>

    </div>

<h1>DEFAULT</h1>

    <?php if(isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error']; unset($_SESSION['error'])?>
        </div>

    <?php endif; ?>

    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['success']; unset($_SESSION['success'])?>
        </div>

    <?php endif; ?>
    <?php debug($_SESSION); ?>

<?=$content?>

<?= debug(\fw\core\Db::$countSql)?>
<?= debug(\fw\core\Db::$queries)?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js" ></script>

</body>
</html>