<?php
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
		<h3>Recent News</h3>
		{news}
	</div>

	<div class="col-md-6">
		<h3>Active Forum Threads</h3>
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

</div>
