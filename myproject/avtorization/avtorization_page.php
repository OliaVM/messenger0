﻿<?php require_once __DIR__ . '/../common/header.php'; ?>
<?php //require_once '/var/www/html/myproject/common/header.php'; ?> 	 	
<!-- Authorization -->
<?php require __DIR__ . '/../../src/core/form/avtorization_form.php'; ?>
<!-- Exception during the authorization attempt -->
<?php	if (isset($exAvtoriz3)): ?> 
		<h2 class="redcolor"><?php echo $exAvtoriz3; ?></h2>
<?php	endif; ?> 
<?php	if (isset($exAvtoriz4)): ?>  
		<h2 class="redcolor"><?php echo $exAvtoriz4; ?></h2>
<?php	endif; ?> 
<?php	if (isset($exAvtoriz8)): ?>  
		<h2 class="redcolor"><?php echo $exAvtoriz8; ?></h2>
<?php	endif; ?> 
<a href="/index.php">Перейти на главную страницу</a> 
<?php //require_once '/var/www/html/myproject/common/footer.php'; ?> 
<?php require_once __DIR__ . '/../common/footer.php'; ?> 




