<?php session_start();
mysql_connect("localhost","25151576_strona","Sosnakox1!") or die(mysql_error()."Nie mozna polaczyc sie z baza danych. Prosze chwile odczekac i sprobowac ponownie.");
mysql_select_db("25151576_strona") or die(mysql_error()."Nie mozna wybrac bazy danych.");
?>
