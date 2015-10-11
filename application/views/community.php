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
 * views/community.php
 *
 * Describe the CodeIgniter community
 *
 */
?>
<div class="container">
    <div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-user big-glyph"></span>
			CodeIgniter is a community-developed open source project,<br>with several venues for the community members to gather and exchange ideas.
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
					<h3>Forum</h3>

					<p>
						Our forum has been setup using MyBB, with four main categories:
					<ul>
						<li>General (News &amp; Discussion, Lounge, and Events)</li>
						<li>Using CodeIgniter (Choosing CodeIgniter, Installation &amp; Setup, Model-View-Controller, Libraries &amp; Helpers, and Best Practices)</li>
						<li>Development (CodeIgniter 3.x, CodeIgniter 2.x, Issues)</li>
						<li>External Resources (Addons, Jobs, Learn More, and Spotlight)</li>
					</ul>
					</p>
					<p><strong>The forum is where you can ask for help or discuss issues you are having with framework.</strong></p>
					<p>
						The previous CodeIgniter forums are archived on EllisLab's server. 
						EllisLab has provided the archived posts to us, and they are being transferred to the new forum, so all the content is together.
					</p>
					<a class="btn btn-primary btn-block" href="{mybb_forum_url}"><span class="glyphicon glyphicon-share"></span> Visit the forum</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>IRC.</h3>

					<p>
						CodeIgniter has its own Internet Relay Chat channel, #codeigniter.<br>
						You can connect to it using your favorite IRC client, or use 
						<a href="http://webchat.freenode.net/?channels=%23codeigniter&uio=d4%22">webchat</a>. 
						Our website's IRC page has an embedded webchat iframe.
					</p>
					<p>The IRC channel will often have over 80 people in it, but many of those
						are in different timezones, and they stay logged in to catch up
						on conversations when they are next around.
						If you are new to IRC, read this 
						<a href="http://workaround.org/getting-help-on-irc" target="_blank">introduction</a> 
						first.</p>
					<a class="btn btn-default btn-block" href="irc"><span class="glyphicon glyphicon-share"></span> Visit I.R.C.</a>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>Github</h3>

					<p>
						The development action takes place on Github. See the contribute page for more details.
					</p>
					<p><strong>The Github repository is where you can file bug reports (github issues),
							or where you can submit pull requests for enhancements to or fixes for framework.
							Github is *not* for support or help ... use the forum instead.</strong></p>
					<p>Github issues are also used for tracking planned and approved enhancements,
						often tied in to specific releases.</p>
					<br/>
					<a class="btn btn-default btn-block" href="https://github.com/bcit-ci/CodeIgniter/"><span class="glyphicon glyphicon-share"></span> Visit Github</a>
				</div>
			</div>
		</div>

    </div>
</div>
