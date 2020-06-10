            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable bg-purple">
                                    <thead>
                                        <tr style="text-transform: uppercase;">
                                            <th class="text-center" width="5">No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Subject</th>
                                            <th class="text-center">Nama Pariwisata</th>
                                            <th class="text-center" width="5">Aksi</th>
                                            <th class="text-center" width="5"></th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: #000">
                                        <?php 
                                            $no = 1;
                                            foreach ($main_data as $row) 
                                            {
                                                if ($row->status == "1") 
                                                {
                                                    $style = "green";
                                                    $material = "check";
                                                }
                                                else
                                                {
                                                    $style = "red";
                                                    $material = "clear";
                                                }
                                                ?>
                                        <tr>
                                            <td class="text-center"><?=$no++?></td>
                                            <td><?=$row->fullname?></td>
                                            <td class="text-center"><?=$row->subject?></td>
                                            <td class="text-center"><?=$row->nama_pariwisata?><br><i><?=$row->nama_pengelola?></i></td>
                                            <td class="text-center">
                                                <button class="btn btn-flat btn-xs btn-info detail-complaint" data="<?=$row->id_complaint?>"><i class="material-icons">search</i></button>
                                            </td>
                                            <td class="text-center">
                                                <i class="material-icons" style="background: <?=$style?>"><?=$material?></i>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('stakeholder/pemerintah/modal'); ?>