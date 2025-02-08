<?php

namespace Apps\Fintech\Install;

use System\Base\BasePackage;

class Install extends BasePackage
{
    public function init()
    {
        return $this;
    }

    public function install()
    {
        $this->basepackages->dashboards->addDashboard(
            [
                "name"      => "Fintech Default",
                "app_type"  => "fintech",
                "settings"  => [
                    "maxWidgetsPerDashboard"    => 10,
                    "id"                        => 2
                ]
            ]
        );

        return true;
    }

    public function uninstall()
    {
        //Check Relationship
        //Drop Table(s)
        return true;
    }
}