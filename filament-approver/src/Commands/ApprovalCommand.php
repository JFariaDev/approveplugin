<?php

namespace ApprovePlugin\FilamentApprover\Commands;

use Illuminate\Console\Command;

class ApprovalCommand extends Command
{
    public $signature = 'filament-approer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
