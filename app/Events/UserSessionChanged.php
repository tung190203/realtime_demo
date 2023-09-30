<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserSessionChanged implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
public $message ,$type;
    /**
     * Create a new event instance.
     */
    public function __construct($message ,$type)
    {
        $this->message = $message;
        $this->type =$type;
    }

    public function broadcastOn()
    {
        return new Channel('notification');
    }
}
