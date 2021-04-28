<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethodCreate extends Component
{

    protected $listeners = ['paymentMethodCreate'=>'paymentMethodCreate'];

    public function render()
    {
        return view('livewire.payment-method-create',[
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod)
    {
       auth()->user()->addPaymentMethod($paymentMethod);
    }
}