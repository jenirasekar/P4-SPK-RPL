<div class="card">
    <div class="card-header border-0">
        <div class="d-flex justify-content-between">
            <div class="">
                <h1>Selamat datang</h1>
                <p>{{ auth()->user()->nama }}, Anda login sebagai <span
                        style="text-transform: capitalize">{{ auth()->user()->role }}</span></p>
            </div>
            <a href="javascript:void(0);">Lihat Laporan</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-5">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Jumlah Transaksi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info lebih lanjut <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Jumlah Pelanggan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info lebih lanjut <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Registrasi User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info lebih lanjut <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Jenis Barang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info lebih lanjut <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <p class="d-flex flex-column">
                <span class="text-bold text-lg">Rp. 18,230,000.00</span>
                <span>Penjualan Waktu ke Waktu</span>
            </p>
            <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                    <i class="fas fa-arrow-up"></i> 33.1%
                </span>
                <span class="text-muted">Sejak bulan lalu</span>
            </p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,160L96,96L192,160L288,192L384,288L480,128L576,64L672,160L768,192L864,320L960,96L1056,288L1152,288L1248,288L1344,224L1440,224L1440,320L1344,320L1248,320L1152,320L1056,320L960,320L864,320L768,320L672,320L576,320L480,320L384,320L288,320L192,320L96,320L0,320Z">
            </path>
        </svg>
        <div class="position-relative mb-1">
            <canvas id="sales-chart" height="50"></canvas>
        </div>
        <div class="d-flex flex-row justify-content-end">
            <span class="mr-2">
                <i class="fas fa-square text-primary"></i> Tahun ini
            </span>
        </div>
    </div>
</div>
