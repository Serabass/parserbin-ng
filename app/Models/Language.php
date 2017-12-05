<?php

namespace Parserbin\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function scripts()
    {
        return $this->hasMany(Script::class, 'languageId');
    }
}
