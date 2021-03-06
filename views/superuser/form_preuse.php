<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Pre Use Checklist</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Equipment</label>
                                <select name="" id="" class="form-control" required>
                                    <option value="">---Pilih Equipment---</option>
                                    <?php
                                    $equipments = mysqli_query($koneksi, "SELECT * FROM equipment ORDER BY name ASC");

                                    foreach ($equipments as $key => $data) {
                                        echo "<option value=''>" . $data['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Engine</h4>
                        </div>
                        <!-- radio -->
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="">[Radiator] - Air Radiator</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="air_radiator" checked>
                                    <label for="customRadio1" class="custom-control-label">Baik</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio2" name="air_radiator">
                                    <label for="customRadio2" class="custom-control-label">Buruk</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Radiator] - Hose Radiator</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="hr_y" name="hose_radiator" checked>
                                        <label for="hr_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="hr_n" name="hose_radiator">
                                        <label for="hr_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Radiator] - V-belt</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="vb_y" name="v_belt" checked>
                                        <label for="vb_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="vb_n" name="v_belt">
                                        <label for="vb_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Bahan Bakar] - Tangki Bahan Bakar & solar</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="tb_y" name="tangki_bbm" checked>
                                        <label for="tb_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="tb_n" name="tangki_bbm">
                                        <label for="tb_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Oli] - Oli Engine</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="og_y" name="oli_engine" checked>
                                        <label for="og_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="og_n" name="oli_engine">
                                        <label for="og_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Oli] - Oli Hidraulik</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="oh_y" name="oli_hydraulik" checked>
                                        <label for="oh_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="oh_n" name="oli_hydraulik">
                                        <label for="oh_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Kelistrikan</h4>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Battery/accu] - Air Accu</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ac_y" name="air_accu" checked>
                                        <label for="ac_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ac_n" name="air_accu">
                                        <label for="ac_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Battery/accu] - Kabel Battery</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="kb_y" name="kabel_battery" checked>
                                        <label for="kb_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="kb_n" name="kabel_battery">
                                        <label for="kb_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Battery/accu] - Kepala Battery</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="kb2_y" name="kepala_battery" checked>
                                        <label for="kb2_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="kb2_n" name="kepala_battery">
                                        <label for="kb2_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Battery/accu] - Tutup Pelindung Kepala Battery</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="tpkb_y" name="tpkb" checked>
                                        <label for="tpkb_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="tpkb_n" name="tpkb">
                                        <label for="tpkb_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Lampu-lampu] - Lampu Rotary</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="lr_y" name="lampu_rotary" checked>
                                        <label for="lr_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="lr_n" name="lampu_rotary">
                                        <label for="lr_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Lampu-lampu] - Lampu Depan</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ld_y" name="lampu_depan" checked>
                                        <label for="ld_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ld_n" name="lampu_depan">
                                        <label for="ld_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Lampu-lampu] - Lampu Rem</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="lr2_y" name="lampu_rem" checked>
                                        <label for="lr2_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="lr2_n" name="lampu_rem">
                                        <label for="lr2_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Lampu-lampu] - Lampu Mundur</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="lm_y" name="lampu_mundur" checked>
                                        <label for="lm_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="lm_n" name="lampu_mundur">
                                        <label for="lm_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Lampu-lampu] - Lampu Sein</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ls_y" name="lampu_sein" checked>
                                        <label for="ls_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ls_n" name="lampu_sein">
                                        <label for="ls_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Indikator & Alarm] - Indikator Pengisian Accu</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ipa_y" name="indikator_pa" checked>
                                        <label for="ipa_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ipa_n" name="indikator_pa">
                                        <label for="ipa_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Indikator & Alarm] - Indikator Temperatur Air</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ita_y" name="indikator_ta" checked>
                                        <label for="ita_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ita_n" name="indikator_ta">
                                        <label for="ita_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Indikator & Alarm] - Indikator Oil Engine</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ioe_y" name="indikator_oe" checked>
                                        <label for="ioe_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ioe_n" name="indikator_oe">
                                        <label for="ioe_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Indikator & Alarm] - Alarm Mundur</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="am_y" name="alarm_mundur" checked>
                                        <label for="am_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="am_n" name="alarm_mundur">
                                        <label for="am_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Indikator & Alarm] - Klakson</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="k_y" name="klakson" checked>
                                        <label for="k_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="k_n" name="klakson">
                                        <label for="k_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Pembersih Kaca] - Wiper</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="w_y" name="wiper" checked>
                                        <label for="w_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="w_n" name="wiper">
                                        <label for="w_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Fungsi Pengereman</h4>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Boom] - Kerangka Boom</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="kerangkab_y" name="kerangka_boom" checked>
                                        <label for="kerangkab_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="kerangkab_n" name="kerangka_boom">
                                        <label for="kerangkab_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Hook Besar & Kecil] - Roller Hook</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="roller_y" name="roller_hook" checked>
                                        <label for="roller_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="roller_n" name="roller_hook">
                                        <label for="roller_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Hook Besar & Kecil] - Kunci Pengait Hook</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id=kp_hook_y" name="kp_hook" checked>
                                        <label for=kp_hook_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id=kp_hook_n" name="kp_hook">
                                        <label for=kp_hook_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Winch] - Kanvas Rem Winch</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="krw_y" name="kanvas_rem_winch" checked>
                                        <label for="krw_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="krw_n" name="kanvas_rem_winch">
                                        <label for="krw_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Winch] - Drum Winch</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="dw_y" name="drum_winch" checked>
                                        <label for="dw_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="dw_n" name="drum_winch">
                                        <label for="dw_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Winch] - Wire Sling (boom & load line)</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ws_y" name="wire_sling" checked>
                                        <label for="ws_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ws_n" name="wire_sling">
                                        <label for="ws_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Slewing] - Gear Swing</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="gs_y" name="gear_swing" checked>
                                        <label for="gs_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="gs_n" name="gear_swing">
                                        <label for="gs_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Slewing] - Drums Swing</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="ds_y" name="drums_swing" checked>
                                        <label for="ds_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="ds_n" name="drums_swing">
                                        <label for="ds_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Crawler] - Kerusakan</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="kerusakan_y" name="kerusakan" checked>
                                        <label for="kerusakan_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="kerusakan_n" name="kerusakan">
                                        <label for="kerusakan_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">[Crawler] - Greasing</label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="greasing_y" name="greasing" checked>
                                        <label for="greasing_y" class="custom-control-label">Baik</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-danger" type="radio" id="greasing_n" name="greasing">
                                        <label for="greasing_n" class="custom-control-label">Buruk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->