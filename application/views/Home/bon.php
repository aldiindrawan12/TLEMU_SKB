<div class="container">
    <a href="<?=base_url("index.php/form/bon")?>" class="btn btn-primary btn-icon-split mb-5">
        <span class="icon text-white-100">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Bikin Transaksi Bon</span>
    </a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Bon</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="Table-Bon" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Jenis Transaksi</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Tanggal Transaksi</th>
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

<div class="modal fade" id="popup-bon" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary-dark">
                <h5 class="block-title">Detail Transaksi Bon</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="font-size-sm m-3 text-justify">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Transaksi ID</td>
                        <td name="id"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Nama Supir</td>
                        <td name="supir"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Jenis Transaksi</td>
                        <td name="jenis"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Nonimal Transaksi</td>
                        <td name="nominal"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Tanggal Transaksi</td>
                        <td name="tanggal"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="width: 20%;">Keterangan</td>
                        <td name="keterangan"></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>