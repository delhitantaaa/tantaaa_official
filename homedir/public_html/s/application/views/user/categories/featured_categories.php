
<section>
		<div class="block gray less-top less-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="breadcrumb-title">
							<h2>Categories</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<ul class="breadcrumbs">
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a>Categories</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block remove-top">
			<div class="container">
						<div class="ml-filterbar clearfix s2">
							
							<h3>Results Found</h3>
						</div>
                        <!-- Categories Starts -->						
                        <div class="catsec">
							<div class="row" id="dataList">

								<?php
								if(!empty($featured_category))
								{
									foreach ($featured_category as $crows) {
								
										?>
								<div class="col-lg-4 col-md-6">
								<a href="<?php echo base_url();?>search/<?php echo str_replace(' ', '-', $crows['category_name']);?>">
									<div class="cate-widget">
										<img src="<?php echo base_url().$crows['category_image'];?>" alt="">
										<div class="cate-title">
											<h3><span><i class="fas fa-circle"></i> <?php echo ucfirst($crows['category_name']);?></span></h3>
										</div>
                                        <div class="cate-count">
                                        	<i class="fas fa-clone"></i> <?php echo $crows['category_count'];?>
                                        </div>
									</div></a>
								</div>
							<?php } }
							else { 
							
								echo '<div class="col-lg-12">
									<div class="category">
										No Categories Found
									</div>
								</div>';
							 } 
							  
							 if(isset($pagination[1]) && !empty($pagination[1]))
							 {
							 	echo $pagination[1];
							 }
							  ?>

                         
						
								
								
							</div>
						</div>
                        <!-- Categories Ends -->


						
				</div>
		</div>
	</section>