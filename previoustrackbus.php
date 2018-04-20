		<p>select here to track previous data</p>
         
 <select class='form-control' name='field' onChange="window.location.href=this.value" id='select'>

            <?php
			include("config.php");
            $query1 = "SELECT * FROM driver";
            $result2 = mysqli_query($success, $query1) or die("Access failed");
             while($row2 = mysqli_fetch_array($result2)):;?>
            <option value="previoustrack.php" echo $row2['username'];?><?php echo $row2['assigned_bus'];?></option>
            <?php endwhile;?>

        </select>