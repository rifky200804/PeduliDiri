<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                
            </div>
            <form action="{{route('user.store')}}" method="post">
                @csrf 
                <div class="modal-body">
                    
                    <div class="form-group">
                        <div class="form-check mt-4" style="margin-left:35%;">
                            <input  type="radio" name="role" id="admin" value="admin">
                            <label for="admin">
                                admin
                            </label>

                            <input type="radio" name="role" id="user" value="user">
                            <label for="user">
                                user
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" id="exampleInputnik"
                            aria-describedby="nikHelp" placeholder="Enter nik" name="nik">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputnama"
                            aria-describedby="namaHelp" placeholder="Enter nama" name="nama">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputnama"
                            aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputusername"
                            aria-describedby="usernameHelp" placeholder="Enter username" name="username">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputpassword"
                            aria-describedby="passwordHelp" placeholder="Enter Password" name="password">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputconfirm_password"
                            aria-describedby="confirm_passwordHelp" placeholder="Enter confirm_password" name="confirm_password">
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
