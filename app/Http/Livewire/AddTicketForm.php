<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Awcodes\Shout\Shout;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms;

class AddTicketForm extends Component implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $customer_name;

    public $customer_email;

    public $customer_phone;

    public $problem;

    public $ref_no;

    public function render()
    {
        return view('livewire.add-ticket-form');
    }


    protected function getFormSchema(): array
    {
        return [
            Shout::make('success')
                ->content(fn() => "Your Ticket was submitted . Your Ticket  Ref No is '{$this->ref_no}' . Please check your ticket status shortly !")
                ->type('success') // defaults to info
                ->columnSpan('full')
            ->hidden(fn() => empty($this->ref_no) ),
            Forms\Components\TextInput::make('customer_name')->label("Your Name")->required(),
            Forms\Components\TextInput::make('customer_email')->label("Your Email")->email()->required(),
            Forms\Components\TextInput::make('customer_phone')->label("Your Phone")->tel()->required(),
            Textarea::make('problem')->label("Problem")->required()
                ->rows(10)
                ->cols(20)

            // ...
        ];
    }

    public function submit(): void
    {

        $ref_no = $this->generateRefNo();

        $ticket = new Ticket([

            'customer_name' => $this->customer_name ,
             'email' => $this->customer_email ,
             'phone' => $this->customer_phone ,
             'problem' => $this->problem ,
             'ref_no' => $ref_no

        ]);


        $ticket->save();

        $this->ref_no = $ref_no;


    }

    private function generateRefNo():string {
        return  'TICKET-' . $this->customer_email . time();
    }

}
