<?php

namespace App\Filament\Resources\LamaSekolahResource\Pages;

use App\Filament\Resources\LamaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLamaSekolahs extends ListRecords
{
    protected static string $resource = LamaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
