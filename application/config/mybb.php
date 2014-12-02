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
 * @author	CodeIgniter Community
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Code for the news forum in our MyBB
 */
$config['news_forum_id'] = 2;

/**
 * An array of usernames to restrict our search for
 * news articles to. This simply helps limit the work to do.
 */
$config['news_usernames'] = array('ciadmin', 'jlp');

/**
 * The link to direct visitors to for our forum
 */
$config['forum_url'] = 'http://forum.codeigniter.com';

/**
 * Bogus news items for testing.
 */
$config['bogus_news'] = array(
    array('subject' => 'Authentication, enough already!',
	'username' => 'jlp', 'dateline' => '1415388160', 'tid' => '396'),
    array('subject' => 'CodeIgniter Translations',
	'username' => 'jlp', 'dateline' => '1415387207', 'tid' => '376'),
    array('subject' => 'Upgraded forum software to MyBB 1.8',
	'username' => 'jlp', 'dateline' => '1415140912', 'tid' => '254'),
    array('subject' => 'Spammers, blech',
	'username' => 'ciadmin', 'dateline' => '1415138797', 'tid' => '202'),
    array('subject' => 'Help Wanted: Wiki',
	'username' => 'jlp', 'dateline' => '1414737566', 'tid' => '1769'),
);

/**
 * Bogus posts for testing.
 */
$config['bogus_posts'] = array(
    array('subject' => 'Multi Table Select (Active Records)',
	'username' => 'Han Solo', 'lastpost' => '1414567370', 'tid' => '407'),
    array('subject' => 'unexpected end of file',
	'username' => 'Yoda', 'lastpost' => '1414567370', 'tid' => '413'),
    array('subject' => 'Status Enable & Disable Not Working',
	'username' => 'Luke Skywalker', 'lastpost' => '1414567370', 'tid' => '403'),
    array('subject' => 'waiting for CI3.0 version',
	'username' => 'Princess Leia', 'lastpost' => '1414567370', 'tid' => '4'),
    array('subject' => 'How i can select most common value with codeigniter',
	'username' => 'Obi Wan Kenobi', 'lastpost' => '1414567370', 'tid' => '414'),
);
