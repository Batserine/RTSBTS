            <?php
             include("config.php");
            $query = "SELECT * FROM driver";
            $result1 = mysqli_query($success, $query) or die("Access failed");
          ?>
         
         <p>Select a Bus number</p>
         
 <select class='form-control' name='field' onChange="window.location.href=this.value" id='select'>

            <?php
              include("config.php");
             while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="http://localhost:81/rtsbts/map1.php?id=<?php echo $row1['username'];?>"><?php echo $row1['assigned_bus'];?></option>
            <?php endwhile;?>

        </select>
</div>
