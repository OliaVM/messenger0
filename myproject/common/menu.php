<<<<<<< HEAD
﻿			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
			  	<div class="span3" id="box4" id="menu"> 
					<ul>
						<li><a href="../index.php?page_name=content">Главная</a></li>
						<li><a href="../index.php?page_name=avtorization_page">Авторизоваться</a></li>
						<li><a href="index.php?page_name=registration_page">Зарегистрироваться</a></li>
						<?php if (isset($_SESSION['login'])): ?>
							<li><a href="index.php?page=1&key=indiv&page_name=content">Посмотреть список своих сообщений, добавить новую запись</a></li>
							<!-- Display the exit button from the session -->
							<?php require_once __DIR__ . '/../../src/core/form/exit_button.php' ?>
						<?php endif; ?>
						<li><a href="index.php?page=1&key=all&page_name=content">Посмотреть список всех тем</a></li>
					</ul>
				</div>

				<div class="span6" id="box8">
					<div>
=======
﻿<ul>
	<li><a href="../index.php?page_name=content">Главная</a></li>
	<li><a href="../index.php?page_name=avtorization_page">Авторизоваться</a></li>
	<li><a href="index.php?page_name=registration_page">Зарегистрироваться</a></li>
	<?php if (isset($_SESSION['login'])): ?>
		<li><a href="index.php?page=1&key=indiv&page_name=content">Посмотреть список своих сообщений, добавить новую запись</a></li>
		<!-- Display the exit button from the session -->
		<?php require_once __DIR__ . '/../../src/core/form/exit_button.php' ?>
	<?php endif; ?>
	<li><a href="index.php?page=1&key=all&page_name=content">Посмотреть список всех тем</a></li>
</ul>
>>>>>>> dc0ba4b324acb3b305154e40501cdfc4036a3143
		
			    
