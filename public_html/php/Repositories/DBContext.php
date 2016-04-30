<?php
    class DBContext {
        private $servername = "sylvester-mccoy-v3.ics.uci.edu";
        private $db="inf124grp13";
        private $username = "inf124grp13";
        private $password = "4a=eDuVu";

        static function getSqlConnection() {
            try {
                $conn = new PDO("mysql:host=sylvester-mccoy-v3.ics.uci.edu;dbname=inf124grp13;", "inf124grp13", "4a=eDuVu");
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $conn;
            } catch(PDOException $e) {
                    print "Connection failed: " . $e->getMessage();
            }
        }
    }
?>