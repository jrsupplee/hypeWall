<?php

$subject = $vars['item']->getSubjectEntity();
$object = $vars['item']->getObjectEntity();

$extras = hj_wall_get_tags_str($object);

$wall_owner = $object->getOwnerEntity();

$who = elgg_view('output/url', array(
	'text' => $subject->name,
	'href' => $subject->getURL()
));

$by = elgg_view('output/url', array(
	'text' => $wall_owner->name,
	'href' => $wall_owner->getURL()
));

$link = elgg_view('output/url', array(
	'text' => elgg_echo('item:object:hjwall'),
	'href' => $object->getURL()
));

$summary = elgg_echo('hj:wall:tagged:rel', array($who, $by, $link));

if (!$attachment = get_entity($object->attachment)) {
	$att_str = '<div class="elgg-content">' . $object->attachment . '</div>';
} else {
	$att_str = '<div class="elgg-content">' . elgg_view_entity($attachment, array(
		'full_view' => false,
		'icon_only' => true,
		'icon_size' => 'master'
	));
}

echo elgg_view('river/item', array(
	'item' => $vars['item'],
	'summary' => $summary,
	//'message' => $excerpt,
    'attachments' => $att_str
));
