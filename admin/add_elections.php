
<script src="assets/js/jquery.min.js"></script>
<?php 
    if(isset($_GET['added']))
    {
?>
        <div class="alert alert-success my-3" role="alert">
            Election has been added successfully.
        </div>
<?php 
    }else if(isset($_GET['delete_id']))
    {
        $d_id = $_GET['delete_id'];
        mysqli_query($db, "DELETE FROM elections WHERE id = '". $d_id ."'") OR die(mysqli_error($db));
?>
       <div class="alert alert-danger my-3" role="alert">
            Election has been deleted successfully!
        </div>
<?php

    }
?>



<div class="row my-3 mx-2">
    <div class="col-4">
        <h3>Add New Election</h3>
        <form method="POST">
            <div class="form- group my-2">
                <input type="text" name="election_topic" placeholder="Elction Topic" class="form-control" required />
            </div>
            <div class="form-group my-2">
                <input type="number" name="number_of_candidates" placeholder="No of Candidates" class="form-control" required />
            </div>
            <div class="form-group my-2">
                <input type="text" onfocus="this.type='Date'" name="s_date" placeholder="Starting Date" class="form-control" required />
            </div>
            <div class="form-group my-2">
                <input type="text" onfocus="this.type='Date'" name="ending_date" placeholder="Ending date" class="form-control" required />
            </div>

            <input type="submit" value="Add Election" name="addElectionBtn" class="btn btn-success my-3" />
        </form>
    </div>
   
    <div class="col -8">
        <h3>Upcoming Elections </h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Election Name</th>
                    <th scope="col">Candidates </th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Ending Date</th>
                    <th scope="col">Status Date</th>
                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                
                <?php $fetchingData = mysqli_query($db, "SELECT * FROM elections ") or die(mysqli_error($db));
                $isAnyElectionAdded = mysqli_num_rows($fetchingData);
              if ($isAnyElectionAdded >0)
                    {

                        $sno=1;
                       while($row = mysqli_fetch_assoc($fetchingData))
{
    $election_id = $row['id'];
?>
<tr>
    <td><?php echo $sno++; ?></td>
    <td><?php echo $row['election_topic']; ?></td>
    <td><?php echo $row['no_of_candidate']; ?></td>
    <td><?php echo $row['s_date']; ?></td>
    <td><?php echo $row['ending_date']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>

            <a href="#" class="btn btn- sm btn-warning"> Edit </a>
            <button class="btn btn-sm btn-danger" onclick="DeleteData(<?php echo $election_id; ?>)"> Delete </button>
     </td>
</tr>

<?php
}
                    }
                   else{
                    ?>
                    <tr>
                    <td colspan="7"> No any election is added yet. </td>
                    </tr>
                   <?php
                   }
              ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    const DeleteData = (e_id) => 
    {
        let c = confirm("Are you really want to delete it?");

        if(c == true)
        {
            location.assign("index.php?addElectionPage=1&delete_id=" + e_id);
        }
    }
</script>


<?php

if(isset($_POST['addElectionBtn']))
{
$election_topic = mysqli_real_escape_string ($db, $_POST['election_topic']);
$number_of_candidates = mysqli_real_escape_string ($db, $_POST['number_of_candidates']);
$s_date = mysqli_real_escape_string ($db, $_POST['s_date']);
$ending_date = mysqli_real_escape_string ($db, $_POST['ending_date']);
$inserted_by=$_SESSION['username'];
$inserted_on =date("Y-m-d");

$date1=date_create ($inserted_on);
$date2=date_create ($s_date) ;
$diff=date_diff( $date1, $date2);



if ((int)$diff->format ("%R%a")> 0)
{
    $status="InActive";
}else {
    $status= "Active";
    }


//quey 
mysqli_query($db,"INSERT INTO `elections` ( `election_topic`, `no_of_candidate`, `s_date`, `ending_date`, `status`, `inserted_by`, `inserted_on`) 
VALUES ( '$election_topic', '$number_of_candidates ', '$s_date', '$ending_date',  '$status', '$inserted_by', '$inserted_on')");

?>

<script> location.assign("index.php?addElectionPage=1&added=1") ; </script>

<?php 

}
?>
