<?php

namespace App\Http\Livewire;
use App\Models\Topics;
use Livewire\Component;

class Onderwerpen extends Component
{
    public $filter;
    public $topics;
    public $message;

    public function render()
    {
        $this->topics = Topics::all();

        if ($this->filter) {
            $this->topics = match ($this->filter) {
                'ascending' => $this->topics->sortBy('name', 0),
                'descending' => $this->topics->sortBy('name', 0, true),
                'newest' => $this->topics->sortBy('created_at', 0),
                'oldest' => $this->topics->sortBy('created_at', 0, true),
            };
        }

        return view('livewire.onderwerpen');
    }

    public function goToArticles($topic)
    {
        return redirect('artikel/overzicht')->with([
            'topic' => $topic
        ]);
    }

}
