<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h3>Active Forum Threads</h3>

<?php if (!empty($posts) && is_array($posts) && count($posts)) : ?>

    <?php foreach ($posts as $item) : ?>
	<div class="newsitem">
	    <div class="date"><?= date('Y.m.d', $item['lastpost']) ?></div>
	    <p>
		<a href="<?= config_item('mybb_forum_url') . '/thread-' . $item['tid'] . '-lastpost.html' ?>">
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