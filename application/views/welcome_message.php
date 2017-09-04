<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AGM Software</title>

	
	<!-- Bootstrap min-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/footer.css">

    <!-- jQuery lokal  2.2.4 -->
    <script src="<?php echo base_url();?>assets/jquery-2.2.4.js"></script>
	
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

    
</head>


<body>



<div class="container">


     <div class="page-header">
        <h1>No Page Load</h1>
        </div>
     
      	<br>


                          <form id="mhsform" method="" action="" novalidate="novalidate">

                              <div class="form-group">
                                  <label for="nama_mhs" class="control-label">Nama</label>
                                  <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" value="" required="" title="" placeholder="">
                                  <span class="help-block">Masukkan Nama Mahasiswa</span>
                              </div>
                              <div class="form-group">
                                  <label for="no_mhs" class="control-label">Nomer Mahasiswa</label>
                                  <input type="text" class="form-control" id="no_mhs" name="no_mhs" value="" required="" title="">
                                  <span class="help-block">Masukkan nomer Mahasiswa</span>
                              </div>
                              <div class="form-group">
                                  <label for="matkul_mhs" class="control-label">Mata Kuliah</label>
                                  <input type="text" class="form-control" id="matkul_mhs" name="matkul_mhs" value="" required="" title="">
                                  <span class="help-block">Masukkan Nama Mata Kuliah</span>
                              </div>


                              <input type="submit" class="btn" name="insert-data" id="insert-data" value=Simpan>
                              <br><br>
                            <p id="message"></p>
                          </form>

 
</div>

    <footer class="footer">
        <div class="container">
        <p class="text-muted">AGM Software &copy; 2017</p>
        </div>
    </footer>


</body>


<script>
    $(function(){
        $( "#insert-data" ).click(function(event)
        {
            
            //event.preventDefault();//prevent auto submit data

            var nama_mhs  =$("#nama_mhs").val();
            var no_mhs    =$("#no_mhs").val();
            var matkul_mhs=$("#matkul_mhs").val();
                   

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url();?>index.php/proses/show",
                    data: {nama_mhs:nama_mhs,no_mhs:no_mhs,matkul_mhs:matkul_mhs},
                   
                    success: function(data) {
                    
                    $("#message").html(data);
                    $("p").addClass("");
                    }


                });

            return false;

        });
    });
</script>











</html>