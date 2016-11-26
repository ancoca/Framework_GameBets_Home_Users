<?php
    class controller_main {

        public function __construct() {

        }

        public function begin() {
          include_once(INC_PATH . "top.php");
          include_once(INC_PATH . "header.php");
          include_once(INC_PATH . "menu.php");

          loadView('module/main/view/', 'main.php');

          include_once(INC_PATH . "footer.php");
          include_once(INC_PATH . "bottom.php");
        }
    }
