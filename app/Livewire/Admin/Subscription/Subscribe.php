<?php

namespace App\Livewire\Admin\Subscription;

use App\Models\Price;
use App\Models\Router;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Subscribe extends Component
{
    public $id;
    public $unique_id;
    public $serial_number;
    public $amount;
    public $contact;
    public $status;
    public $subscription_date;
    public $expiry_date;

    public function mount()
    {
        $this->serial_number = Router::where('unique_id', Auth::user()->unique_id)->first()->serial_number;
        $this->amount = Price::first()->price;
        $this->contact = Auth::user()->contact;
    }

    protected $rules = [
        'contact' => 'required',
    ];


    public function resetFrom()
    {
        $this->serial_number = '';
        $this->amount = '';
        $this->contact = '';
        $this->status = '';
        $this->subscription_date = '';
        $this->expiry_date = '';

    }

    public function create()
    {
        $this->validate();

        Subscription::create([
            'unique_id' => Auth::user()->unique_id,
            'serial_number' => $this->serial_number,
            'amount' => $this->amount,
            'contact' =>'233'.substr($this->contact, -9),
            'subscription_date' => now(),
            'expiry_date' => now()->addMonth(),
        ]);

        sendWithSMSONLINEGH('233'.substr($this->contact, -9),
                'Yo! Your subscription on router with serial number '. $this->serial_number.' is good to go! Stay connected & happy browsing! Best regards,  GABSAB Team.');
        session()->flash('message', 'Subscription created successfully.');
        $this->resetFrom();
        return redirect()->route('customer.subscriptions');


    }

    public function render()
    {
        $datas = Subscription::where('unique_id', Auth::user()->unique_id)->get();
        $routers = Router::where('unique_id', Auth::user()->unique_id)->get();
        $prices = Price::all();
        return view('livewire.admin.subscription.subscribe', compact('datas', 'routers', 'prices'));
    }
}
