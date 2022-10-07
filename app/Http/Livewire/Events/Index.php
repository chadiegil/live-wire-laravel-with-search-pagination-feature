<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    public $search, $name='all',$product;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadEvent() {

        $query = Event::orderBy('name')
        ->search($this->search);

        if($this->name!='all'){
            $query->where('name', $this->name);
        }



        $events = $query->paginate(5);
        return compact('events');
    }

    public function render()
    {
        return view('livewire.events.index', $this->loadEvent());
    }
}
