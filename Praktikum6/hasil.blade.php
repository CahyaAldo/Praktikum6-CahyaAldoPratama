<!DOCTYPE html>
<html>
 <head>
  <title>Pesanan</title>
 </head>
 <body>
 <center>
 <h3>Daftar Pesanan Anda</h3>
   <table border="2px" style="border-color: greenyellow;; width: 450px; border-collapse:collapse;">
<tr style ="background-color: greenyellow; color: black;">
    <th>Makanan</th>
    <th>Minuman</th>
</tr>
<tr>
    <td>{{ $makan }}</td> 
    <td>{{ $minum }}</td>
</tr>
</table>
</center>
</body>
</html>