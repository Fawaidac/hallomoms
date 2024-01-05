<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breastfeeding extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
    ];

    protected $table = 'breastfeeding';

    public function getVideo($value)
    {
        $embed = OEmbed::get($value);
        if ($embed) {
            return $embed->html(['width' => 600]);
        }
    }
}
