<?php

include 'config.php';
$id = $_REQUEST['id'];
$select = "select * from `register` where `id`='" . $id . "'";
$qry = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($qry);

if ($_REQUEST['id'] == "") {
    $action = "insert";
} else {
    $action = "update";
}


?>
<div id="page-wrapper">
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Registartion Form</h3>
            <div class="form-three widget-shadow">
                <div class=" panel-body-inputin">
                    <form class="form-horizontal" method="post" action="index.php?page=action">
                        <input type="hidden" name="action" value="<?php echo $action; ?>" readonly="">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" readonly="">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control1" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Email Address</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input type="email" class="form-control1" name="email" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input type="password" class="form-control1" name="pwd" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>