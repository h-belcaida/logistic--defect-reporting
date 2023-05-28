<?php

namespace App\Filament\Resources\AnomalieResource\Pages;

use App\Filament\Resources\AnomalieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAnomalie extends CreateRecord
{
    protected static string $resource = AnomalieResource::class;
    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
    return 'Anomalie created';
    }
}
