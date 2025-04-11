<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To Do List</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style type="text/css">
            @import url('https://font.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
            *{
                padding: 0;
                margin:0;
                box-sizing: border-box;
            }
            body{
                font-family: 'Roboto, sans-serif';
                background: #720672; /*falback for old browser */
                background: -webkit-linear-gradient(to right, #f52ffc, #5c064d);/* chrome 10-25, safari 5.1-6 */
                background: linear-gradient(to right, #8f94fb, #a81990); /* W3C, IE 10+/ Edge, Firefox 16+, chrome 26+, opera 12+, safari 7+ */
            }
            .container {
                width: 590px;
                height: 100vh;
                margin: 0 auto;
            }
            .header{
                padding: 15px;
                color: #fff;
            }
            .header .title{
                display: flex;
                align-items: center;
                margin-bottom: 7px;
            }
            .header .title i{
                font-size: 24px;
                margin-right: 10px;
            }
            .header .title span{
                font-size: 18px;
            }
            .header .description{
                font-size: 13px;
            }
            .content{
                padding: 15px;
            }
            .card{
                background-color: #fff;
                padding: 15px;
                border-radius: 5px;
                margin-bottom: 10px;
            }
            .input-control{
                width: 100%;
                display: block;
                padding: 0,5rem;
                font-size: 1rem;
                margin-bottom: 10px;
            }
            .text-right{
                text-align: right;   
            }
            button{
                padding: 0.5rem 1rem;
                font-size: 1rem;
                cursor: pointer;
                background: #720672; /*falback for old browser */
                background: -webkit-linear-gradient(to right, #f52ffc, #5c064d);/* chrome 10-25, safari 5.1-6 */
                background: linear-gradient(to right, #8f94fb, #a81990); /* W3C, IE 10+/ Edge, Firefox 16+, chrome 26+, opera 12+, safari 7+ */
                color: #fff;
                border: 1px solid;
                border-radius: 3px;
            }
            .task-item{
                display: flex;
                justify-content: space-between;
            }
            .text-orange{
                color: orange;
            }
            .text-red{
                color: red;
            }
            .task-item.done span{
                text-decoration: line-through;
                color: #cccc;
            }
            </style>
        </head>
        <?php
include 'connect.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan di URL!");
}

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM tugas WHERE id='$id'");
if (mysqli_num_rows($data) === 0) {
    die("Data tidak ditemukan!");
}
$d = mysqli_fetch_array($data);
?>

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
        </div>

        <div class="content">
            <div class="card">
                <form method="post" action="editproses.php">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama_tugas" value="<?php echo $d['nama_tugas']; ?>">
                    <div class="text-right">
                        <button type="submit" name="edit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
