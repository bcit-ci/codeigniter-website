<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * views/template.php
 *
 * Template page for the CodeIgniter website.
 *
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>{pagetitle}</title>
		<link rel="icon" type="image/png" href="/assets/images/ci-icon.png" />
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/github-buttons/style.css"/>
    </head>
    <body>

		<!-- top of the page -->
		<div class="navbar navbar-default navbar-fixed-top" id="mainnav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">CodeIgniter</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						{menubar}
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		{titleblock}

		<!-- center of the page -->
		<div id="content">
			<div class="container">
				{content}
			</div>
		</div>

		<!-- bottom of the page -->
		<div class="footer">
			<div class="footer-menu">
				<div class="container">
					<div class="row bcit50">
						<ul class="nav nav-pills">
							{footerbar}
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">

						<p class="text-center">CodeIgniter was created by <a href="https://www.ellislab.com/">EllisLab</a> 
							and is now a project of the <a href="http://www.bcit.ca/cas/computing/">British Columbia Institute of Technology</a>
							<a href="mailto:jim_parry&commat;bcit.ca"><span class="glyphicon glyphicon-envelope"></span></a></p>
					</div>
				</div>
			</div>
		</div>

		<script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');</script>
		<script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
