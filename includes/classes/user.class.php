<?php
	class user {

		protected $userId = null;
		protected $username = null;
		protected $password = null;
		protected $name = null;
		protected $email = null;
		protected $userStatus = null;

		function getUserId() {
			return $this->userId;
		}

		function isAdmin() {
			return ($this->userStatus == '1');
		}

	}