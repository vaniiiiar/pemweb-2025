<?php

namespace App\Filament\Admin\Resources\TestllllllllllllllllResource\Pages;

use App\Filament\Admin\Resources\TestllllllllllllllllResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestllllllllllllllll extends EditRecord
{
    protected static string $resource = TestllllllllllllllllResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
