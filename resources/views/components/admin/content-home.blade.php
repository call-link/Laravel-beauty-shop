<section id="content">


    <!-- navbar section start -->
    
    <x-admin.nav-search></x-admin.nav-search>
    
    <!-- navbar section end -->

    <!-- main section start -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><i class="bx bx-chevron-right"></i></li>
                    <li><a href="" class="active">Home</a></li>
                </ul>
            </div>
            <!-- <a href="#" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Download PDF</span>
            </a> -->
        </div>

        <ul class="box-info">
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                    <h3>2000</h3>
                    <p>Visitors</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-group"></i>
                <span class="text">
                    <h3>1020</h3>
                    <p>New Order</p>
                </span>
            </li>
            <li>
                <i class="bx bxs-dollar-circle"></i>
                <span class="text">
                    <h3>$15423</h3>
                    <p>Total Sales</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class="bx bx-search"></i>
                    <i class="bx bx-filter"></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Data Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <x-admin.user-box></x-admin.user-box>
                    </tbody>
                </table>
            </div>
            <!-- <div class="todo">
                <div class="head">
                    <h3>Todo</h3>
                    <i class="bx bx-plus"></i>
                    <i class="bx bx-filter"></i>
                </div>
            </div> -->
        </div>
    </main>
    <!-- main section end -->

</section>