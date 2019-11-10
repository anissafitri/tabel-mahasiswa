<?php
class Mahasiswa {
    var $mongo;
    var $db;
    var $table;

    public function __construct() {
        try {
            //Connect to Mongo
            $this -> mongo = new mongo('127.0.0.1:27017');

            $this -> db = $this -> mongo -> selectDB('mahasiswa');

            $tableName = 'mahasiswa';
            $this -> table = $this -> db -> $tableName;
        } catch(Exception $e) {
            echo "Something Went Wrong.";
            exit();
        }
    }

    public function createMahasiswa() {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];

        $insert = array("nim" => $nim, "nama" => $nama);
        $this -> table -> insert($insert);
    }

    //Update User
    public function updateMahasiswa($nim) {

        $query = array('nim' => $nim);

        //Get the existing info of the user
        $amahasiswaInfo = $this -> table -> findOne($query);

        //Assign New Values
        $amahasiswaInfo['nim'] = $_POST['nim'];
        $amahasiswaInfo['nama'] = $_POST['nama'];

        //Update the User Info
        $this -> table -> save($amahasiswaInfo);
    }

    //Get All Users
    function getMahasiswa($limit = '10') {
        $users = $this -> table -> find() -> limit($limit);

        return $users;
    }

    //Get All Users
    function getListMahasiswa() {
        $users = $this -> table -> find() -> limit($limit);

        return $users;
    }

    //Getting selected user info by  nim
    function getMahasiswaByNama($nim) {
        $query = array('nim' => $nim);

        $amahasiswaInfo = $this -> table -> findOne($query);

        return $amahasiswaInfo;
    }

    function deleteMahasiswa($nim) {
        $this -> table ->remove(array('nim'=> $nim));
    }

}
?>