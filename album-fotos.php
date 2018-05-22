<?php
for ($i = 1; $i <= $q; $i++) {
	echo '<a href = "img/' . $base . '-' . $i . '.jpg" rel = "group1" class = "lightbox">';
	echo '<img src = "reduce.php?file=' . $base . '-' . $i . '.jpg" class = "packPhoto" />';
	echo '</a>';
}
?>