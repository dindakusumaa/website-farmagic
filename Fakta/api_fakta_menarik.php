<?php
require_once "connect.php";

   if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function get_fakta()
   {
      global $conn;      
      $query = $conn->query("SELECT * FROM fakta");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }   
   
   function get_fakta_id_fakta()
   {
      global $conn;
      if (!empty($_GET["id_fakta"])) {
         $id_fakta = $_GET["id_fakta"];      
      }            
      $query ="SELECT * FROM fakta WHERE id_fakta= $id_fakta";
      $result = $conn->query($query);
      while($row = mysqli_fetch_object($result))
      {
         $data[] = $row;
      }            
      if($data)
      {
      $response = array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );               
      }else {
         $response=array(
                     'status' => 0,
                     'message' =>'No Data Found'
                  );
      }
      
      header('Content-Type: application/json');
      echo json_encode($response);
       
   }
   function insert_fakta()
      {
         global $conn;   
         $check = array('id_fakta' => '', 'judul' => '', 'gambar' => '', 'isi' => '', 'id_kategori' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($conn, "INSERT INTO fakta SET
               id_fakta = '$_POST[id_fakta]',
               judul = '$_POST[judul]',
               gambar = '$_POST[gambar]',
               isi = '$_POST[isi]',
               id_kategori = '$_POST[id_kategori]'");
               
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Insert Success'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Insert Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function update_fakta()
      {
         global $conn;
         if (!empty($_GET["id_fakta"])) {
         $id_fakta = $_GET["id_fakta"];      
      }   
         $check = array('id_fakta' => '', 'judul' => '', 'gambar' => '', 'isi' => '', 'id_kategori' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($conn, "UPDATE fakta SET               
              id_fakta = '$_POST[id_fakta]',
               judul = '$_POST[judul]',
               gambar = '$_POST[gambar]',
               isi = '$_POST[isi]',
               id_kategori = '$_POST[id_kategori]' WHERE id_fakta = $id_fakta");
         
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Update Success'                  
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Update Failed'                  
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter',
                     'data'=> $id_fakta
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function delete_fakta()
   {
      global $conn;
      $id_fakta = $_GET['id_fakta'];
      $query = "DELETE FROM fakta WHERE id_fakta=".$id_fakta;
      if(mysqli_query($conn, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Delete Success'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Delete Fail.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 ?>