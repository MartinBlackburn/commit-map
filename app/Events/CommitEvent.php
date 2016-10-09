<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommitEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;
    
    public $lat;
    public $lng;
    public $message;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($lat, $lng, $message)
    {
        $this->lat = $lat;
        $this->lng = $lng;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [new Channel('commit-channel')];
    }
}
