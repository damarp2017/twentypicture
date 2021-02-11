<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeEmbed extends Model
{
    use HasFactory;

    protected $fillable = ['embed_url'];
}
