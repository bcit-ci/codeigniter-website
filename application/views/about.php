<?php
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
		<img class="pull-left" src="/avatars/{avatar}" width="84" height="64"/> <strong>{name}</strong> - {roles}<br/>
		{description}
		{badges}<a href="http://{badge}.com/{handle}"><img src="/assets/icons/{badge}.jpg" /></a>{/badges}
	</div>
	<br/>
	{/council}

</div>

<div class="container">
	<div class="lead text-info">Our Website</div>
    <p>
        We have had a lot of enthusiasm about our website, both good and bad.<br/>
        We are grateful for the council contributions from Johannes Gamperl (Germany), Andreas Pfotenhauer (Germany), and David Wosnitza (Germany), helping to get CodeIgniter back on track.<br/>
        We are grateful for the design and code contributions from Lonnie Ezell (USA), Michał Śniatała (Poland) and Raymond King (USA).<br/>
        Thank you, as well, to all of the community members who have made constructive suggestions to improve the design and usability of the site!
    </p>
</div>

<div class="container">
	<div class="lead text-info">Security Team</div>
	<p>
        We are fortunate to have a dedicated security team, investigating and fixing vulnerabilities.<br/>
        Kevin Morssink (The Netherlands) is a community member contributing to the team.<br/>
        We are grateful for past contributions from Debasis Mohanty (New Zealand)<br/>
        Thank you, as well, to all of the community members who have reported vulnerabilities!
    </p>
</div>
