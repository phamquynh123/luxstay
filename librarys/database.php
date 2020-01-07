<?php 

    /**
    * 
    */
    class Database
    {
        /**
         * Khai báo biến kết nối
         * @var [type]
         */
        public $link;
        static $num_per_page = 12;

        // public ;

        public function __construct()
        {

         $this->link = mysqli_connect("localhost","root","","ql_homestay") or die ("");
     
         mysqli_set_charset($this->link,"utf8");
     }

     

        /**
         * [insert description] hàm insert 
         * @param  $table
         * @param  array  $data  
         * @return integer
         */
        public function insert($table, array $data)
        {
            //code
            $sql = "INSERT INTO {$table} ";
            $columns = implode(',', array_keys($data));
            $values  = "";
            $sql .= '(' . $columns . ')';
            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $values .= "'". mysqli_real_escape_string($this->link,$value) ."',";
                } else {
                    $values .= mysqli_real_escape_string($this->link,$value) . ',';
                }
            }
            $values = substr($values, 0, -1);
            $sql .= " VALUES (" . $values . ')';
            // _debug($sql);die;
            mysqli_query($this->link, $sql) or die("Lỗi  query  insert ----" .mysqli_error($this->link));
            return mysqli_insert_id($this->link);
        }

        public function update($table, array $data, array $conditions)
        {
            $sql = "UPDATE {$table}";

            $set = " SET ";

            $where = " WHERE ";

            foreach($data as $field => $value) {
                if(is_string($value)) {
                    $set .= $field .'='.'\''. mysqli_real_escape_string($this->link, xss_clean($value)) .'\',';
                } else {
                    $set .= $field .'='. mysqli_real_escape_string($this->link, xss_clean($value)) . ',';
                }
            }

            $set = substr($set, 0, -1);


            foreach($conditions as $field => $value) {
                if(is_string($value)) {
                    $where .= $field .'='.'\''. mysqli_real_escape_string($this->link, xss_clean($value)) .'\' AND ';
                } else {
                    $where .= $field .'='. mysqli_real_escape_string($this->link, xss_clean($value)) . ' AND ';
                }
            }

            $where = substr($where, 0, -5);

            $sql .= $set . $where;
            // _debug($sql);die;
 // echo $sql;
            mysqli_query($this->link, $sql) or die( "Lỗi truy vấn Update -- " .mysqli_error());

            return mysqli_affected_rows($this->link);
            
        }
        public function updateview($sql)
        {
            $result = mysqli_query($this->link,$sql)  or die ("Lỗi update view " .mysqli_error($this->link));
            return mysqli_affected_rows($this->link);

        }
        public function countTable($table)
        {
            $sql = "SELECT id FROM  {$table}";
            $result = mysqli_query($this->link, $sql) or die("Lỗi Truy Vấn countTable----" .mysqli_error($this->link));
            $num = mysqli_num_rows($result);
            return $num;
        }


        /**
         * [delete description] hàm delete
         * @param  $table      [description]
         * @param  array  $conditions [description]
         * @return integer             [description]
         */
        public function delete ($table ,  $id )
        {
            $sql = "DELETE FROM {$table} WHERE id = $id ";

            mysqli_query($this->link,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->link));
            return mysqli_affected_rows($this->link);
        }

        /**
         * delete array 
         */
        
        public function deletewhere($table,$data = array())
        {
            foreach ($data as $id)
            {
                $id = intval($id);
                $sql = "DELETE FROM {$table} WHERE id = $id ";
                mysqli_query($this->link,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->link));
            }
            return true;
        }

        public function fetchsql( $sql )
        {
            $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn sql " .mysqli_error($this->link));
            $data = [];
            if( $result)
            {
                while ($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        } 
           

        public function showOrderbyId($id)
        {
            $id=$id;
            $query="SELECT order_hs.*,building.name,building.district,customer.username
        FROM order_hs INNER JOIN building ON order_hs.buildingid = building.id 
        INNER JOIN customer ON order_hs.customerid = customer.ID
        WHERE order_hs.customerid = '$id' AND order_hs.buildingid = building.id
        order by order_hs.id desc ";
        $result=mysqli_query($this->link,$query);
        return $result;


       

        }

        public function updateChothue($a)
        {
            $id=$a;
            $query="UPDATE building SET status=0 WHERE id='$id'";
            $result=mysqli_query($this->link,$query);
        }

        public function updateOrder($id)
        {
            $id=$id;
            $query="UPDATE order_hs SET status=2 WHERE id='$id'";
            $result=mysqli_query($this->link,$query);   
        }




        public function fetchID($table , $id )
        {
            $sql = "SELECT * FROM {$table} WHERE id = $id ";
            $result = mysqli_query($this->link,$sql);
          
            return mysqli_fetch_assoc($result);

        }

        public function updateStatus($id)
        {
            $id =$id;
            $query ="UPDATE building SET status='0' WHERE id= '$id'";
            $result1 = mysqli_query($this->link,$query);
            return $result1;

        }
        public function insertOrder($id)
        {
            $id =$id;
            $userid=$_SESSION['admin_id'];
            $query ="SELECT * FROM building WHERE id= '$id'";
            $result1 = mysqli_query($this->link,$query);
            while ($kq=$result1->fetch_assoc()) {
                $buildingId=$kq['id'];
                $buildingPrice=$kq['price'];
                $buildingimage=$kq['image'];
                echo "ok".$userid."-".$buildingId."-".$buildingPrice."-".$buildingimage;
            $queryOrder ="INSERT INTO order_hs(customerid,buildingid,price,image) VALUES('$userid','$buildingId','$buildingPrice','$buildingimage')";
             $result2 = mysqli_query($this->link,$queryOrder);


            }
        }

        public function fetchOne($table , $query)
        {
            $sql  = "SELECT * FROM {$table} WHERE ";
            $sql .= $query;
            $sql .= "LIMIT 1";
            $result = mysqli_query($this->link,$sql) or die("Lỗi  truy vấn fetchOne " .mysqli_error($this->link));
            return mysqli_fetch_assoc($result);
        }

    public function fetchLimit($table , $limit ,array $test){
        $select = "SELECT * FROM ";
        $where = "WHERE ";
        $sql = "";
        if(count($test) > 0){
            $sql .= $select . "{$table} " . $where;
            foreach ($test as $key => $value) {
             $sql .= "{$key} LIKE '%{$value}%'" . " LIMIT 0 ,$limit";
         }
             
         }else {
            $sql = $select . "{$table} " . $where . "1 LIMIT 0 ,$limit";
        }
            // echo $sql . "";
        $result = mysqli_query($this->link , $sql) or die ("Loi Truy Van fetchLimit ".mysqli_error($this->link));
        $data = [];
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        return $data;
    }

    
    public function login(array $data)
    {
        if (count($data) > 0) {
            $i = 0;
            $sql = "SELECT * FROM customer WHERE ";
            foreach ($data as $field => $value) {
                if($i == count($data)-1){
                    $sql .= " AND ";
                }
                $sql .= "{$field} = '{$value}' ";
                $i++;

            }$results = mysqli_query($this->link,$sql)or die("Loi truy van Login".mysqli_error($this->link));
            $data = [];

            if ($results) {
                while ($row = mysqli_fetch_assoc($results)) {
                    $data[] = $row;
                }
            }if ($data[0]['status']==1) {
                $_SESSION['user']=$data;
                header('location: ../index.php');
            }
        }
    }

    public function isLogin(){
        if (isset($_SESSION['user'])) {
            return true;
        }else{
            return false;
        }
    }

    public function deletesql ($table ,  $sql )
    {
        $sql = "DELETE FROM {$table} WHERE " .$sql;
            // _debug($sql);die;
        mysqli_query($this->link,$sql) or die (" Lỗi Truy Vấn delete   --- " .mysqli_error($this->link));
        return mysqli_affected_rows($this->link);
    }

    

    public function fetchAll($table , array $data)
    {
        $sql = "";
        if(count($data) > 0){
            $sql .= "SELECT * FROM {$table} WHERE ";
            foreach ($data as $key => $value) {
             $sql .= "{$key} LIKE '%{$value}%'";
         }
        }else{
        $sql .= "SELECT * FROM {$table} WHERE 1" ;
        }


            // echo $sql;
        $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
    }
    public function fetchAll1($table , array $data)
    {
        $num_per_page = 12;
        $sql = "";
        if(count($data) > 0){
            $sql .= "SELECT * FROM {$table} WHERE ";
            foreach ($data as $key => $value) {
            $sql .= "{$key} LIKE '%{$value}%'" . "limit" . $num_per_page;
        }
        
        } else {
            $sql .= "SELECT * FROM {$table} WHERE 1 limit " . $num_per_page ;
        }
        // echo $sql;
        //     die;
        $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
    }
    public function countAll($table , array $data) 
    {
        $num_per_page = 12;
        $sql = "";
        $sql .= "SELECT count(id) FROM {$table}" ;
        $result = mysqli_query($this->link,$sql);
        $result = $result->fetch_assoc();
        $data['numRecord'] = $result['count(id)'];
        $data['numPage'] = ceil($result['count(id)'] / $num_per_page);

        return $data;
    }

    public function getPage($table, array $data)
    {
        $num_per_page = 12;
        $page = $_GET['page'];
        $offset = ($page - 1) * $num_per_page;

        $sql = "";
        if(count($data) > 0){
            $sql .= "SELECT * FROM {$table} WHERE ";
            foreach ($data as $key => $value) {
                $sql .= "{$key} LIKE '%{$value}%'" . "limit ". $num_per_page . "offset" . $offset;
            }
        } else {
            $sql .= "SELECT * FROM {$table} limit " .$num_per_page . " offset " .$offset;
        }
        // echo $sql;
        // die;
        $result = mysqli_query($this->link,$sql) or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
        $data = [];
        if( $result)
        {
            while ($num = mysqli_fetch_assoc($result))
            {
                $data[] = $num;
            }
        }
        return $data;
        
    }


public function ListCanHo()
    {
        $query = "SELECT * FROM building WHERE status=0 AND style LIKE '%Căn hộ%'";
        $result = mysqli_query($this->link  , $query);
        return $result;
    }

public  function fetchJones($table,$sql,$total = 1,$page,$row ,$pagi = true )
{
    
    $data = [];

    if ($pagi == true )
    {
        $sotrang = ceil($total / $row);
        $start = ($page - 1 ) * $row ;
        $sql .= " LIMIT $start,$row ";
        $data = [ "page" => $sotrang];
        
        
        $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
    }
    else
    {
        $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
    }
    
    if( $result)
    {
        while ($num = mysqli_fetch_assoc($result))
        {
            $data[] = $num;
        }
    }
    
    return $data;
}
public  function fetchJone($table,$sql ,$page = 0,$row ,$pagi = false )
{
    
    $data = [];
            // _debug($sql);die;
    if ($pagi == true )
    {
        $total = $this->countTable($table);
        $sotrang = ceil($total / $row);
        $start = ($page - 1 ) * $row ;
        $sql .= " LIMIT $start,$row";
        $data = [ "page" => $sotrang];
        
        $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
    }
    else
    {
        $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));
    }
    
    if( $result)
    {
        while ($num = mysqli_fetch_assoc($result))
        {
            $data[] = $num;
        }
    }
            // _debug($data);
    return $data;
}


public  function fetchJoneDetail($table , $sql ,$page = 0,$total ,$pagi )
{
    $result = mysqli_query($this->link,$sql) or die("Lỗi truy vấn fetchJone ---- " .mysqli_error($this->link));

    $sotrang = ceil($total / $pagi);
    $start = ($page - 1 ) * $pagi ;
    $sql .= " LIMIT $start,$pagi";

    $result = mysqli_query($this->link , $sql);
    $data = [];
    $data = [ "page" => $sotrang];
    if( $result)
    {
        while ($num = mysqli_fetch_assoc($result))
        {
            $data[] = $num;
        }
    }
    return $data;
}

public function total($sql)
{
    $result = mysqli_query($this->link  , $sql);
    $tien = mysqli_fetch_assoc($result);
    return $tien;
}






}

?>