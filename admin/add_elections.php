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
                <input type="text" onfocus="this.type='Date'" name="starting._date" placeholder="Starting Date" class="form-control" required />
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
                    <th scope="col">s.No</th>
                    <th scope="col">Election Namec/th>
                    <th scope="col">Candidates </th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Ending Date</th>
                    <th scope="col">Status Date</th>
                    <th scope="col">Action k/th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>