<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $table = "channels";

    protected $fillable = [
        'name',
    ];

    protected function whatchedtimes()
    {
        return $this->hasMany(WatchedTime::class);
    }

    public function scopeWithTotalTime($query)
    {
        $tableWatchedTime = (new WatchedTime)->getTable();
        return $query->selectRaw("id,
            (
                select sum(minutes) from {$tableWatchedTime} where channel_id=channels.id
            ) as totalTime"
        )->orderby('totalTime', 'desc');
    }
}
