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
 * views/addons.php
 *
 */
?>
<div class="row search-row">
	<div class="input-group-lg">
		<!--<span class="input-group-addon" id="sizing-addon1">@</span>-->
		<input type="search" class="form-control" placeholder="Search">
	</div>
</div>
<div class="row cats-container">
	<h1 id="title">Categories</h1>

	<div class="cats-items">
		<div class="cat-item">
			<a href="">
				<h2>CMS (12)</h2>
				<p>CMS stuff</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Libraries (12)</h2>
				<p>Got books?</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Model (12)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>CRUD (12)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Templates (12)</h2>
				<p>Template your sites away!</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>ORM (12)</h2>
				<p>All sorts of object relational managers</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Translations (12)</h2>
				<p>Languages!</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Testing (5)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Auth (30)</h2>
				<p>Other things</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>JavaScript (30)</h2>
				<p>Other things</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Analytics (30)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Error Handling (30)</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Third Party (30)</h2>
				<p>Other things</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Utilities (50)</h2>
				<p>et dolore magna aliqua. Ut enim ad minim veniam,  ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</a>
		</div>
		<div class="cat-item">
			<a href="">
				<h2>Other (30)</h2>
				<p>Other things</p>
			</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<h1>Recently Added?</h1>
		<table class="table table-hover table-expanded table-vertical-align">
			<thead>
				<tr class="text-uppercase">
					<th class="col-md-6">Name</th>
					<th class="col-md-2 hidden-xs">Author</th>
					<th class="col-md-2 hidden-xs">Rating</th>
					<th class="col-md-2 hidden-xs">Updated</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a><h3>Really Great Addon</h3></a>
						<p>This is the description of a really great addon that Jim wrote</p>
					</td>
					<td class="hidden-xs">Jim</td>
					<td class="hidden-xs"><h1><span class="label label-success">9</span></h1></td>
					<td class="hidden-xs"><span class="text-muted">5 hours ago</span></td>
				</tr>
				<tr>
					<td>
						<a><h3>Karim's bad plugin</h3></a>
						<p>Very short description</p>
					</td>
					<td class="hidden-xs">Karim</td>
					<td class="hidden-xs"><h1><span class="label label-default">4</span></h1></td>
					<td class="hidden-xs"><span class="text-muted">2 months ago</span></td>
				</tr>
				<tr>
					<td>
						<a><h3>Crazy CMS Addon</h3></a>
						<p><em>No description</em></p>
					</td>
					<td class="hidden-xs">Steve</td>
					<td class="hidden-xs"><h1><span class="label label-warning">6</span></h1></td>
					<td class="hidden-xs"><span class="text-muted">3 weeks ago</span></td>
				</tr>
				<tr>
					<td>
						<a><h3>New Addon</h3></a>
						<p>A newly submitted addon with no score.</p>
					</td>
					<td class="hidden-xs">Karim</td>
					<td class="hidden-xs"><h1><span class="label label-default">-</span></h1></td>
					<td class="hidden-xs"><span class="text-muted">5 hours ago</span></td>
				</tr>
				<tr>
					<td>
						<a><h3>Bad Addon</h3></a>
						<p>A lot of down votes happening here</p>
					</td>
					<td class="hidden-xs">Karim</td>
					<td class="hidden-xs"><h1><span class="label label-danger">2</span></h1></td>
					<td class="hidden-xs"><span class="text-muted">5 months ago</span></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>