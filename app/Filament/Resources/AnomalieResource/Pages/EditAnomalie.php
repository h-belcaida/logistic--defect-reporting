<?php

namespace App\Filament\Resources\AnomalieResource\Pages;

use App\Filament\Resources\AnomalieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnomalie extends EditRecord
{
    protected static string $resource = AnomalieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
