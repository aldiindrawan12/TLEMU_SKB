<div class="container">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Job Order(JO)</h6>
    </div>
    <div class="row">
        <div class="col-md-2 ml-3">
            <select name="Tanggal" id="Tanggal" class="form-control">
                <option class="font-w700" selected value="x">Semua Tanggal</option>
                <?php for($i=1;$i<32;$i++){?>
                    <option class="font-w700" value="<?=$i?>"><?=$i?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-md-2 ml-3">
            <select name="Bulan" id="Bulan" class="form-control">
                <option class="font-w700" selected value="x">Semua Bulan</option>
                <option class="font-w700" value="01">Januari</option>
                <option class="font-w700" value="02">Februari</option>
                <option class="font-w700" value="03">Maret</option>
                <option class="font-w700" value="04">April</option>
                <option class="font-w700" value="05">Mei</option>
                <option class="font-w700" value="06">Juni</option>
                <option class="font-w700" value="07">Juli</option>
                <option class="font-w700" value="08">Agustus</option>
                <option class="font-w700" value="09">September</option>
                <option class="font-w700" value="10">Oktober</option>
                <option class="font-w700" value="11">November</option>
                <option class="font-w700" value="12">Desember</option>
            </select>
        </div>
        <div class="col-md-2 ml-3">
            <select name="Tahun" id="Tahun" class="form-control">
                <option class="font-w700" selected value="x">Semua Tahun</option>
                <?php for($i=15;$i<30;$i++){?>
                    <option class="font-w700" value="<?="20".$i?>"><?="20".$i?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-md-2 ml-3">
            <a href="<?=base_url("index.php/print_berkas/cetaklaporanpdf/x/x/x")?>" class="btn btn-primary btn-icon-split" id="link_cetaklaporanpdf">
                <span class="icon text-white-100">  
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Cetak PDF</span>
            </a>
        </div>
        <div class="col-md-2 ml-3">
            <a href="<?=base_url("index.php/print_berkas/cetaklaporanexcel/x/x/x")?>" class="btn btn-primary btn-icon-split" id="link_cetaklaporanexcel">
                <span class="icon text-white-100">  
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Cetak Excel</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="Table-Job-Order" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No JO</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Muatan</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Tujuan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Status</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>