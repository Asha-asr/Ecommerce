<?php 
	/**
	 * 
	 */
	class products {
		private $productId;
		private $productName;
		private $productImage;
		private $productDescription;
		private $productPrice;
		private $createdDate;
        private $updatedDate;
		public $dbConn;

		function setproductId($productId) { $this->productId = $productId; }
		function getproductId() { return $this->productId; }
		function setproductName($productName) { $this->productName = $productName; }
		function getproductName() { return $this->productName; }
		function setproductImage($productImage) { $this->productImage = $productImage; }
		function getproductImage() { return $this->productImage; }
		function setproductDescription($productDescription) { $this->productDescription = $productDescription; }
		function getproductDescription() { return $this->productDescription; }
		function setproductPrice($productPrice) { $this->productPrice = $productPrice; }
		function getproductPrice() { return $this->productPrice; }
		function setcreatedDate($createdDate) { $this->createdDate = $createdDate; }
		function getcreatedDate() { return $this->createdDate; }
        function setupdatedDate($updatedDate) { $this->updatedDate = $updatedDate; }
		function getupdatedDate() { return $this->updatedDate; }

		public function __construct() {
            require_once ('C:\xampp\htdocs\xampp\shop\config\db.php');
            $db = new DbConnect();
			$this->dbConn = $db->connect() ;
		}

		public function getAllproducts() {
			$sql  = "SELECT * FROM products";
			$stmt = $this->dbConn->prepare($sql);
			$stmt->execute();
			$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $products;	
		}

		
	}
 ?>