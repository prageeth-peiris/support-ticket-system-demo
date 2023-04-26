<?php

namespace App\Http\Livewire;

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

    public function render()
    {
        return view('livewire.add-ticket-form');
    }


    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('customer_name')->label("Your Name")->required(),
            Forms\Components\TextInput::make('customer_email')->label("Your Email")->required(),
            Forms\Components\TextInput::make('customer_phone')->label("Your Phone")->required(),
            Textarea::make('problem')->label("Problem")->required()
                ->rows(10)
                ->cols(20)

            // ...
        ];
    }

    public function submit(): void
    {
        // ...
    }
}
