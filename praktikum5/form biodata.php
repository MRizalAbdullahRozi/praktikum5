<!doctype html>
<html>
<head>
    <title></title>
    <style type="text/css">
        body {
            background-color: grey;
        }
        form {
            font-weight: bold;
        }
    </style>
</head>
<body>
<center><h1>Formulir Sederhana</h1></center>
<center>
    <form method="POST" action="biodataAct.php">
        <table border="0" width="400">
        <tr><td>Nama</td>
               <td>:</td>
               <td><input type="text" size="25" name="Nama"></td>
        </tr>
        <tr><td>Email</td>
               <td>:</td>
               <td><input type="text" size="25" name="Email"></td>
        </tr>
        <tr><td>Status</td>
               <td>:</td>
               <td><input type="text" size="25" name="Status"></td>
        </tr>
        <tr><td>Tanggal Lahir</td>
               <td>:</td>
               <td><input type="date" name="tanggal">
        </td>
        </tr>
        <tr><td>Jenis Kelamin</td>
               <td>:</td>
               <td><input type="radio" value="Laki-laki" name="jk">Laki-Laki
                      <input type="radio" value="Perempuan" name="jk">Perempuan</td>
        </tr>
        <tr><td>Hobi</td>
               <td>:</td>
                <td><select name="Hobi">
                   <option value="Sepak Bola">Sepak Bola</option>
                   <option value="Futsall">Futsall</option>
                   <option value="Voli">Voli</option>
                   <option value="Basket">Basket</option>
                   <option value="Tenis">Tenis</option>
                   </select></td>
        </tr>
        <tr><td>Alamat</td>
               <td>:</td>
               <td><textarea rows="2" cols="35" name="Alamat"></textarea></td>
        </tr>
        <tr><td><center><input type="reset" value="Hapus">
            <input type="submit" value="Kirim" ></center></td></tr>
        </td></tr>
        </table>
    </form>
</center>
</body>
</html>