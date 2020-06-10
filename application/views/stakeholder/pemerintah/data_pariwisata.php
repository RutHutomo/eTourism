            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <button class="btn btn-flat btn-sm btn-danger add">TAMBAH DATA PARIWISATA</button>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead class="bg-purple">
                                        <tr style="text-transform: uppercase;">
                                            <th class="text-center" width="5">No</th>
                                            <th class="text-center">Nama Pariwisata</th>
                                            <th class="text-center">Stakeholder</th>
                                            <th class="text-center">SK Izin Pengelolaan</th>
                                            <th class="text-center" width="5">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: #000">
                                        <?php $no = 1; foreach ($data as $row) 
                                        {?>
                                        <tr>
                                            <td class="text-center"><?=$no++?></td>
                                            <td><?=$row->nama_pariwisata?></td>
                                            <td class="text-center"><?=$row->stakeholder?></td>
                                            <td class="text-center"><?=$row->sk_pengelola?></td>
                                            <td class="text-center">
                                                <a href="<?=base_url('stakeholder/'.$this->uri->segment(2).'/DataPariwisata/Detail/'.$row->id_pariwisata.'')?>" class="btn btn-flat btn-xs btn-info"><i class="material-icons">search</i></a>
                                                <a href="#" class="btn btn-flat btn-xs btn-danger btn-delete" data="<?=$row->id_pariwisata?>"><i class="material-icons">delete_sweep</i></a>
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