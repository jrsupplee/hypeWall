<?php

$object = elgg_extract('entity', $vars);
$subject = $object->getOwnerEntity();

$extras = hj_wall_get_tags_str($object);

$wall_owner = elgg_get_entities_from_relationship(array(
	'type' => 'user',
	'relationship' => 'wall_owner',
	'relationship_guid' => $object->guid,
	'inverse_relationship' => true
		));

if (elgg_instanceof($wall_owner) && $wall_owner->guid != $subject->guid && $wall_owner->guid != elgg_get_page_owner_guid()) {
	$by = elgg_view('output/url', array(
		'text' => $subject->name,
		'href' => $subject->getURL()
			));
	$on = elgg_view('output/url', array(
		'text' => $wall_owner->name,
		'href' => $wall_owner->getURL()
			));
	$prefix = elgg_echo('hj:wall:new:wall:post', array($by, $on));
}

$body = parse_urls($prefix . $object->description . $extras);

if (!$attachment = get_entity($object->attachment)) {
	$body .= $object->attachment;
} else {
	$body .= elgg_view_entity($attachment, array(
		'full_view' => false,
		'icon_size' => 'master'
			));
}

$attachments = elgg_get_entities_from_relationship(array(
	'relationship' => 'wall_attachment',
	'relationship_guid' => $object,
	'full_view' => false,
	'limit' => 0
		));

if ($attachments) {
	$body .= elgg_view_entity_list($attachments, array(
		'list_class' => 'hj-wall-attachments-list',
		'item_class' => 'hj-wall-attachment'
			));
}

$body = '<div class="elgg-content">' . $body . '</div>';


$body .= elgg_view_comments($object);

$metadata = elgg_view_menu('hjentityhead', array(
	'entity' => $object,
	'handler' => 'hjwall',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
	'has_full_view' => false,
		));

if (elgg_in_context('widgets')) {
	$metadata = '';
}

$params = array(
	'entity' => $object,
	'title' => $subject->name,
	'metadata' => $metadata,
	'subtitle' => $summary,
	'content' => $body,
);
$params = $params + $vars;
$content = elgg_view('object/elements/summary', $params);
echo elgg_view_image_block(elgg_view_entity_icon($subject, 'small'), $content, array('class' => 'hj-wall-post'));

