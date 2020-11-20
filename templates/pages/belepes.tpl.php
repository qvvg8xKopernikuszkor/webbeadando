

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mini honlap Kft.</title>
    <title>Bootstrap 4 Website Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.
bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.
css">
<script src="https://ajax.googleapis.com/ajax/libs/
jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/
popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/
bootstrap/4.4.1/js/bootstrap.min.js"></script>
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


    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend>Bejlentkezés</legend>
        <br>
        <input type="text" name="felhasznalo" 
placeholder="felhasználó" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" 
required><br><br>
        <input type="submit" name="belepes" value="Belépés">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3>Regisztrálja magát, ha még nem felhasználó!</h2>
    <form action = "?oldal=regisztral" method = "post">
      <fieldset>
        <legend>Regisztráció</legend>
        <br>
        <input type="text" name="vezeteknev" 
placeholder="vezetéknév" required><br><br>
        <input type="text" name="utonev" placeholder="utónév" 
required><br><br>
        <input type="text" name="felhasznalo" 
placeholder="felhasználói név" required><br><br>
        <input type="password" name="jelszo" placeholder="jelszó" 
required><br><br>
        <input type="submit" name="regisztracio" 
value="Regisztráció">
        <br>&nbsp;
      </fieldset>
    </form>



    </div>
    </div>






