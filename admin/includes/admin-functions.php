<?php

function svgt_current_action() {
	if (isset($_REQUEST['action']) && $_REQUEST['action'] != -1) {
		return $_REQUEST['action'];
	}

	if (isset($_REQUEST['action2']) && $_REQUEST['action2'] != -1) {
		return $_REQUEST['action2'];
	}

	return false;
}
