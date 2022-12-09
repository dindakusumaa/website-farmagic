<?php
require_once "connect.php";
   if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function get_berita()
   {
      global $conn;      
      $query = $conn->query("SELECT * FROM berita");            
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
   
   function get_berita_id()
   {
      global $conn;
      if (!empty($_GET["id_berita"])) {
         $id_berita = $_GET["id_berita"];      
      }            
      $query ="SELECT * FROM berita WHERE id_berita = $id_berita";      
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
   function insert_berita()
      {
         global $conn;   
         $check = array('id_berita' => '', 'judul' => '', 'gambar' => '', 'isi' => '', 'id_kategori' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($conn, "INSERT INTO berita SET
               id_berita = '$_POST[id_berita]',
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
                     'check' => count($check),
                     'check match' => $check_match,
                     'status' => 0,
                     'message' =>'Wrong Parameter'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function update_berita()
      {
         global $conn;
         if (!empty($_GET["id_berita"])) {
         $id_berita = $_GET["id_berita"];      
      }   
         $check = array('judul' => '', 'gambar' => '', 'isi' => '', 'id_kategori' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($conn, "UPDATE berita SET               
               judul = '$_POST[judul]',
               gambar = '$_POST[gambar]',
               isi = '$_POST[isi]',
               id_kategori = '$_POST[id_kategori]' WHERE id_berita = $id_berita");
         
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
                     'data'=> $id_berita
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function delete_berita()
   {
      global $conn;
      $id_berita = $_GET['id_berita'];
      $query = "DELETE FROM berita WHERE id_berita=".$id_berita;
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