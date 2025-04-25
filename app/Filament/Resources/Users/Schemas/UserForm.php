<?php

namespace App\Filament\Resources\Users\Schemas;

use Exception;
use Filament\Forms\Components\CheckboxList;
use Filament\Schemas\Schema;

class UserForm
{
    /**
     * @throws Exception
     */
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                CheckboxList::make('testing')
                    ->label('No Desc\'s')
                    ->bulkToggleable()
                    ->label('')
                    ->columns(2)
                    ->options([
                        'console' => 'Console',
                        'start' => 'Start',
                        'stop' => 'Stop',
                        'restart' => 'Restart',
                    ]),
                CheckboxList::make('testing')
                    ->label('')
                    ->columns(2)
                    ->options([
                        'console2' => 'Console2',
                        'start2' => 'Start2',
                        'stop2' => 'Stop2',
                        'restart2' => 'Restart2',
                    ])
                    ->descriptions([
                        'console2' => 'This is a really really long description that should interfere with the size of the check box',
                        'start2' => 'This is not that long, and should be fine',
                        'stop2' => 'This is a super long one and therefore really breaks the checkboxes... not sure what else to put here but yeh... it breaks it :)',
                        'restart2' => 'Restart2',
                    ]),
            ]);
    }
}
