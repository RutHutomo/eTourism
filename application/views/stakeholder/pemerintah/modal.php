            <div class="modal fade" id="modal-complaint" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Konten Complaint</h4>
                        </div>
                        <div class="modal-body isi-complaint">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-tambah-pariwisata" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-purple">
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="form-pariwisata">
                                <div class="form-group">
                                    <label>Nama Pariwisata</label>
                                    <div class="form-line">
                                        <input type="text" name="nama_pariwisata" class="form-control" required="" placeholder="Masukkan Nama Pariwisata">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Stakeholder</label>
                                    <select class="form-control stakeholder show-tick" name="stakeholder" required="">
                                        <option value="">Pilih Stakeholder</option>
                                        <option value="government">Pemerintah</option>
                                        <option value="swasta">Swasta/Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group nama-pengelola">
                                    <label>Nama Pengelola</label>
                                    <div class="form-line">
                                        <input type="text" name="nama_pengelola" class="form-control" required="" placeholder="Masukkan Nama Pengelola">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Lokasi Pariwisata</label>
                                    <div class="form-line">
                                        <input type="text" name="lokasi_pariwisata" class="form-control" required="" placeholder="Masukkan Lokasi Pariwisata">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SK Pengelolaan</label>
                                    <div class="form-line">
                                        <input type="text" name="sk_pariwisata" class="form-control" required="" placeholder="Masukkan SK Pengelolaan">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link btn-info waves-effect simpan-pariwisata" style="color: #ffffff">SIMPAN</button>
                            <button type="button" class="btn btn-link btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>