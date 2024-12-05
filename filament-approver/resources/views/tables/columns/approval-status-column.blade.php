<div>
    @if($getRecord()->approvalStatus)
        <p class="px-3">
            <small>
                {{ $getRecord()->approvalStatus->status }} {{ __('filament-approvals::approvals.status_column.approval_by_prefix') }}
                @if ($getRecord()->lastApproval)
                    {{ $getRecord()->lastApproval->approver_name }}
                @else
                    {{ $getRecord()->createdBy()->name }}
                @endif
            </small>
        </p>
        <p class="px-3 text-xs">
            <small>
                {{ $getRecord()->isApprovalCompleted() ?
                    __('filament-approver::approver.status_column.approval_complete') :
                    __('filament-approver::approver.status_column.approval_in_process') }}
            </small>
        </p>
    @else
        <span class="px-3 py-1 text-xs text-gray-800 bg-gray-200 rounded-full">
            {{ __('filament-approver::approver.status_column.approval_status_does_not_exist') }}
        </span>
    @endif
</div>
