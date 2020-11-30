<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-toolbox"></i>SPAMIs Settings</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('country') }}'><i class='nav-icon fa fa-globe'></i> Countries</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('spami') }}'><i class='nav-icon fa fa-map-signs'></i> Spamis</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('tacs') }}'><i class='nav-icon la la-question'></i> Tacs</a></li>
    </ul>
</li>





<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-folder"></i>Contents</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-file"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon fa fa-newspaper"></i> News</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon fa fa-list"></i> Categories</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon fa fa-tag"></i> Tags</a></li>

        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('page') }}'><i class='nav-icon fa fa-file-alt'></i> <span>Pages</span></a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('menu-item') }}'><i class='nav-icon fa fa-stream'></i> <span>Menu</span></a></li>

    </ul>
</li>




<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-tools"></i>Maintenance</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i
                    class='nav-icon la la-hdd-o'></i> Backups</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i
                    class='nav-icon la la-terminal'></i> Logs</a></li>
    </ul>
</li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon fa fa-cogs'></i> <span>Global Settings</span></a>
</li>


<li class='nav-item'><a class='nav-link' href='{{ backpack_url('country') }}'><i class='nav-icon la la-question'></i>
        Countries</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('country.php') }}'><i
            class='nav-icon la la-question'></i> Country.phps</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('spami') }}'><i class='nav-icon la la-question'></i>
        Spamis</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-question'></i> Users</a>
</li>
