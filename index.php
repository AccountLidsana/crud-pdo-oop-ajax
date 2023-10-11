<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <style>
        button[button_link] {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }
        </style>
    </head>
    <body>

        <?php include "modal.php" ?>


        <div class="container">
            <button button_link="" onclick="window.location.href = 'index.php';">HOME</button>
            <h1 class="mt-5">Infomation Page</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Insert</button>

            <!-- <a href="insert.php" class="btn btn-success">Go to Insert</a> -->
            <hr>
            <table id="mytable" class="table table-bordered table-striped">
                <thead>
                    <th>ລະຫັດ</th>
                    <th>ປະເພດ</th>
                    <th>ຫມາຍເຫດ</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>



        <!-- include('function.php');
        $fetchdata = new Database();

        $sql = $fetchdata->fetchdata();
        foreach($sql as $row) {



        <tr>
            <td><?php echo $row['cate_id']; ?></td>
            <td><?php echo $row['cate_name']; ?></td>
            <td><?php echo $row['remark']; ?></td>

            <td><a href="update.php?id=<?php echo $row['cate_id']; ?>" class="btn btn-primary">Edit</a></td>
            <td><a href="delete.php?del=<?php echo $row['cate_id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr> -->


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script defer src="insert.js"></script>
        <script defer src="update.js"></script>
        <script defer src="delete.js"></script>


    </body>
</html>