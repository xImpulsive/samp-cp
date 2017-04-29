<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://breadfish.de/wcf/images/avatars/f6/8686-f68b4cfb8cd403bd6227a00686ca3ad19368092c.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>xGreekz7x</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <?php /*
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">new</small>
                    </span>
                </a>
            </li> */ ?>
            <li class="header">@lang("acp.theming.heading")</li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    <span>Theme erstellen</span>
                </a>
            </li>
            <li class="{{ HTML::activeRoute("acp.themes.import") }}">
                <a href="{{ URL::route("acp.themes.import") }}">
                    <i class="fa fa-upload"></i><span>Theme importieren</span>
                </a>
            </li>
            <li class="header">@lang("acp.plugin.heading")</li>
            <li>
                <a href="{{ URL::route("acp.plugins.import") }}">
                    <i class="fa fa-upload"></i>
                    <span>Plugin importieren</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>