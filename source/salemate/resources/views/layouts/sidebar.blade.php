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
                    <a href="/dashboard"
                        class="nav-link py-3 border-none"
                        title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M13.5 9V4H20v5zM4 12V4h6.5v8zm9.5 8v-8H20v8zM4 20v-5h6.5v5zm1-9h4.5V5H5zm9.5 8H19v-6h-4.5zm0-11H19V5h-4.5zM5 19h4.5v-3H5zm4.5-3" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/transaksi" class="nav-link py-3 border-none" title="Transaksi" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1">
                                <path d="M3 18a2 2 0 1 0 4 0a2 2 0 1 0-4 0M17 6a2 2 0 1 0 4 0a2 2 0 1 0-4 0" />
                                <path d="M19 8v5a5 5 0 0 1-5 5h-3l3-3m0 6l-3-3m-6-2v-5a5 5 0 0 1 5-5h3l-3-3m0 6l3-3" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/produk" class="nav-link py-3 border-none" title="Produk" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 8h16v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm4-4h8l4 4H4zm0 8h4" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link py-3 border-none" title="Laporan" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor">
                                <path
                                    d="M4 7c0-1.886 0-2.828.586-3.414C5.172 3 6.114 3 8 3h8c1.886 0 2.828 0 3.414.586C20 4.172 20 5.114 20 7v8c0 2.828 0 4.243-.879 5.121C18.243 21 16.828 21 14 21h-4c-2.828 0-4.243 0-5.121-.879C4 19.243 4 17.828 4 15z" />
                                <path stroke-linecap="round" d="M15 18v3m-6-3v3M9 8h6m-6 4h6" />
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link py-3 border-none" title="User" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M17.755 14a2.249 2.249 0 0 1 2.248 2.25v.575c0 .894-.32 1.759-.9 2.438c-1.57 1.833-3.957 2.738-7.103 2.738c-3.145 0-5.532-.905-7.098-2.74a3.75 3.75 0 0 1-.898-2.434v-.578A2.249 2.249 0 0 1 6.253 14zm0 1.5H6.252a.749.749 0 0 0-.75.75v.577c0 .535.192 1.053.54 1.46c1.253 1.469 3.22 2.214 5.957 2.214c2.739 0 4.706-.745 5.963-2.213a2.25 2.25 0 0 0 .54-1.463v-.576a.749.749 0 0 0-.748-.749M12 2.005a5 5 0 1 1 0 10a5 5 0 0 1 0-10m0 1.5a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7" />
                        </svg>
                    </a>
                </li>
            </div>

            <div class="bottom-nav-icon">
                <li class="nav-item">
                    <a href="/logout" class="nav-link py-3 border-none" title="Logout" data-bs-toggle="tooltip"
                        data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1">
                                <path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2" />
                                <path d="M9 12h12l-3-3m0 6l3-3" />
                            </g>
                        </svg>
                    </a>
                </li>
            </div>
        </ul>
        {{-- ./sidemenu --}}
    </nav>
</div>
{{-- ./sidebar --}}
