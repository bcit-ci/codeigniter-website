<?php if ($github_info) : ?>
    <span class="github-btn github-btn-large">
        <a class="gh-btn" href="<?= $github_info['html_url']; ?>" target="_blank">
            <i class="fa fa-github"></i>
            <span class="gh-text">Star</span>
        </a>
        <a class="gh-count" href="<?= $github_info['html_url']; ?>/stargazers" target="_blank">
          <?= $github_info['stargazers_count'] ?>
        </a>
    </span>
    <span class="github-btn github-btn-large">
        <a class="gh-btn" href="<?= $github_info['html_url']; ?>" target="_blank">
            <i class="fa fa-code-fork"></i>
            <span class="gh-text">Fork</span>
        </a>
        <a class="gh-count" href="<?= $github_info['html_url']; ?>/network" target="_blank">
            <?= $github_info['forks_count'] ?>
        </a>
    </span>
<?php endif; ?>