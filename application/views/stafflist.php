<section class="container-fluid">
	<div class="row">
        <div class="col-md-1"></div>
	    <div class="col-md-8" style="background-color:RGB(245,245,245);">



        <div class="row">
           
        <div class="panel panel-primary">
            <div class="panel-heading">Staff</div>
            <div class="panel-body">
            <table class=" table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Personal Info</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $staff_count = count($records);
                        for($i = 0; $i < $staff_count; $i++) {
                            echo "<tr>";
                                echo "<td>".$records[$i]["Staff_Name"]."</td>";
                                echo "<td>".$records[$i]["Designation"]."</td>";
                                echo "<td>".$records[$i]["Personal_Info"]."</td>";
                                echo "<td>".$records[$i]["Address"]."</td>";
                                echo "<td>".$records[$i]["Phone"]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            
            </div>
        </div>

        </div>
        
        </div>

        <!--- Right Side Bar for departent specific Information -->

        <div class="col-md-2" style="background-color:RGB(245,245,245);">
        <div class="panel panel-primary">
            <div class="panel-heading">Panel with panel-primary class</div>
            <div class="panel-body">
            <ul>
                <li>content 1 </li>
                <li> content 2</li>
                <li> content 3 </li>
                <li> content 4 </li>
                <li> content 5 </li>
            </ul>
            </div>
        </div>
            
        </div>




    </div>
</section>