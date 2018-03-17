<div class="container">
    <?php if (!empty($posts)): ?>
    <?php foreach ($posts as $post): ?>
            <div class="jumbotron">
                <h1 class="display-4"><?=$posts['title']?></h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p><?=$posts['text']?></p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
    <?php endforeach; ?>
    <?php endif; ?>

</div>
