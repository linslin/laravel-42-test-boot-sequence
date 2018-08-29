<?php

namespace App\Modules\Test;

use App\Models\Language;
use \Menu;
use \Lang;
use \View;
use App\Modules\BaseModule;
use App\Modules\Dictionary\Models\Dictionary;
use \Config;

class TestModule extends BaseModule
{

    /**
     *
     */
    public function init()
    {
        var_dump('-> Inside TestModule init()');
    }
}
