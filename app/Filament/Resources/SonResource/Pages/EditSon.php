<?php

namespace App\Filament\Resources\SonResource\Pages;

use App\Filament\Resources\SonResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSon extends EditRecord
{
    protected static string $resource = SonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
