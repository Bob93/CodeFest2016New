
<div class="row">
    <div class="col-lg-12">


    </div>
</div>
<div class="menu-info">
    <div class="form-group">

    </div>
    <h3>Urenregistratie</h3>





    <form class="form-group" action="urenregistratie.php" method="post" role="form">
        Project:<br/>
        <select name="project">
            <?php

            $sth = $dbh->prepare("SELECT naam, project_ID FROM project");
            $sth->execute();

            while($project = $sth->fetch(PDO::FETCH_ASSOC)) {

                echo '<option value="' . $project['project_ID'] . '">' . $project['naam'] . '</option>';
            }
            ?>
        </select><br/>
        Datum:
        <input type="date" name="datum" tabindex="1" class="form-control" placeholder="Van" value="" required>
        Aantal Uren:
        <input type="number" name="aantaluren" tabindex="1" class="form-control">
        Aantal Overuren:
        <input type="number" name="aantaloveruren" tabindex="1" class="form-control">
        <button type="submit" value="Submit">Submitje</button>
    </form>

</div>