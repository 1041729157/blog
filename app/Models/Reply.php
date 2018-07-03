<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	/* protected $table = 'reply'; //指定数据库表名 */ 
	protected $fillable = ['content'];

    public function blog()
    {
    	return $this->belongsTo(Blog::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
