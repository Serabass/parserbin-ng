<?php

namespace Parserbin\Models;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    public function language()
    {
        return $this->belongsTo(Language::class, 'languageId');
    }

    public function parser()
    {
        return $this->belongsTo(Parser::class, 'parserId');
    }
}
