<?php namespace Neonbug\News\Models;

class News extends \Neonbug\Common\Models\BaseModel {
	
	protected $casts = [
		'published' => 'boolean',
	];
	
}
