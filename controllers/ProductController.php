<?php
	require_once('../../models/ProductModel.php');
	class ProductController
	{

		

		public function getProduct(){
			$product = new ProductModel();
			$data = $product->getProduct();
			$this->render("listproduct", $data);
			
		}
		function render($file, $data = ""){
    	require "../../views/product/" . $file . ".php";
		}
		public function getInsert(){
			require_once('../../views/product/insertproduct.php');
			$pro_title = isset($_POST['pro_title'])? $_POST['pro_title']: '' ;
			$pro_price = isset($_POST['pro_price'])? $_POST['pro_price']: '' ;
			$pro_status = isset($_POST['pro_status'])? $_POST['pro_status']: '' ;
				if ($pro_title != '' && $pro_price != '' && $pro_status != '' ) {
						$product= new ProductModel();
						$insertproduct=$product->getInsert($pro_title,$pro_price,$pro_status);

					if ($insertproduct)
					{ 
						header("location:http://localhost/login/views/product/");
					}
					else
					{
						echo "no";
					}
				}
			}
		public function EditProduct(){
			$id = $_GET['id'];
			$product = new ProductModel();
			$data = $product->getProductId($id);
			// require_once('../../views/product/editproduct.php');
			$this->render("editproduct",$data);
			$pro_title = isset($_POST['pro_title'])? $_POST['pro_title']: '' ;
			$pro_price = isset($_POST['pro_price'])? $_POST['pro_price']: '' ;
			$pro_status = isset($_POST['pro_status'])? $_POST['pro_status']: '' ;
				if ($pro_title != '' && $pro_price != '' && $pro_status != '' ) {
					$product = new ProductModel();
					$editproduct = $product->EditProduct($pro_title,$pro_price,$pro_status,$id);
					if($editproduct){
						header("location:http://localhost/login/views/product/");
					}else{
						echo "no";
						}		
					}

		}
		public function DeleteProduct(){
			$id = $_GET['id'];
			$product = new ProductModel();
			$data = $product-> DeleteProduct($id);
			if($data){
				header("location:http://localhost/login/views/product/");
			}else{
				echo "no";
			}
		}
	
	}

 ?>