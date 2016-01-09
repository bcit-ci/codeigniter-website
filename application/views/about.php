<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2016, British Columbia Institute of Technology
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
 * @copyright	Copyright (c) 2014-2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/about.php
 *
 * What's the story?
 *
 */
?>
<div class="container">

	<div class="lead text-info">Council</div>
	<div>The CodeIgniter project has a council, to oversee the continued development 
		of CodeIgniter 3 and
		to steer the framework to the next level, CodeIgniter 4.</div>
	<br/>
	{council}
	<div class="row council">
		<img class="pull-left" src="/data/avatars/{avatar}" width="84" height="64"/> <strong>{name}</strong> - {roles}<br/>
		{description}
		{badges}<a href="http://{badge}.com/{handle}"><img src="/assets/icons/{badge}.jpg" /></a>{/badges}
	</div>
	<br/>
	{/council}

</div>

<div class="container">
	<div class="lead text-info">Our Website</div>
	<div>We have had a lot of enthusiasm about our website, both good and bad.</div>
	<div>We are grateful for the council contributions from Johannes Gamperl (Germany),
		Andreas Pfotenhauer 
		(Germany), and David Wosnitza (Germany), helping to get CodeIgniter
		back on track :).</div>
	<div>We are grateful for the design and code contributions from 
		Lonnie Ezell (USA), Michał Śniatała (Poland)
		and Raymond King (USA).</div>
	<div>Thank you, as well, to all of the community members who have made constructive suggestions to improve
		the design and usability of the site!</div>
	<br/>
</div>

<div class="container">
	<div class="lead text-info">Security Team</div>
	<div>We are fortunate to have a dedicated security team,
		investigating and fixing vulnerabilities.</div>
	<div>Kevin Morssink (Netherlands) is a community member contributing to the team :)</div>
	<div>We are grateful for past contributions from Debasis Mohanty (New Zealand)</div>
	<div>Thank you, as well, to all of the community members who have 
		reported vulnerabilities!</div>
	<br/>
</div>
