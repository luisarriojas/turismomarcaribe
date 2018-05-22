<?php

echo '<div id="error">';
echo '<div id="content">';
echo $_SESSION['error_message'];
echo '<div id="close_button">';
echo '<input type="button" value="OK" onclick="div_delete(\'error\')" />';
echo '</div>';
echo '<div id="space"></div>';
echo '</div>';
echo '</div>';
unset($_SESSION['error_message']);
?>