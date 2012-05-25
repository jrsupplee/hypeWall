<?php

$status = elgg_view('input/plaintext', array(
	'name' => 'description',
	'class' => 'hj-wall-status',
	'placeholder' => elgg_echo('hj:wall:file:placeholder')
		));

$file = elgg_view('input/file', array(
	'name' => 'upload',
	'id' => 'hj-wall-file-upload'
));

$friends = elgg_view('input/wall_tags', array(
	'name' => 'wall_tag',
	'class' => 'hj-wall-friends',
	'value' => elgg_echo('hj:wall:tag:friends')
		));

if (elgg_is_active_plugin('hypeMaps')) {
	elgg_load_js('hj.maps.base');
	elgg_load_js('hj.maps.google');
	
	$location = elgg_view('input/text', array(
		'name' => 'location',
		'class' => 'hj-wall-location'
			));
}

$access = elgg_view('input/access', array(
	'class' => 'hj-wall-access',
	'name' => 'access_id'
		));

$wall_owner = elgg_view('input/hidden', array(
	'name' => 'wall_owner',
	'value' => elgg_get_page_owner_guid()
));

$button = elgg_view('input/submit', array(
	'value' => elgg_echo('hj:wall:button:share'),
	'class' => 'hidden'
		));

$html = <<<HTML
<div class="hj-wall-form-wrapper">
	$status
	<div class="hj-wall-file-input">$file</div>
	<div class="hj-wall-form-attachment"></div>
	<div class="hj-wall-form-taginput">
		$friends
		$location
	</div>
	$wall_owner
	<div class="hj-wall-form-bar clearfix">
		<ul class="hj-wall-bar-controls">
			<li>$access</li>
			<li>$button</li>
		</ul>
	</div>
</div>
HTML;

echo $html;