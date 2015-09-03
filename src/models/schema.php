<?php
    /**
     *
     */
    class Schema
    {
        private $sql;


        function __construct($sql)
        {
            $this->sql = $sql;
            global $wpdb;
        }

        public function install()
        {
            # code...for create table
        }
        public function uninstall()
        {
            # code...for drop table
        }
    }
