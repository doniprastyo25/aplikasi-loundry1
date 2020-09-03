<html>
  <body> 

  <style type="text/css">
    body {
    	font-size:12px;
    	font-family:Arial, Helvetica, sans-serif;

    }
    .style1{
    	font-size:12px;
    	font-family:Arial, Helvetica, sans-serif;	
    }
  </style>
  <br>
  <h2>BUKTI PEMBAYARAN</h2>
  <table width="1200px">
    <tbody>
      <tr>
        <td colspan="3">PT(kilan).PARALONdry</td>
      </tr>
      <tr>
        <td colspan="3">Ds.Gelangkulon Kec.Sampung Kab.Ponorogo</td>
      </tr>
      <tr>
        <td colspan="3">CS:*123#</td>
      </tr>
      <tr>
      <td colspan="4">--------------------------------------------------------------------------------------------------------------------------------------------------------</td>
      </tr>
      <tr>
        <td width="150px">Nama</td>
        <td width="5px">:</td>
        <td><b><u>{{ $riwayat->konsumen }}</u></b></td>
      </tr>
      <tr>
        <td width="150px">Berat Pakaian</td>
        <td width="5px">:</td>
        <td><b><u> {{ $riwayat->berat }}Kg</u></b></td>
      </tr>
      <tr>
        <td width="150px">Untuk Pembayaran paket</td>
        <td width="5px">:</td>
        <td><b><u>{{ $riwayat->kategori }}</u></b></td>
      </tr>
      <tr>
        <td width="150px">Total Bayar</td>
        <td width="5px">:</td>
        <td><b><u> {{ Terbilang($riwayat->tarif) }} Rupiah</u></b></td>
        <!-- disini menggunakan fungsi terbilang dari file fungsi.php -->
      </tr>
      <tr>
      <td colspan="4">--------------------------------------------------------------------------------------------------------------------------------------------------------</td>
      </tr>
      <tr>
        <td colspan="3">Ponorogo, </td>
      </tr>
      <tr>
        <td colspan="3">Nominal :</td>
        
      </tr>
      <tr>
        <td height="100px" style="border: 1px solid black;" width="200px"><h1>{{ indo_currency($riwayat->tarif) }}</h1></td>
      </tr>
      <tr>
        <td colspan="4" align="right">--</td>
      </tr>
    </tbody>
  </table>

</body>
</html>