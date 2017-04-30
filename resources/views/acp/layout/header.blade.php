<header class="main-header">
    <!-- Logo -->
    <a href="{{ URL::route("acp.home") }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>CP</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SAMP</b>CP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">@lang("acp.usermenu.messages")</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a>
                                        <h4>
                                            Admin Team
                                            <small><i class="fa fa-clock-o"></i> 5 Minuten</small>
                                        </h4>
                                        <p>Du hast eine Verwarnung erhalten</p>
                                    </a>
                                </li><!-- end message -->

                            </ul>
                        </li>
                        <li class="footer"><a href="#">@lang("acp.usermenu.seeallmessages")</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">@lang("acp.usermenu.notifications")</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> Du hast dich am 30.04.2017 um 14 Uhr eingeloggt
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">@lang("acp.usermenu.viewallnotifications")</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://breadfish.de/wcf/images/avatars/f6/8686-f68b4cfb8cd403bd6227a00686ca3ad19368092c.png" width="160px" height="160px" class="user-image">
                        <span class="hidden-xs">xGreekz7x</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="https://breadfish.de/wcf/images/avatars/f6/8686-f68b4cfb8cd403bd6227a00686ca3ad19368092c.png" width="160px" height="160px" class="img-circle">
                            <p>
                                xGreekz7x - Administrator
                                <small>@lang("acp.usermenu.usersince") 30.04.2017</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">@lang("acp.usermenu.settings")</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">@lang("acp.usermenu.changeinfos")</a>
                            </div>

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">@lang("acp.usermenu.myprofil")</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">@lang("acp.usermenu.logout")</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>