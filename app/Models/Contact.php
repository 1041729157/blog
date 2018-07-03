<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
    	'name', 'email', 'content'
    ];

    public function user()
    {
    	return $this->belongTo(User::class);
    }

    public function scopeRecentReplied($query)
    {
    	return $query->orderBy('updated_at', 'desc');
    }

    public function scopeRecent($query)
    {
    	return $query->orderBy('created_at', 'asc');
    }

    public function link($id = null)
    {
    	return route('contacts.index', 'id');
    }
}
