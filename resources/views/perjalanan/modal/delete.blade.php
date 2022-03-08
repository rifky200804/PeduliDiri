<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
            </div>
                <div class="modal-body">
                    
                    Apakah Anda Yakin Akan Mengapus Data ini ?

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{route('perjalanan.delete',$value->id_perjalanan)}}" class="btn btn-danger">Hapus</a>
                </div>     
        </div>
    </div>
</div>
