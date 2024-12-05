<?php

namespace ApprovePlugin\FilamentApprover\Models;

use ApprovePlugin\FilamentApprover\Traits\Approvable;
use Illuminate\Database\Eloquent\Model;
use RingleSoft\LaravelProcessApproval\Contracts\ApprovableModel as ContractsApprovableModel;

class ApprovableModel extends Model implements ContractsApprovableModel
{
    use Approvable;


}
