<aside class="main-sidebar">
        <section class="sidebar" style="height: auto;">
            <ul class="sidebar-menu tree" data-widget="tree">
<li>
<a href="{{ route("admin.home") }}">
<i class="fas fa-fw fa-tachometer-alt">

</i>
{{ trans('global.dashboard') }}
</a>
</li>
@can('user_management_access')
<li class="treeview">
<a href="#">
<i class="fa-fw fas fa-users">

</i>
<span>{{ trans('cruds.userManagement.title') }}</span>
<span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
</a>
<ul class="treeview-menu">
@can('permission_access')
<li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
<a href="{{ route("admin.permissions.index") }}">
<i class="fa-fw fas fa-unlock-alt">

</i>
<span>{{ trans('cruds.permission.title') }}</span>
</a>
</li>
@endcan
@can('role_access')
<li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
<a href="{{ route("admin.roles.index") }}">
<i class="fa-fw fas fa-briefcase">

</i>
<span>{{ trans('cruds.role.title') }}</span>
</a>
</li>
@endcan
@can('user_access')
<li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
<a href="{{ route("admin.users.index") }}">
<i class="fa-fw fas fa-user">

</i>
<span>{{ trans('cruds.user.title') }}</span>
</a>
</li>
@endcan
</ul>
</li>
@endcan
@can('tessting_access')
<li class="{{ request()->is('admin/tesstings') || request()->is('admin/tesstings/*') ? 'active' : '' }}">
<a href="{{ route("admin.tesstings.index") }}">
<i class="fa-fw fas fa-cogs">

</i>
<span>{{ trans('cruds.tessting.title') }}</span>
</a>
</li>
@endcan
@can('test_access')
<li class="{{ request()->is('admin/tests') || request()->is('admin/tests/*') ? 'active' : '' }}">
<a href="{{ route("admin.tests.index") }}">
<i class="fa-fw fas fa-cogs">

</i>
<span>{{ trans('cruds.test.title') }}</span>
</a>
</li>
@endcan
@can('test_aaaa_access')
<li class="{{ request()->is('admin/test-aaaas') || request()->is('admin/test-aaaas/*') ? 'active' : '' }}">
<a href="{{ route("admin.test-aaaas.index") }}">
<i class="fa-fw fas fa-cogs">

</i>
<span>{{ trans('cruds.testAaaa.title') }}</span>
</a>
</li>
@endcan
<li>
<a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
<i class="fas fa-fw fa-sign-out-alt">

</i>
{{ trans('global.logout') }}
</a>
</li>
</ul>
        </section>
    </aside>