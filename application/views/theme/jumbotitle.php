<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Title block for the homepage
 */
?>
<div class="jumbotron">
    <div class="container">
        <div class="hidden-xs hidden-sm col-md-4 col-lg-4 pull-left">
            <img vspace="20" class="jumbotronwidth" alt="" src="/assets/images/ci-logo-big.png">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h1>CodeIgniter Rocks</h1>
            <p>CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need
                a simple and elegant toolkit to create full-featured web applications.</p>

            <div class="row text-left">
              <?php if ( ! empty($github_repo) && is_array($github_repo) && count($github_repo)) : ?>
                <span class="github-btn github-btn-large">
                  <a class="gh-btn" id="gh-btn" href="<?= $github_repo['html_url']; ?>" target="_blank">
                    <i class="fa fa-github"></i>
                    <span class="gh-text" id="gh-text">Star</span>
                  </a>
                  <a class="gh-count" id="gh-count" href="<?= $github_repo['html_url']; ?>/stargazers" target="_blank">
                    <?= number_format($github_repo['stargazers_count']) ?>
                  </a>
                </span>
                <span class="github-btn github-btn-large">
                  <a class="gh-btn" id="gh-btn" href="<?= $github_repo['html_url']; ?>" target="_blank">
                    <i class="fa fa-code-fork"></i>
                    <span class="gh-text" id="gh-text">Fork</span>
                  </a>
                  <a class="gh-count" id="gh-count" href="<?= $github_repo['html_url']; ?>/network" target="_blank">
                    <?= number_format($github_repo['forks_count']) ?>
                  </a>
                </span>
              <?php endif; ?>

              <a class="twitter-follow-button"
                 href="https://twitter.com/CodeIgniter"
                 data-show-count="true"
                 data-show-screen-name="false"
                 data-size="large"
                 data-lang="en">
                  @CodeIgniter
              </a>              
            </div>
        </div>
    </div>
</div>
