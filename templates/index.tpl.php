<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body class="bg-dark">
	
	<header class="text-white">
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
    <div id="wrapper"></div>


<aside id="nav">
		<nav class="navbar navbar-expand-s bg-danger navbar-dark">
<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
<aside>
  <h1><?= $fejlec['cim'] ?></h1>
<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
  </aside>

			<button class="navbar-toggler" type="button" 
              data-toggle="collapse" data-target="#collapsibleNavbar">
  				<span class="navbar-toggler-icon"></span>
			  </button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav">
			 
					<?php foreach ($oldalak as $url => $oldal) { ?>
						<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
							<li class="nav-item"<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
							<a class="nav-link" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
							<?= $oldal['szoveg'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
                </ul>
			</div>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>
	</div>


	<footer>
	<p class="text-center text-white">    
		<?php if(isset($lablec['jog'])) { ?><?= $lablec['jog']; ?><?php } ?>
&nbsp;
        <?php if(isset($lablec['ceg'])) { ?>&copy;&nbsp;<?= $lablec['ceg'] ?> <?php } ?>	
	</footer>
	
</body>
</html>
