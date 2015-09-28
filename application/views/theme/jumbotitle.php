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

            <?php if ( ! empty($github_repo) && is_array($github_repo) && count($github_repo)) : ?>
            <div class="row text-left">
              <div class="btn-group">
                <a href="<?= $github_repo['html_url'] ?>" target="_blank" type="button" class="btn btn-xs btn-white">
                  <i class="fa fa-lg fa-github"></i>
                </a>
                <button type="button" class="btn btn-xs btn-white disabled">
                  <i class="fa fa-star fa-lg"></i> <?= number_format($github_repo['stargazers_count']) ?>
                </button>
                <button type="button" class="btn btn-xs btn-white disabled">
                  <i class="fa fa-code-fork fa-lg"></i> <?= number_format($github_repo['forks_count']) ?>
                </button>
              </div>
            </div>
            <?php endif; ?>
            <div class="row text-right">
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
