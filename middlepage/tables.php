<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <!---728x90--->

            <h3 class="title1">Table</h3>
            <a href="index.php?page=form"><button class="btn-primary">ADD NEW RECORD</button></a>
            <div class="bs-example widget-shadow" data-example-id="contextual-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $select = "select * from `register`";
                        $qry = mysqli_query($conn, $select);
                        while ($row = mysqli_fetch_assoc($qry)) { ?>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <a href="index.php?page=form&action=update&id=<?php echo $row['id']; ?>"><button style="background-color: #04AA6D; color:white">Update</button></a>
                                |
                                <a href="index.php?page=action&action=delete&id=<?php echo $row['id']; ?>"><button style="background-color: #04AA6D; color:white">Delete</button></a>
                            </td>

                    </tbody>
                <?php $i++;
                        } ?>
                </table>
            </div>
        </div>
    </div>
</div>