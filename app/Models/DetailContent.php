<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailContent extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'detail_contents';
}
