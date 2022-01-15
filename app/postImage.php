<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postImage extends Model
{
    protected $primaryKey = 'pimid';
    protected $table = 'post_images';

	public function Post() {
		return $this->belongsTo(post::class, 'pid','pid');
    }
}
