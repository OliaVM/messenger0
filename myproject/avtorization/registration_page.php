﻿						<?php require_once __DIR__ . '/../common/header.php'; ?> 
						<!-- Registration -->	
						<?php	if (isset($exRegistration5) || isset($exRegistration6)): ?> 
							<?php require '/var/www/html/src/core/form/registration_form_save.php'; ?>
						<?php else: ?>
							<?php require '/var/www/html/src/core/form/registration_form.php'; ?>
						<?php endif; ?>
						<!--  Exception during the registration attempt -->
						<?php	if (isset($exRegistration5)): ?> 
							<h2 class="redcolor"><?php echo $exRegistration5; ?></h2>
						<?php	endif; ?> 
						<?php	if (isset($exRegistration6)): ?>  
							<h2 class="redcolor"><?php echo $exRegistration6; ?></h2>
						<?php	endif; ?>
						<?php	if (isset($exRegSymbol)): ?>  
							<?php echo "<h2>" . $exRegSymbol . "</h2>"; ?>
						<?php	endif; ?> 
						<a href="/index.php">Перейти на главную страницу</a>  
						<?php require_once __DIR__ . '/../common/footer.php'; ?> 




