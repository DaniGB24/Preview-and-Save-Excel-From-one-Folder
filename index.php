<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<link rel="icon" href="foto/home.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">

</script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Site Properties -->
<title>Group 4</title>

<link rel="stylesheet" type="text/css" href="dist/components/reset.css">
<link rel="stylesheet" type="text/css" href="dist/components/site.css">

<link rel="stylesheet" type="text/css" href="dist/components/container.css">
<link rel="stylesheet" type="text/css" href="dist/components/grid.css">
<link rel="stylesheet" type="text/css" href="dist/components/header.css">
<link rel="stylesheet" type="text/css" href="dist/components/image.css">
<link rel="stylesheet" type="text/css" href="dist/components/menu.css">

<link rel="stylesheet" type="text/css" href="dist/components/divider.css">
<link rel="stylesheet" type="text/css" href="dist/components/list.css">
<link rel="stylesheet" type="text/css" href="dist/components/segment.css">
<link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
<link rel="stylesheet" type="text/css" href="dist/components/icon.css">

<script type="dist/semantic.min.js">$('.autumn.leaf').transition('fade');
</script>
</head>
<body style="background-color: #fff;font-family: 'Roboto'">


<div class="ui container" style="">
  <div class="ui stackable menu" style="background-color: #000;" >
  	<center><h1 style="color:#fff;">Preview and Save Excel From one Directory</h1></center>
  
  </div>
  

  <center>
  <form name="myForm" id="myForm" onSubmit="return validateForm()" action="" method="post" enctype="multipart/form-data">
    <center><h3><p style="color: white;font-family: 'Roboto'">Impor Folder</p></h3></center>
    <div class="ui inverted blue button">
      <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="" style="color: black"></input>
    </div>

    <br><br>    
      <input type="submit" name="submit" class="ui blue toggle button" value="Preview">

 
      


    </div>
    </center>
  </div>
  <center>
    
    <?php           
            require "excel_reader.php";
            require "koneksi.php";
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            foreach ($_FILES['files']['name'] as $j => $name) {
                if (strlen($_FILES['files']['name'][$j]) > 1) {
                    if (move_uploaded_file($_FILES['files']['tmp_name'][$j],$name)) {

                        chmod($_FILES['files']['name'][$j],0777);
                
                  $data = new Spreadsheet_Excel_Reader($_FILES['files']['name'][$j],$name,false);
                  echo $name;
                
            //    menghitung jumlah baris file xls
                  $baris = $data->rowcount($sheet_index=0);
              
                  echo "<table border = '1'>
        
          <tbody>";

          //    data Header
                $baris = $data->rowcount($sheet_index=0);
                for ($i=1; $i<2; $i++)
                {
            //       membaca data header
                  $nim           = $data->val($i, 1,0);
                  $nama          = $data->val($i, 2,0);
                  $prov          = $data->val($i, 3,0);
                  $univ          = $data->val($i, 4,0);
                  $prodi         = $data->val($i, 5,0);
                  echo "<tr>
                <th>".$nim."</th>
                  <th>".$nama."</th>
                  <th>".$prov."</th>
                  <th>".$univ."</th>
                  <th>".$prodi."</th>
              </tr>";
              }
                
            //    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
                $baris = $data->rowcount($sheet_index=0);
                for ($i=2; $i<=$baris; $i++)
                {
            //       membaca data (kolom ke-1 sd terakhir)
                  $nim           = $data->val($i, 1,0);
                  $nama          = $data->val($i, 2,0);
                  $prov          = $data->val($i, 3,0);
                  $univ          = $data->val($i, 4,0);
                  $prodi       = $data->val($i, 5,0);
                  echo "<tr>
                <td>".$nim."</th>
                  <td>".$nama."</td>
                  <td>".$prov."</td>
                  <td>".$univ."</td>
                  <td>".$prodi."</td>
              </tr>";
                 $query = "INSERT into kelompok_mhs (
                        nim,
                        nama,
                        prov,
                        univ,
                        prodi)values('$nim','$nama','$prov','$univ','$prodi')";
                  $hasil = mysql_query($query);
            //      setelah data dibaca, masukkan ke tabel pegawai sql
                }
                
                
                
            //    hapus file xls yang udah dibaca
                
            
          echo "</tbody>
      </table>";
                    }
                }
            }    
                
    }
   ?>
  </center>
  
  <div class="ui container segment align bottom" style="background-color: #000;color: white">
    <center><p>^(-_-)^</p></center>
  </div>
</form>

</body>
</html>