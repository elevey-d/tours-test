<?php

require '../db/db.php';

$contact = R::findOne('contact', 'id = ?', array($_GET['id']));

if (!empty($contact)) {
	R::trash( $contact );
	header('Location: /admin/contacts');
} else {
	header('Location: ../');
}

?>