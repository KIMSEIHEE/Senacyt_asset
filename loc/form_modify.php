<?php

session_cache_limiter('nocache, must-revalidate');

    session_start();
   
    if($_SESSION['user_id']!='admin'){    
        ?>
<script>alert("no access right");</script>
<meta http-equiv="refresh" content="0;url=../main.php">
<?php
    }
        
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                       <script type="text/javascript" src="../chk.js"></script>
 
        </script>
    </head>
    <body>
        <?php
        
        include_once("../header.php");
        
        
        // put your code here
        
        $locid = $_POST['loc_id'];
        
        $locbuild = $_POST['loc_building'];
        $locfloor = $_POST['loc_floor'];
        $locdesc = $_POST['loc_desc'];

      ?>
        <form method ="post" action="do_modify.php" id="myform" name='myform' onsubmit ="return validateForm('myform');"> 
            
            
        
        <input type='hidden' name = 'loc_id' value = '<?php echo $locid;?>' >
        
       <br> Edificio : <input type='text' name='loc_building' value = '<?php echo $locbuild; ?>'>
      <br> Piso  : <input type='text' name='loc_floor' value = '<?php echo $locfloor; ?>'>
        <br> Descripción : <input type='text' name='loc_desc' value = '<?php echo $locdesc;?>'>
        <br><input type='submit' name='submit' value = 'confirmar'>
       
        </form>
        <button type ="button"  onclick="history.back()"> volver </button>
        
    </body>
</html>
