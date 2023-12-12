{{-- Sidebar --}}
<div class="sidebar">
    {{-- Brand logo --}}
    <a href="/" class="d-block pr-2 pt-2 text-center link-dark text-decoration-none" title="Icon-only"
        data-bs-toggle="tooltip" data-bs-placement="right">
        <img src="{!! url('assets/img/salemate-logo.png') !!}" alt="Logo SaleMate" width="50" height="50">
    </a>

    {{-- Sidemenu --}}
    <nav>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <div class="main-nav-icons">
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="Dashboard" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/dashboard-icon.svg') !!}" alt="Dashboard" width="20" height="20">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="Produk" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/box-icon.svg') !!}" alt="Produk" width="20" height="20">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="Transaksi" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/exchange-icon.svg') !!}" alt="Transaksi" width="20" height="20">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="Laporan" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/form-icon.svg') !!}" alt="Laporan" width="20" height="20">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="User" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/person-icon.svg') !!}" alt="User" width="20" height="20">
                    </a>
                </li>
            </div>

            <div class="bottom-nav-icon">
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-none" title="Logout" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <img src="{!! url('assets/img/icons/logout-icon.svg') !!}" alt="Logout" width="20" height="20">
                    </a>
                </li>
            </div>
        </ul>
        {{-- ./sidemenu --}}
    </nav>
</div>
{{-- ./sidebar --}}
