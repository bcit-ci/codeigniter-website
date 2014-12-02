<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
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
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/welcome.php
 *
 * Home page for the CodeIgniter website
 *
 */
?>
<!-- Big Links -->
<div class="row row-md-flex row-md-flex-wrap">

    {biglinks}
    <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="well text-center">
            <div class="stat-icon">
                <span class="glyphicon glyphicon-{icon}"></span>
            </div>
            <div class="stat-number">
                <a href="{link}">{label}</a>
            </div>
            <div>{text}</div>
        </div>
    </div>
    {/biglinks}

</div>

<hr/>

<!-- Recent Community Info -->
<div class="row">

    <div class="col-md-6">
        {news}
    </div>

    <div class="col-md-6">
        {posts}
    </div>

</div>

<!-- Features -->
<hr/>

<div class="row">

    <h2>Why CodeIgniter?</h2>

    <br/>

    <div class="col-sm-12 col-md-6 features">
        {features1}
        <div class="feature">
            <div class="feature-icon">
                <span class="glyphicon glyphicon-{icon}"></span>
            </div>
            <h5>{label}</h5>
            <p>{text}</p>
        </div>
        {/features1}
     </div>

    <div class="col-sm-12 col-md-6 features">
        {features2}
        <div class="feature">
            <div class="feature-icon">
                <span class="glyphicon glyphicon-{icon}"></span>
            </div>
            <h5>{label}</h5>
            <p>{text}</p>
        </div>
        {/features2}
    </div>

    <div class="col-md-12 col-sm-12 text-center title title-end">
        There are a number of sites which compare PHP MVC frameworks. Check them out for yourself :)<br>
        Some of the ones I found useful are <a href="http://www.techempower.com/benchmarks/">TechEmpower</a>, <a href="http://systemsarchitect.net/performance-benchmark-of-popular-php-frameworks/">Systemsarchitect</a>, and <a href="http://socialcompare.com/en/comparison/php-frameworks-comparison">SocialCompare</a>.
    </div>
</div>
