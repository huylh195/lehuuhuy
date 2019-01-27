<?php
require_once('DbModel.php');
class ProductModel extends DbModel{

	public function getProduct()
	{ 
		$con = $this->connect();
	
		$sql= "SELECT * FROM `tbl_products`";
		$query= $con->query($sql);
		$data= mysqli_fetch_all($query);
		// print_r($data);
		// die();
		return $data;

	}
			public function getProductId($id)
			{ 
					$con = $this->connect();
					$sql= "SELECT * FROM `tbl_products` WHERE pro_id = $id";
					$query= $con->query($sql);
					$data= mysqli_fetch_array($query);
		// print_r($data);
		// die();
					return $data;

			}
					public function getinsert($pro_title,$pro_price,$pro_status)
					{
							$con= $this->connect();
							$sql= "INSERT INTO `tbl_products`(pro_title, pro_price, pro_status) VALUES ('$pro_title','$pro_price','$pro_status')";
							$query=$con->query($sql);
							return $query;

					}
							public function EditProduct($pro_title,$pro_price,$pro_status,$id)
							{
									$con = $this->connect();
									$sql = "UPDATE `tbl_products` SET `pro_title`= '$pro_title',`pro_price`='$pro_price',`pro_status`=$pro_status WHERE pro_id='$id'";
									$query = $con->query($sql);
									return $query;
							}	
									public function DeleteProduct($id)
									{
												$con = $this->connect();
												$sql= "DELETE FROM `tbl_products` WHERE pro_id= $id";
												$query= $con->query($sql);
												return $query;
									}
}
?>