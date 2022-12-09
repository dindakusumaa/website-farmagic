<?php
include "connect.php";
require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing;


if(isset($_POST['save_exel_file'])){

    $fileName = $_FILES['exel_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext =['XLS','CSV','XLSX','xlsx'];
    
    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['exel_file']['tmp_name'];
        /** Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        // $data = $spreadsheet->getActiveSheet();
        // $dataArray=$data->toArray();
        // $count = '0';
        // array_shift($dataArray);
        // foreach($dataArray as $key => $row){
        //     if($count > 0){
        //         $data=$spreadsheet->getActiveSheet();
        //         $drawing = $data->getDrawingCollection()[$key] ?? null;
        //         $id_berita = $row[0];
        //         $judul= $row[1];
        //         $isi = $row[2];
        //         $id_kategori = $row[3];
        //         // baca gambar
        //         $zipReader = fopen($drawing->getPath(),'r');
        //         $imageContents ='';
        //         while (!feof($zipReader)) {
        //             $imageContents .= fread($zipReader,1024);
        //         }
        //         fclose($zipReader);
        //         $extension = $drawing->getExtension();
        //         $gambar ='gambar'.$id_berita.'.'.$extension;
        //         $dir = __DIR__."./gambar/";
        //         file_put_contents($dir.$gambar,$imageContents);
        //         // akhir baca gambar
        //         $sql = 'INSERT INTO berita(id_berita,judul,gambar,isi,id_kategori) VALUES ("'.$id_berita.'", "'.$judul.'", "'.$gambar.'"," '.$isi.'","'.$id_kategori.'")';
        //         $result = mysqli_query($conn, $sql);
        //         $psn = true;
        //     }else{
        //         $count = "1";
        //     }
            
        // }
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheetArray = $worksheet->toArray();
        array_shift($worksheetArray);
        foreach ($worksheetArray as $key => $value) {
          $worksheet = $spreadsheet->getActiveSheet();
          $drawing = $worksheet->getDrawingCollection()[$key];
          
          $zipReader = fopen($drawing->getPath(), 'r');
          $imageContents = '';
          while (!feof($zipReader)) {
            $imageContents .= fread($zipReader, 1024);
          }
          fclose($zipReader);
          $extension = $drawing->getExtension();
          $id_berita = $value[0];
          $judul= $value[1];
          $isi = $value[2];
          $id_kategori = $value[3];
          $gambar ='gambar'.$id_berita.'.'.$extension;
          $dir = __DIR__."./gambar/";
          file_put_contents($dir.$gambar,$imageContents);
          $sql = 'INSERT INTO berita(id_berita,judul,gambar,isi,id_kategori) VALUES ("'.$id_berita.'", "'.$judul.'", "'.$gambar.'"," '.$isi.'","'.$id_kategori.'")';
          $result = mysqli_query($conn, $sql);
          $psn = true;
        }
        if(isset($psn)){

            $_SESSION['pesan'] = 'Berhasil Import';
            header('Location: formadd.php');
            exit(0);
        }else{
            $_SESSION['pesan'] = 'Tidak Berhasil Import';
            header('Location: formadd.php');
            exit(0);
        }
    }else{

        $_SESSION['pesan'] = "File Tidak Sesuai";
        header('Location: formadd.php');
        exit(0);
    }
}


?>