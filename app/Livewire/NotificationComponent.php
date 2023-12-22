<?php

namespace App\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{
    public $message;
    public $type;

    protected $listeners = ['notify'];
    public function notify($message, $type = 'success')
    {
        $this->message = $message;
        $this->type = $type;
        $this->dispatchBrowserEvent('showNotification');
    }
    public function render()
    {
        return view('livewire.notification-component');
    }
}
