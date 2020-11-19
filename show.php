<?php include 'conn.php';?>
<php?
$regalt = "select * from login";

<table border=1 cellspacing="5px" align="center">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>password</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $seldata = "select * from login"; //sql query
                $result = mysqli_query($conn, $seldata); //1 canection vel 2 sql query

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <!-- tebal -->
                        <br>
                        <td><?php echo $row['id'] ?></a></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['job'] ?></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>">adit</a></td>
                        <td><a href="delet.php?id=<?php echo $row['id'] ?>">delet</a></td>
                        <br>
                    </tr>

                <?php
                }
                ?>
        </table>