<?php ob_start() ?>
<article>
    <div id="manin" class="container">
        <h3>Админ панель</h3>
        <div class="row">
            <p>Админ панель</p>
        </div>
    </div>
</article>

<?php $content = ob_get_clean();?>

<?php include "viewAdmin/template/layout.php";