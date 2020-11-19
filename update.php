<?php include 'conn.php';?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Account</h4>

       
    <?php
    $id = $_GET['id'];
    $seldata = "select * from login  WHERE id={$id}"; //sql query
    $result = mysqli_query($conn, $seldata); //1 canection vel 2 sql query

    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <form action="up1.php" method="POST">
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>

                <input type="text" name="name"  value="<?php echo $row['name']?>"
                 class="form-control" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="text" name="email" value="<?php echo $row['email']?> "
                class="form-control" placeholder="Email address" type="email">
                <input type="hidden" name="id" value="<?php echo $row['id']?> ">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select class="form-control" name="job">
                    <?php
                    $seldata = "select * from job";
                    $result = mysqli_query($conn, $seldata);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $row['jid'] ?>"><?php echo $row['jname'] ?></option>
                        <!-- <option value="saab">Saab</option> -->
                    <?php
                    }
                    ?>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Create password" name="password" type="password"  value="<?php echo $row['password']?> ">
            </div> <!-- form-group// -->
           
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
            </div> <!-- form-group// -->

        </form>
        <?php
    }
    ?>
    </article>
</div> <!-- card.// -->

</div>
<!--container end.//-->


