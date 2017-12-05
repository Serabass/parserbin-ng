<?php

namespace Parserbin\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Parserbin\User;

class Parser extends Model
{
    protected $appends = ['isMine'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function scripts()
    {
        return $this->hasMany(Script::class, 'parserId');
    }

    public function getIsMineAttribute()
    {
        return Auth::check() && $this->userId === Auth::id();
    }
}
