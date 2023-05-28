<?php

namespace App\Filament\Resources\SalleResource\Pages;

use App\Filament\Resources\SalleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSalle extends CreateRecord
{
    protected static string $resource = SalleResource::class;
    protected function getRedirectUrl(): string
    {
    return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
    return 'Salle created';
    }
}
