<div id="header">
	<h1><?php echo $PageTitle; ?></h1>
	<form action="search.php" accept-charset="utf-8" method="post" class="menu">
			<a href="index.php"><i class="fa fa-home"></i> Home</a>
			<a href="tags.php"><i class="fa fa-tags"></i> Tags</a>
			<a href="info.php"><i class="fa fa-info"></i> Info</a>
			<?php echo $MenuEntries; ?>
			<input name="utf8" type="hidden" value="&#x2713;" />
			<button type="submit" class="btn btn-search search">
				<i class="fa fa-search"></i>
			</button>
			<input type="text" name="sphrase" class="search" value="" placeholder="Search.."/>
	</form>
</div>

<div style="top:0px" class="error" id="error">
<?php echo $ErrorMsg; ?>
</div>
<div style="top:0px" class="info" id="info">
<?php echo $InfoMsg; ?>
</div> 