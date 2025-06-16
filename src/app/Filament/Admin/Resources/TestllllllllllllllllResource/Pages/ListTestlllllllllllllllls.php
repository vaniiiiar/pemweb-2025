<?php

namespace App\Filament\Admin\Resources\TestllllllllllllllllResource\Pages;

use App\Filament\Admin\Resources\TestllllllllllllllllResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestlllllllllllllllls extends ListRecords
{
    protected static string $resource = TestllllllllllllllllResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
