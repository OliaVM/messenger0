<?php if (isset($_GET['page'])): ?>	
	<?php if ($page > 1): ?>
		<?php $backpage2 = '<a href= /index.php?page=1&key='.$key.'&page_name=content><<Первая страница</a>'; ?>
		<?php echo $backpage2 . " "; ?>
	<?php	endif; ?> 
	<?php  if ($page > 2): ?>
	  	<?php $backpage1 = '<a href= /index.php?page='. ($page - 1) .'&key='.$key.'&page_name=content><Предыдущая страница</a> '; ?>
	  	<?php echo $backpage1 . " "; ?>
	<?php	endif; ?> 
	<?php echo " " .'<b>'.$page.'</b>'. " "; ?>
	<?php if ($page < $total): ?>
		<?php $nextpage1 = '<a href= /index.php?page='. ($page + 1) .'&key='.$key.'&page_name=content>Следующая страница></a>'; ?>
		<?php echo $nextpage1 . " "; ?>
	<?php	endif; ?> 
	<?php if ($page < $total-1): ?>
		<?php $nextpage2 = '<a href= /index.php?page=' .$total. '&key='.$key.'&page_name=content>Последняя страница>></a>'; ?> 
		<?php echo $nextpage2; ?>
	<?php	endif; ?> 
<?php	endif; ?> 


