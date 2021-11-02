<!DOCTYPE html>
<html>
 <head>
  <title>Menu Makanan</title>
 </head>
 <body>
  <center>
 <b>Daftar Menu</b>
   <table border="2px" style="border-color: greenyellow; width: 450px; border-collapse:collapse; ">
<tr style ="background-color: greenyellow; color: black;">
    <th>Makanan</th>
    <th>Minuman</th>
</tr>
<tr>
    <td>1. Nasi & Ikan Nila Bakar</td> 
    <td>1. Es Teh</td>
</tr>
<tr>
    <td>2. Nasi & Ikan Lele Bakar</td> 
    <td>2. Es Jeruk</td>
</tr>
<tr>
    <td>3. Nasi & Ayam Goreng</td> 
    <td>3. Jeruk Panas</td>
</tr>
<tr>
    <td>4. Nasi & Bebek Goreng</td> 
    <td>4. Teh Panas</td>
</tr>
</table> <br> <br>
<b>Tuliskan Pesanan Anda : </b>
<form action="/pesanan" method="POST">
  @csrf
        <label>Makanan</label>
        <input type="text" name="makanan">
        <label>Minuman</label>
        <input type="text" name="minuman">
        <br><br>
        <input style="margin-left:430px; background-color: greenyellow;" type="submit" value="Pesan">
    </form>
    </center>
</body>
</html>

