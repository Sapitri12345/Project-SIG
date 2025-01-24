<?php

namespace App\Filament\Resources\KemiskinanResource\Pages;

use App\Filament\Resources\KemiskinanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKemiskinans extends ListRecords
{
    protected static string $resource = KemiskinanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
