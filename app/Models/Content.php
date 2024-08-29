<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory, HasUuids;

    function getIncrementing() {
        return false;
    }

    function getKeyType() {
        return 'string';
    }


    public function DetailContent()
    {
        return $this->hasMany(DetailContent::class, 'content_id', 'id');
    }
}
