<?php

return [
	"STATUS_ACTIVE" => 1,
	"STATUS_INACTIVE" => 0,
	"CATEGORY_MEDIA_UPLOAD" => 17,
	"MEDIA_UPLOAD" => 18,
	"MEDIA_PATH" => [
		17 => 'upload/category',
		18 => 'upload/articles'
	],
	"MEDIA_TYPE" => [
		'image' => array('field_name' => 'image_media', 'extension' => array("jpg", "png", "jpeg"), 'max_size' => 50000000000),
		'image' => array('field_name' => 'video_media', 'extension' => array("jpg", "png", "jpeg"), 'max_size' => 50000000000),
	]
];