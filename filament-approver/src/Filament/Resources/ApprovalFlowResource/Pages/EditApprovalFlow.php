<?php

namespace ApprovePlugin\FilamentApprover\Filament\Resources\ApprovalFlowResource\Pages;

use ApprovePlugin\FilamentApprover\Filament\Resources\ApprovalFlowResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApprovalFlow extends EditRecord
{
    protected static string $resource = ApprovalFlowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
