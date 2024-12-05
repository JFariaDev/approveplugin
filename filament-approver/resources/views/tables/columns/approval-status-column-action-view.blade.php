<div>
    @foreach ($data as $a)
        <div class="p-4 mb-4 rounded bg-gray-50 border-1">
            <div class="flex items-center gap-x-3">
                <img src="{{ Filament\Facades\Filament::getUserAvatarUrl($a->user) }}"
                     class="flex-none w-6 h-6 bg-gray-800 rounded-full" alt="Avatar" />
                <h3 class="flex text-sm font-semibold leading-6 text-gray-500 truncate">
                    {{ $a->user->getFilamentName() }}
                </h3>
                <time class="flex-none text-xs text-gray-500">{{ $a->created_at->diffForHumans() }} - {{ $a->created_at }}</time>
                <div class="flex ml-auto gap-x-4">
                    <span class="px-3 py-1 bg-red-500 text-gray-800 rounded-full text-xs
                    @if($a->approval_action == 'Approved') bg-success-400 text-green-800 @endif
                    @if($a->approval_action == 'Rejected') bg-danger-400 text-white @endif
                    @if($a->approval_action == 'Discarded') bg-danger-400 text-white @endif
                    @if($a->approval_action == 'Pending') bg-warning-400 text-yellow-800 @endif
                    @if($a->approval_action == 'Submitted') bg-warning-400 text-yellow-800 @endif
                    ">
                        {{ __('filament-approver::approver.actions.history.' . $a->approval_action ) }}
                    </span>
                </div>
                </div>
            @if($a->comment)
                <div class="mt-3 text-sm">{!! $a->comment !!}</div>
            @endif
        </div>
    @endforeach
</div>
