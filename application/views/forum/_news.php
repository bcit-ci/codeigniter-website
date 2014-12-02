<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h3>Recent News</h3>

<?php if (!empty($news) && is_array($news) && count($news)) : ?>

    <?php foreach ($news as $item) : ?>
	<div class="newsitem">
	    <div class="date"><?= date('Y.m.d', $item['dateline']) ?></div>
	    <p>
		<a href="<?= config_item('mybb_forum_url') . '/thread-' . $item['tid'] . '.html' ?>">
		    <?= $item['subject'] ?>
		</a>
	    </p>
	</div>
    <?php endforeach ?>

<?php else: ?>
    <div class="alert alert-info">
        Drats! Nothing to report today. Come back tomorrow!
    </div>
<?php endif; ?>