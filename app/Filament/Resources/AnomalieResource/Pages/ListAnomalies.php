<?php

namespace App\Filament\Resources\AnomalieResource\Pages;

use App\Filament\Resources\AnomalieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnomalies extends ListRecords
{
    protected static string $resource = AnomalieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
