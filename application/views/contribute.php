<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	CodeIgniter Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014-2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/contribute.php
 *
 * How can they help?
 *
 */
?>
<div class="container">
    <div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-heart big-glyph"></span>
			There are many ways to contribute to the CodeIgniter project, whether you are a developer or not.
		</div>

		<div class="col-md-12 col-sm-12">
			<p>CodeIgniter is a community driven project and accepts contributions of code and documentation from the community.
				These contributions are made in the form of Issues or Pull Requests on the
				<a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">CodeIgniter repository</a> on GitHub.</p>
			<p>Issues are a quick way to point out a bug. If you find a bug or documentation error in CodeIgniter then please check a few things first:
			<ul>
				<li>There is not already an open Issue</li>
				<li>The issue has already been fixed (check the develop branch, or look for closed Issues)</li>
				<li>Is it something really obvious that you fix it yourself?</li>
				<li>If you are unsure if you have found a bug, then start a new thread in the CodeIgniter forum, in the
					<a href="<?= config_item('mybb_forum_url') ?>/forum-19.html" target="_blank">Issues section</a>!</li>
			</ul>
			</p>
			<p>
				Reporting issues is helpful but an even better approach is to send a Pull Request,
				which is done by “Forking” the main repository and committing to your own copy.
				This will require you to use the version control system called Git.
			</p><br>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
				Security issues should be reported with an email to our
				<a href="mailto:security@codeigniter.com">security team</a>, rather
				than being brought up on the forum or raised as a Github issue, thanks!
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Not a Programmer?</h3>
					<div class="list-group">
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Testers</h4>
							<p class="list-group-item-text">We always need feedback on what works and what does not! Most of the development effort is going into Version 3,
								so that is where the need is greatest. If you find something that is definitely a bug, and you are a Github user,
								please create a new "issue". If you are not a Github user, or if you are unsure if you have found a bug,
								then start a new thread in the CodeIgniter forum <a href="{mybb_forum_url}/forum-19.html" target="_blank">Issues section</a>!</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Writers</h4>
							<p class="list-group-item-text">Every project needs good documentation! The CodeIgniter user guide is part of the
								<a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">Github project</a> (mentioned above),
								and there is always room for more tutorials.</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Evangelists</h4>
							<p class="list-group-item-text">The word needs to be spread about good and worthy projects, which we think CodeIgniter is :)
								You can help by being active in the forums, answering questions, and by spreading the
								word inside your developer or user community.</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Moderators</h4>
							<p class="list-group-item-text">The forum can always use moderators, to make sure that discussions/threads stay on topic,
								and to weed out the inappropriate users or comments!</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Designers</h4>
							<p class="list-group-item-text">Suggestions and help with our website, User Guide, and forum design are always welcome!
								We are working on themes for each of these, which will be shared in their own Github repository. </p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Are You a Programmer?</h3>
					<div class="list-group">
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Coders</h4>
							<p class="list-group-item-text">If you would like to get involved in helping to build the next version of CodeIgniter, join us on
								<a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">Github</a>!
								A detailed <a href="/userguide3/contributing/index.html">contribution guide</a> is in the 
								User Guide, but the main points are to make sure your code conforms
								to our <a href="/userguide3/general/styleguide.html">style guide</a>, that it is properly documented, and that you use the
								<a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">Git-Flow</a> branching model.</p>
						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Reviewers</h4>
							<p class="list-group-item-text">Every project needs a core group of developers, familiar with the project standards and conventions, to
								review proposed enhancements and fixes. We have been really fortunate with our group of reviewers so far, and hope to recruit a few more.
								Reviewers also have "commit" privileges for the code repository.</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Do You see the Big Picture?</h3>
					<div class="list-group">
						<div class="list-group-item">
							<h4 class="list-group-item-heading">Wise Men</h4>
							<p class="list-group-item-text">The direction that CodeIgniter takes, and hence its roadmap, needs to be carefully vetted and wisely chosen.
								We have a small group from the community, devoted to the framework, to form a council for discussing
								and choosing the future direction(s) of the framework!</p>
							<p>Part of our job over the next year will be to put in place proper governance procedures.</p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>I'm an Academic (Note from the project lead...)</h3>
					<p>Part of my goal is to build a "living lab" around this project, teaching my students how to work on
						open source projects, and having them help make this the best one ever!</p>
					<p>I welcome collaboration, on any level, with other academics. This could be in the form of sharing
						teaching materials, working on this or your open source project, or even just sharing experiences.</p>
					<hr/>
					<p>If you have questions, or would like more information, email me using the link in the footer!</p>

				</div>
			</div>
		</div>

    </div>
</div>
