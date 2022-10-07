<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use App\Events\UserEvent;

class Create extends Component
{
    public $name,$place,$host;

    public function addEvent(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'place'         => ['required'],
                'host'          => ['required','string','max:255'],
            ]);

            Event::create([
                'name'        => $this->name,
                'place'         => $this->place,
                'host'          => $this->host,
            ]);

            $log_entry = 'Added Store' . $this->name;
            event(new UserEvent($log_entry));
            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.events.create');
    }
}
