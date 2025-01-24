<?php

namespace App\Filament\Resources\LamaSekolahResource\Pages;

use App\Filament\Resources\LamaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLamaSekolah extends EditRecord
{
    protected static string $resource = LamaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
