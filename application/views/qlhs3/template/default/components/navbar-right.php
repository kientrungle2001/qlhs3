<!-- Right navbar links -->
<navbar.nav class="ml-auto">
    <!-- Navbar Search -->
    <nav.item>
        <nav.link.button data-widget="navbar-search">
            <fas icon="search" />
        </nav.link.button>
        <div class="navbar-search-block">
            <form.inline>
                <input.group class="input-group-sm">
                    <form.control.input class="form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                    <input.group.append>
                        <btn class="btn-navbar" type="submit">
                            <fas icon="search" />
                        </btn>
                        <btn class="btn-navbar" type="button" data-widget="navbar-search">
                            <fas icon="times" />
                        </btn>
                    </input.group.append>
                </input.group>
            </form.inline>
        </div>
    </nav.item>
    <!-- Messages Dropdown Menu -->
    <nav.item class="dropdown">
        <nav.link data-toggle="dropdown" href="#">
            <far icon="comments" />
            <badge type="danger" class="navbar-badge">3</badge>
        </nav.link>
        <dropdown.menu size="lg" position="right">
            <dropdown.item href="#">
                <!-- Message Start -->
                <media>
                    <img src="/assets/libraries/AdminLTE/3.2.0/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <media.body>
                        <dropdown.item.title> Brad Diesel <text.sm span class="float-right text-danger">
                                <fas icon="star" />
                            </text.sm>
                        </dropdown.item.title>
                        <text.sm>Call me whenever you can...</text.sm>
                        <text.sm class="text-muted">
                            <far icon="clock mr-1" />4 Hours Ago
                        </text.sm>
                    </media.body>
                </media>
                <!-- Message End -->
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#">
                <!-- Message Start -->
                <media>
                    <img src="/assets/libraries/AdminLTE/3.2.0/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <media.body>
                        <dropdown.item.title> John Pierce <text.sm span class="float-right text-muted">
                                <fas icon="star" />
                            </text.sm>
                        </dropdown.item.title>
                        <text.sm>I got your message bro</text.sm>
                        <text.sm class="text-muted">
                            <far icon="clock mr-1" /> 4 Hours Ago
                        </text.sm>
                    </media.body>
                </media>
                <!-- Message End -->
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#">
                <!-- Message Start -->
                <media>
                    <img src="/assets/libraries/AdminLTE/3.2.0/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <media.body>
                        <dropdown.item.title> Nora Silvester <text.sm span class="float-right text-warning">
                                <fas icon="star" />
                            </text.sm>
                        </dropdown.item.title>
                        <text.sm>The subject goes here</text.sm>
                        <text.sm class="text-muted">
                            <far icon="clock mr-1" /> 4 Hours Ago
                        </text.sm>
                    </media.body>
                </media>
                <!-- Message End -->
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#" class="dropdown-footer">See All Messages</dropdown.item>
        </dropdown.menu>
    </nav.item>
    <!-- Notifications Dropdown Menu -->
    <nav.item class="dropdown">
        <nav.link data-toggle="dropdown" href="#">
            <far icon="bell" />
            <badge type="warning" class="navbar-badge">15</badge>
        </nav.link>
        <dropdown.menu size="lg" position="right">
            <dropdown.item span class="dropdown-header">15 Notifications</dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#">
                <fas icon="envelope mr-2" /> 4 new messages <text.sm span class="float-right text-muted">3 mins</text.sm>
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#">
                <fas icon="users mr-2" /> 8 friend requests <text.sm span class="float-right text-muted">12 hours</text.sm>
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#">
                <fas icon="file mr-2" /> 3 new reports <text.sm span class="float-right text-muted">2 days</text.sm>
            </dropdown.item>
            <dropdown.divider />
            <dropdown.item href="#" class="dropdown-footer">See All Notifications</dropdown.item>
        </dropdown.menu>
    </nav.item>
    <nav.item>
        <nav.link.button data-widget="fullscreen">
            <fas icon="expand-arrows-alt" />
        </nav.link.button>
    </nav.item>
    <nav.item>
        <nav.link.button data-widget="control-sidebar" data-controlsidebar-slide="true">
            <fas icon="th-large" />
        </nav.link.button>
    </nav.item>
</navbar.nav>