<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

 <div class="main">
    <div class="content">
    	<?php
	     	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			        $tukhoa = $_POST['tukhoa'];
			        $search_product = $product->search_product($tukhoa);    
			    }
	      	?>
    	<div class="content_top">
    		<div class="heading">	
    		<h3>Từ khóa tìm kiếm : <?php echo $tukhoa ?></h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php
	      	 if($search_product){
	      	 	while($result = $search_product->fetch_assoc()){
	      	?>
				<div class="grid_1_of_4 images_1_of_4" style="height: 360px;margin-left: 30px;">
					 <img style="width: 165px;height: 165px;" src="admin/uploads/<?php echo $result['image'] ?>" width="200px" alt="" />
					 <h2 style="font-size: 25px;color: #000;"><?php echo $result['productName'] ?></h2>
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></span></p>
				     <div class="button">
						 <span>
							 <a  href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Details</a>
							</span>
						</div>
				</div>
			<?php
			}

		}else{
			echo 'Category Not Avaiable';
		}
		?>
		</div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>