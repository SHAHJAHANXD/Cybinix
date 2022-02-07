<div class="left side-menu"><button type="button"
        class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i
            class="ion-close"></i></button>
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center"><a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Cybinix</a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li><a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span></a></li>
               <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span>Index Page</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="advanced-highlight.html">Top Line</a></li>
                        <li><a href="advanced-rating.html">Rating</a></li>
                        <li><a href="advanced-alertify.html">Alertify</a></li>
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                    </ul>
                </li>
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span>Our Team</span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.team') }}">All Team</a></li>
                        <li><a href="{{ route('admin.active.team') }}">Active Team</a></li>
                        <li><a href="{{ route('admin.blocked.team') }}">Blocked Team</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.messages') }}" class="waves-effect"><i class="mdi mdi-airplay"></i>
                    <span>Get In Touch</span></a></li>
                    <li><a href="{{ route('admin.NewsLetter') }}" class="waves-effect"><i class="mdi mdi-airplay"></i>
                        <span>NewsLetter Emails</span></a></li>
                <li><a href="{{ route('admin.logout') }}" class="waves-effect"><i class="mdi mdi-power"></i><span>Logout</span></a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>
