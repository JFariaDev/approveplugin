<?php

namespace ApprovePlugin\FilamentApprover\Traits;


use ApprovePlugin\FilamentApprover\Forms\Actions\ApproveAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\DiscardAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\RejectAction;
use ApprovePlugin\FilamentApprover\Forms\Actions\SubmitAction;
use ApprovePlugin\FilamentApprover\Models\ApprovableModel;
use Exception;
use Filament\Actions\Action;

trait HasApprovalHeaderActions
{

    protected function getHeaderActions(): array
    {
        return [
            ...$this->getApprovalHeaderActions()
        ];
    }

    protected function getApprovalHeaderActions(): array
    {
        return [
            ApproveAction::make(),
            RejectAction::make(),
            DiscardAction::make(),
            SubmitAction::make(),
            $this->getOnCompletionAction()
                ->visible(fn (ApprovableModel $record) => $record->isApprovalCompleted())
        ];
    }

    /**
     * Get the completion action
     *
     * @return Filament\Actions\Action
     * @throws Exception
     */
    protected function getOnCompletionAction(): Action
    {
        throw new Exception("Completion action not defined");
    }
}
