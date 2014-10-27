<?php
	class user {

		protected $userId = null;
		protected $username = null;
		protected $password = null;
		protected $email = null;
		protected $userStatus = null;

		function getUsername() {
			return $this->username;
		}

		function isAdmin() {
			if ($this->userStatus == 1) {
				return true;
			} else {
				return false;
			}
		}

	}