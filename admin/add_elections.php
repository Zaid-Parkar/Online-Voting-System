<div class="row my-3">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
              
            </tbody>
        </table>
    </div>
</div>

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
echo $diff->format ("%R%a days ") ;


}
?>