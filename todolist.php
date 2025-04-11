<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To Do List</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="styless.css">
        </head>
        <body>
    <div class="container">
        <div class="header">
            <div class="title">
                <i class='bx bx-sun'></i>
                <span>To do list</span>
            </div>
            <div class="description">
                <?= date('l, d M Y') ?> 
            </div>
            <a href="logout.php" class="logout">
        		<i class='bx bxs-log-out-circle'></i>
        		<span class="text">Logout</span>
    	    </a>
        </div>

        <div class="content">
            <div class="card">
                <form action="input.php" method="post">
                    <input type="text" class="input-control" name="nama_tugas" placeholder="Add task">
                    <div class="text-right">
                        <button type="submit" name="add">Add</button>
                    </div>
                </form>
            </div>

            <?php 
            include 'connect.php';
            $data = mysqli_query($conn,"SELECT * FROM tugas");
            while($d = mysqli_fetch_array($data)){
            ?>
                <div class="card">
                    <div class="task-item">
                        <div>
                            <input type="checkbox">
                            <span><?php echo $d['nama_tugas']; ?></span>
                        </div>
                        <div>
                            <a href="edit.php?id=<?php echo $d['id']; ?>"><i class='bx bxs-edit'></i></a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="text-red" title="Remove"><i class="bx bx-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
