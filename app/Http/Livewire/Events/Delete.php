<?php

namespace App\Http\Livewire\Events;
use App\Models\Event;
use Livewire\Component;
use App\Events\UserEvent;

class Delete extends Component
{

    public $eventId;



    public function getEventProperty(){
        return Event::find($this->eventId);
    }

    public function render()
    {
        return view('livewire.events.delete');
    }
    public function delete() {
        $this->event->delete();
        $log_entry = 'Delete     Store: "'. $this->event->name . '"with an ID: ' . $this->event->id;

        event(new UserEvent($log_entry));

        return redirect('/dashboard')->with('message', $this->event->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
