<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class RolesTest extends DuskTestCase  {





public function testIndex()
{
            $admin = \App\User::find(1);
        $this->browse(function (Browser $browser) use ($admin) {
           $browser->loginAs($admin);
$browser->visit(route('admin.roles.index'));
$browser->assertRouteIs('admin.roles.index');
        });
    
}


}