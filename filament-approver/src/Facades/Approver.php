<?php

namespace ApprovePlugin\FilamentApprover\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ApprovePlugin\Approver\Approver
 */
class Approver extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ApprovePlugin\FilamentApprover\Approver::class;
    }
}
