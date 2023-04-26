<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Awcodes\Shout\Shout;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use Filament\Forms;

class CheckTicketStatus extends Component implements HasForms
{

    use Forms\Concerns\InteractsWithForms;

    public $ref_no;

    public $ticket;

    public function render()
    {
        return view('livewire.check-ticket-status');
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('ref_no')->label("Your Ticket Reference Number")->required(),
            Shout::make('success')
                ->content(function(){

                    if(is_null($this->ticket)){
                        return "No Ticket  Found";
                    }

                    if(is_null($this->ticket->reply)){
                        return "Your Ticket is still  under review";
                    }

                })
                ->type('info') // defaults to info
                ->columnSpan('full')
                ->hidden(fn() => empty($this->ref_no) ),


        ];
    }

    public function submit(): void
    {



        $ticket = Ticket::where('ref_no',$this->ref_no)->with('reply')->first();


        $this->ticket = $ticket;


    }


}
