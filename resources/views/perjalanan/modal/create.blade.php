<!-- Modal -->
<div class="modal fade" id="exampleAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Tambah Data
            </div>
            <div class="modal-body">
                <form action="{{ route('perjalanan.save') }}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputtanggal" aria-describedby="tanggalHelp"
                                placeholder="Enter tanggal" name="tanggal">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Jam</label>
                            <input type="time" class="form-control" id="exampleInputjam" aria-describedby="jamHelp"
                                placeholder="Enter jam" name="jam">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="exampleInputlokasi" aria-describedby="lokasiHelp"
                                placeholder="Enter lokasi" name="lokasi">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Suhu Tubuh</label>
                            <input type="number" class="form-control" id="exampleInputsuhu_tubuh"
                                aria-describedby="suhu_tubuhHelp" placeholder="Enter Suhu Tubuh / Celcius" name="suhu_tubuh">
                        </div>
                        
                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
