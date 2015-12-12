<table class="table table-hover table-expanded table-vertical-align">
	<thead>
		<tr class="text-uppercase">
			<th class="col-md-6">Name</th>
			<th class="col-md-1 hidden-xs">Author</th>
			<th class="col-md-1 hidden-xs">License</th>
			<th class="col-md-1 hidden-xs">Version</th>
			<th class="col-md-1 hidden-xs">Rating</th>
			<th class="col-md-1 hidden-xs">Added</th>
			<th class="col-md-1 hidden-xs">Last Updated</th>
		</tr>
	</thead>
	<tbody>
		{addons}
		<tr>
			<td>
				<a href="{homepage_url}" target="_blank"><h3>{addon_name}</h3></a>
				<p>{addon_description}</p>
				<p></p>
			</td>
			<td class="hidden-xs">{author_name}</td>
			<td class="hidden-xs">{license}</td>
			<td class="hidden-xs">{version}</td>
			<td class="hidden-xs"><h1><span class="label label-default">-</span></h1></td>
			<td class="hidden-xs"><span class="text-muted">{added}</span></td>
			<td class="hidden-xs"><span class="text-muted">{updated}</span></td>
		</tr>
		{/addons}
	</tbody>
</table>
