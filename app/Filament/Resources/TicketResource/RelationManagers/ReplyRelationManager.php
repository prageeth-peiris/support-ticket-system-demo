<?php

namespace App\Filament\Resources\TicketResource\RelationManagers;

use App\Actions\Emails\SendReplyAsAnEmail;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;;

class ReplyRelationManager extends RelationManager
{
    protected static string $relationship = 'reply';

    protected static ?string $recordTitleAttribute = 'reply';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('reply')
                    ->rows(10)
                    ->cols(20)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reply'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->after(function(RelationManager $livewire){

                    $reply = $livewire->ownerRecord->reply->reply;
                    $customer_email = $livewire->ownerRecord->email;
                    $ref_no = $livewire->ownerRecord->ref_no;

                    SendReplyAsAnEmail::dispatch($customer_email,$reply,$ref_no);

                })

                ,
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
