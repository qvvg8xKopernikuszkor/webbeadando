<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>kopernikuszkor.hu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.
css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.fakeimg {
  height: 200px;
  background: #aaa;
}
</style>
</head>
<body>
    <div id="wrapper">
        <div id="content" class="jumbotron" style="margin-bottom:0"">
    <?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1>Bejelentkezett:</h1>
            Azonosító: <strong><?= $row['id'] ?></strong>
        <br><br>
            Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>

    <?php } else { ?>
        <h1>A bejelentkezés nem sikerült!</h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>
    </div>
    </div>

