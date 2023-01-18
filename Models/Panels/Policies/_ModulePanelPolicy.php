<?php

namespace Modules\Git\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Git\Models\Panels\Policies\_ModulePanelPolicy as Panel;

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class _ModulePanelPolicy extends XotBasePanelPolicy
{
}
