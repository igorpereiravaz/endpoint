<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\User;
use App\Models\WatchedTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class WatchedTimeController extends Controller
{

    public function index()
    {
        $channels = Channel::all();
        foreach ($channels as $channel) {
            $channel->watchedTimes = WatchedTime::minutesOrder($channel->id)->get();
            $position = 0;
            foreach ($channel->watchedTimes as $index => $w) {
                $w->name = $w->user->name;
                if ($index > 0) {
                    if ($w->minutes == $channel->watchedTimes[$index-1]->minutes) {
                        $w->position = $channel->watchedTimes[$index-1]->position;
                    } else {
                        $w->position = $position+1;
                        $position++;
                    }
                } else {
                    $w->position = $position+1;
                    $position++;
                }
            }
        }

        return $channels;


    }

    public function store(Request $request)
    {
        return WatchedTime::all();
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
