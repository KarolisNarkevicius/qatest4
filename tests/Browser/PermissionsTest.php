<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class PermissionsTest extends DuskTestCase  {





public function testIndex()
{
            $admin = \App\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
           $browser->loginAs($admin);
$browser->visit(route('admin.permissions.index'));
$browser->assertRouteIs('admin.permissions.index');
        });
    
}


}