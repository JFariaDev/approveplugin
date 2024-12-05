<?php

namespace ApprovePlugin\FilamentApprover\Traits;

use ApprovePlugin\FilamentApprover\Forms\Actions\ApproveAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\DiscardAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\RejectAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\SubmitAction;
use Filament\Actions\Action;

trait HasApprovalFormActions
{

    protected function getFormActions(): array
    {
        return [
            ...$this->formActions(),
            ...parent::getFormActions(),
        ];
    }

    protected function formActions(): array
    {
        return [
            ApproveAction::make(),
            RejectAction::make(),
            DiscardAction::make(),
            SubmitAction::make()
        ];
    }
}
