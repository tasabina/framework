<!--<div class="container">-->
<!--    <div id="answer"></div>-->
<!--    <button class="btn btn-dark" id="send">Button</button>-->
<!--    --><?php //new \fw\widgets\menu\Menu([
//            'tpl' => WWW . '/menu/select.php',
//            'containet' => 'select',
//            'table' => 'posts',
//            'cache' => 60,
//            'cacheKey' => 'menu_select',
//    ]); ?>
<!--    --><?php //if (!empty($posts)): ?>
<!--    --><?php //foreach ($posts as $post): ?>
<!--            <div class="jumbotron">-->
<!--                <h1 class="display-4">--><?//=($post['title']);?><!--</h1>-->
<!--                <p class="lead">--><?//=($post['subtitle']);?><!--</p>-->
<!--                <hr class="my-4">-->
<!--                <p>--><?//=($post['text']);?><!--</p>-->
<!--                <p class="lead">-->
<!--                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>-->
<!--                </p>-->
<!--            </div>-->
<!--    --><?php //endforeach; ?>
<!--    --><?php //endif; ?>
<!---->
<!--</div>-->
<!--<script src="/fw.loc/js/test.js"></script>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $('#send').click(function () {-->
<!--            $.ajax({-->
<!---->
<!--                url: '/fw.loc/main/test',-->
<!--                type: 'post',-->
<!--                data: {'id': 13},-->
<!--                success:function (res) {-->
<!--                    // var data = JSON.parse(res);-->
<!--                    // $('#answer').html('<p>Answer:' + data.answer + '| Code:' + data.code +'</p>');-->
<!--                    $('#answer').html(res);-->
<!--                    // console.log(res);-->
<!--                },-->
<!--                error: function () {-->
<!--                    alert('Error!');-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->