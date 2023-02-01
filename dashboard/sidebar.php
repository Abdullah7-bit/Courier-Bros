<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Agent</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="agent.php">
                        <i class="bi bi-circle"></i><span>Agent Details</span>
                    </a>
                </li>
                <li>
                    <a href="agent_login.php">
                        <i class="bi bi-circle"></i><span>Agent Login</span>
                    </a>
                </li>
                <li>
                    <a href="manage_agent.php">
                        <i class="bi bi-circle"></i><span>Manage Agent</span>
                    </a>
                </li>

        </li>
    </ul>

    </li><!-- End Components Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Delivery SMS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="sms.php">
                    <i class="bi bi-circle"></i><span>Send Delivery Details</span>
                </a>
            </li>

    </li>
    </ul>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Customer Details</span><i
                class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="customers_details.php">
                    <i class="bi bi-circle"></i><span>Manage Customer Details</span>
                </a>
            </li>

        </ul>
    </li><!-- End Tables Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Couirer Details</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="#">
                    <i class="bi bi-circle"></i><span>Courier Stats</span>
                </a>
            </li>
            <li>
                <a href="courier_details.php">
                    <i class="bi bi-circle"></i><span>Couirer Details</span>
                </a>
            </li>


        </ul>

    </li><!-- End Charts Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-gem"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="#">
                    <i class="bi bi-circle"></i><span>Download Shipment Reports</span>
                </a>
            </li>

        </ul>
    </li><!-- End Icons Nav -->



</aside><!-- End Sidebar-->