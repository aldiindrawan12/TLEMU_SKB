<div class="container">


 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Seluruh Data Job Order</h1>
                            <a href="<?=base_url("index.php/form/joborder/x")?>" class="btn btn-primary btn-icon-split">
                        
                            <span class="icon text-white-100">
                                <i class="fas fa-plus"></i> 
                            </span>
                       
                                <span class="text">
                                     Buat Job Order
                                </span>
                            </a>
                    </div> 


    <form action="<?=base_url("index.php/form/insert_bon")?>" method="POST" class="row">
        <div class="col-md-5">
            <label class="form-label" for="Supir">Supir</label>
            <select name="Supir" id="Supir" class="form-control selectpicker" data-live-search="true" required>
                <option class="font-w700" disabled="disabled" selected value="">Supir Pengiriman</option>
                <?php foreach($supir as $value){ ?>
                    <option value="<?=$value["supir_id"]?>"><?=$value["supir_name"]?></option>
                <?php } ?>
            </select>
            <label class="form-label" for="Jenis">Jenis Transaksi</label>
            <select name="Jenis" id="Jenis" class="form-control custom-select" required>
                <option class="font-w700" disabled="disabled" selected value="">Jenis Transaksi</option>
                <option value="Pengajuan">Pengajuan</option>
                <option value="Pembayaran">Pembayaran</option>
            </select>
            <label for="Nominal" class="form-label">Nominal</label>
            <input autocomplete="off" type="text" class="form-control" id="Nominal" name="Nominal" required onkeyup="nominal()">
        </div>
        <div class="col-md-5">
            <label for="Keterangan" class="form-label">Keterangan/Catatan</label>
            <textarea class="form-control" name="Keterangan" id="Keterangan" rows="3"></textarea>
        </div>
        <div class="col-md-3 mt-5">
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            <button type="reset" class="btn btn-warning mb-3">Reset</button>
        </div>
    </form>
</div>

<script>
    function nominal(){
        $( '#Nominal' ).mask('000.000.000', {reverse: true});
    }
</script>