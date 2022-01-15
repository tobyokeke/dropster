<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $primaryKey = 'pid';
    protected $table = 'posts';

	public function Images() {
		return $this->hasMany(postImage::class,'pid','pid');
    }
}
