<!-- fixed-top-->
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark navbar-border navbar-brand-center">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="{{url('/')}}"><img class="brand-logo img-circle"
                            alt="robust admin logo" src="app-assets/images/logo/circle-cropped.png">
                        <h3 class="brand-text">Sekolah Dasar Citta Bangsa</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                        data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container container center-layout">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#"><i class="ft-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img
                                    src="app-assets/images/portrait/small/avatar-s-1.png"
                                    alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                    class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                    class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                    class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                    class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                    class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
    role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item"><a class="nav-link" href={{url('/')}}><i class="icon-home"></i><span
                        data-i18n="nav.dash.main">Home</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('profil')}}"><i class="icon-docs"></i><span
                        data-i18n="nav.changelog.main">Profile</span></a></li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="icon-bulb"></i><span
                        data-i18n="nav.starter_kit.main">Info</span></a>
                <ul class="dropdown-menu">
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">1 column</a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Det.
                            Sidebar</a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Detached left
                                    sidebar</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Detached sticky
                                    left sidebar</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Detached right
                                    sidebar</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Detached sticky
                                    right sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Fixed navigation</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Fixed layout</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Boxed layout</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Static layout</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Light layout</a>
                    </li>
                    <li class="active" data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Dark
                            layout</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                    data-toggle="dropdown"><i class="icon-support"></i><span>See Our...</span></a>
                <ul class="dropdown-menu">
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Teachers and Staffs</a>
                    </li>
                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown">Students</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="icon-notebook"></i><span>Contact Us!</span></a>
            </li>
        </ul>
    </div>
</div>
