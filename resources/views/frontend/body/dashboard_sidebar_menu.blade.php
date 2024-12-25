<div class="col-12 col-sm-12 col-md-4 col-lg-4 sidebar filterbar">

    <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>


    <div class="sidebar_tags">

        <!-- ############################## My Account ############################## -->
        <div class="sidebar_widget filterBox filter-widget">

            <a href="{{ route('dashboard') }}">
                <h2><b>My Account</b></h2>
            </a>

        </div>
        <!--End My Account-->


        <!-- ############################## Order ############################## -->
        <div class="sidebar_widget filterBox filter-widget">

            <a href="{{ route('user.order.page') }}">
                <h2><b>Orders</b></h2>
            </a>

        </div>
        <!--End Order-->


        <!-- ############################## Account Information ############################## -->
        <div class="sidebar_widget filterBox filter-widget">

            <a href="{{ route('user.account.page') }}">
                <h2><b>Account Information</b></h2>
            </a>

        </div>
        <!--End Account Information-->



        <!-- ############################## Change Password ############################## -->
        <div class="sidebar_widget filterBox filter-widget">

            <a href="{{ route('user.change.password') }}">
                <h2><b>Change Password</b></h2>
            </a>

        </div>
        <!--End Change Password-->


        <!-- ############################## Log Out ############################## -->
        <div class="sidebar_widget filterBox filter-widget">

            <a href="{{ route('user.logout') }}">
                <h2><b>Log Out</b></h2>
            </a>

        </div>
        <!--End Log Out-->



    </div>

</div>
