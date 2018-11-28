<?php
class connectDB
{
        private $_host = "localhost";
       	private $_user = "root";
		private $_db   = "db_login";      
		private $_pass = "123456789";
        // Will need a new class Error to handle all errors

        private function openDB()
        {
				$charset = "set names utf8";
                $link = mysql_pconnect($this->_host, $this->_user, $this->_pass);
                if (!$link) {
                die('Could not connect to the server: ' . mysql_error());
                }

                $db_selected = mysql_select_db($this->_db, $link);
                if (!$db_selected) {
                        die ('Could not connect to the database"' . $this->_db ." get error: " . mysql_error());
                }
				
				mysql_query($charset) or die('Invalid query: ' . mysql_error());
				
        }

        private function closeDB()
        {
                mysql_close($link);
        }
		
        public function return_sql($sql)
        {
                self::openDB();
                $result = mysql_query($sql);
				$num_rows = mysql_num_rows($result);
				if ($result){
						$arrData   = array();
						while ($rows = mysql_fetch_array($result)) {$arrData[] = $rows;}
				}else{ 
                        $message  = 'ชุดคำสั่งของ : ' . mysql_error() . " ไม่ถูกต้อง<BR />";
                       // $message .= 'Whole query: ' . $query;
					   $message = mysql_error();
                        die($message);
				} 
                //return the result to a function that will build the right table.
				return $arrData;

              self::closeDB();
        }

        public function record_count($sql)
        {
                self::openDB();
                $result = mysql_query($sql);
				$num_rows = mysql_num_rows($result);
				return $num_rows;
             	self::closeDB();
        }

	 public function exe($sql)
        {
               self::openDB();
               $result = mysql_query($sql);
				if (!$result) {
					   $message  = 'ชุดคำสั่งของ : ' . mysql_error() . " ไม่ถูกต้อง<BR />";
                        die($message);
				}
        }
}
?>