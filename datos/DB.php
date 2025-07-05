<?php
    class DB{
        public function conectar(){
            $url_mysql="mysql: host=localhost; dbname=ventasweb1";
            $user_mysql="root";
            $password_mysql="";

            $url_pg="pgsql: host=localhost; port=5433; dbname=ventasweb";
            $user_pg="postgres";
            $password_pg="123";

            $cn=new PDO($url_pg, $user_pg, $password_pg);
            return $cn;
        }
    }
?>