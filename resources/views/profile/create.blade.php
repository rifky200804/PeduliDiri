<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peduli Diri</title>
</head>

<body>
    <h1>Tambah Data </h1>
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <label for="nik">NIK</label>
        : <input type="text" name="nik" id="nik">
        <br>
        <label for="role">Role</label>
        : <input type="radio" name="role" id="admin" value="admin"><label for="admin">admin</label>
        <input type="radio" name="role" id="user" value="user"><label for="user">user</label>
        <br>
        <label for="nama">Nama</label>
        : <input type="text" name="nama" id="nama">
        <br>
        <label for="telp">Telpon</label>
        : <input type="text" name="telp" id="telp">
        <br>
        <label for="email">Email</label>
        : <input type="text" name="email" id="email">
        <br>
        <label for="username">Username</label>
        : <input type="text" name="username" id="username">
        <br>
        <label for="password">password</label>
        : <input type="password" name="password" id="password">
        <br>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <br>
        <button type="submit">Tambah</button>

    </form>
</body>

</html>
