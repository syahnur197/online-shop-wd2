
		<!-- Page Content -->
		<div class="container">
			<?php echo $this->session->flashdata("success"); ?>
			<div class="row">
				<div class="col-lg-3">
					<h3 class="my-4">Category</h3>
					<ul class="list-group">
						<?php foreach( $categoryData as $category ): ?>
							<li class="list-group-item">
								<a data-toggle="collapse" href="#<?= $category->category_name; ?>SubListGroup">
									<span><?= $category->category_name; ?></span>
									<?php if(count($category->subCategory) != 0): ?>
										<i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
									<?php endif; ?>
								</a>
								<div id="<?= $category->category_name; ?>SubListGroup" class="panel-collapse collapse">
									<ul class="list-unstyled">
										<?php 
											foreach( $category->subCategory as $subCat ): 
										?>
											<li class="list-group-item" style="border: none;">
												<span>
													<a href="#<?= $subCat->category_id; ?>" onclick="selectCategory(<?= $subCat->category_id; ?>, '<?= $subCat->category_name; ?>')">
														<?= $subCat->category_name; ?>
													</a>
												</span>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</li>

						<?php endforeach; ?>
					</ul>

				</div>
				<!-- /.col-lg-3 -->

				<div class="col-lg-9">
					<div id="search-bar" class=" mt-4 mb-2">
						<div class="input-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search Product..."/>
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</div>

					<div  id="content">

						<?= form_open(); ?>
						<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<?= form_close(); ?>


						<div class="row">
							<?php 
								foreach($sixProducts as $product): 
							?>
							<div class="col-lg-4 col-md-6 mb-4">
								<div class="card h-100">
									<a href="<?= base_url(); ?>index.php/Shop/product"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
									<div class="card-body">
										<h5 class="card-title">
											<a href="<?= base_url(); ?>index.php/Shop/product"><?= $product->product_name; ?></a>
										</h5>
										<h6>
											B$ <?= $product->price; ?>
										</h6>
										<p class="card-text"><?= $product->description; ?></p>
									</div>
									<div class="card-footer">
										<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
										<button class="pull-right btn btn-block btn-primary" type="button">
											<span class="fa fa-shopping-cart pull-left"></span>
											Add to cart 		
										</button>
									</div>
								</div>
							</div>
							<?php endforeach; ?>

						</div>
						<!-- /.row -->
					</div>

				</div>
				<!-- /.col-lg-9 /#content -->

			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->
<script type="text/javascript">
		window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>

    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <?php echo "<a class='btn btn-primary' href='".base_url()."index.php/Account/logout' >Logout</a>"; ?>
          </div>
        </div>
      </div>
    </div>