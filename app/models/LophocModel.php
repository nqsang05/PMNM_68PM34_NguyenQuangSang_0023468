<?php
    require_once '../app/core/DB.php';
    class LophocModel {
        private $conn;
        public function __construct() {
            $this -> conn = ConnectDB::Connect();
        }

        public function getAllLophoc() {
            $query = "SELECT * FROM lophoc";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> execute();
            return $stmt -> fetchAll(PDO::FETCH_ASSOC);
        }

        public function create($malop, $tenlop, $khoahoc){
            $query = "INSERT INTO lophoc (malop, tenlop, khoahoc) VALUES (:malop, :tenlop, :khoahoc)";
            $stmt = $this -> conn -> prepare($query);
            $stmt -> bindParam(':malop', $malop);
            $stmt -> bindParam(':tenlop', $tenlop);
            $stmt -> bindParam(':khoahoc', $khoahoc);
            if($stmt -> execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function paging($limit = 5, $offset = 0, $search = "")
        {
            $query = "SELECT * FROM lophoc LIMIT :limit OFFSET :offset";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $selectAllQuery = $this->conn->query("SELECT COUNT(*) FROM lophoc");
            $totalRecords = $selectAllQuery->fetchColumn();

            $totalPages = ceil($totalRecords / $limit);

            return ['lophocs' => $result, 'totalPages' => $totalPages];
        }

        public function getLophocById($id)
        {
            $query = "SELECT * FROM lophoc WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function getLophocByMalop($malop)
        {
            $query = "SELECT * FROM lophoc WHERE malop = :malop";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':malop', $malop);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function update($id, $malop, $tenlop, $khoahoc)
        {
            $query = "UPDATE lophoc SET malop = :malop, tenlop = :tenlop, khoahoc = :khoahoc WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':malop', $malop);
            $stmt->bindParam(':tenlop', $tenlop);
            $stmt->bindParam(':khoahoc', $khoahoc);
            return $stmt->execute();
        }

        public function delete($id)
        {
            $query = "DELETE FROM lophoc WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        }
    }
?>
