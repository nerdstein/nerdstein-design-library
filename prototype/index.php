<?php 
include_once('header.php');
?>

<div class="container">
	<div style="margin-top: 40px"></div>

	<div class="row">

		<!-- for main content !-->
		<div class="col-sm-9">
			
			<!--post with image !-->
			<div class="row">
				<div class="col-sm-12">

					<!-- each post summary, you can loop this!-->
					<div class="underline">
						<span class="highlight-title">TECH</span>
						<span class="highlight-title">PEOPLE</span>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<img src="files/img/b.jpg" class="img-responsive"><br>
						</div>

						<div class="col-sm-8">
							<div class="post-summary-title">
								<a href="">Pseudo-classes – The Basics</a>
							</div>

							<p class="post-summary-content">
								While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant. <a href="" class="text-success"> Read more... </a>

								<div class="posted text-right">
									Posted on January 5, 2017
								</div>
							</p>
						</div>
					</div>

					<div class="underline">
						<span class="highlight-title">TECH</span>
						<span class="highlight-title">TECH</span>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<img src="files/img/a.jpg" class="img-responsive"><br>
						</div>

						<div class="col-sm-8">
							<div class="post-summary-title">
								<a href="">Pseudo-classes – The Basics</a>
							</div>

							<p class="post-summary-content">
								While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant. <a href="" class="text-success"> Read more... </a>

								<div class="posted text-right">
									Posted on January 5, 2017
								</div>
							</p>
						</div>
					</div>
				</div>

			</div>
			<!-- post with image ends --!>

			<!-- post WITHOUT IMAGE STARTS !-->
			<div class="row">
				
				<div class="col-sm-12">
					<!-- you can loop this too !-->
					<div class="underline">
						<span class="highlight-title">TUTORIAL</span>
					</div>

					<div class="post-summary-title">
						<a href="">Pseudo-classes – The Basics</a>
					</div>

					<p class="post-summary-content">
						While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant. <a href="" class="text-success"> Read more... </a>

						<div class="posted text-right">
							Posted on January 5, 2017
						</div>
					</p>

				</div>

				<div class="col-sm-12">
					<!-- you can loop this too !-->
					<div class="underline">
						<span class="highlight-title">TUTORIAL</span>
					</div>
					
					<div class="post-summary-title">
						<a href="">Pseudo-classes – The Basics</a>
					</div>

					<p class="post-summary-content">
						While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant. <a href="" class="text-success"> Read more... </a>

						<div class="posted text-right">
							Posted on January 5, 2017
						</div>
					</p>

				</div>

			</div>
			<!--post WITHOUT IMAGE ENDS !-->

			<!--pagination !-->
			<div class="text-center">
				<div class="pagination">
					<a href="#">&laquo;</a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a href="#">&raquo;</a>
				</div>
			</div>
			<!-- pagination ends !-->
		</div>
		<!-- main content ends !-->

		<!-- sidebar starts !-->
		<div class="col-sm-3">

			<div class="row">

				<!-- for categories list sidebar section !-->
				<div class="col-sm-12">
					<div class="highlight-title">CATEGORIES</div>
					
					<div class="sidebar-content">
						<a href="">Tech</a><hr>
						<a href="">News</a><hr>
						<a href="">Tutorials</a><hr>
						<a href="">Sports</a>
					</div>

				</div>
				<!-- for categories list sidebar section ends !-->

				<!-- for rss subscription sidebar section !-->
				<div class="col-sm-12">
					<div class="highlight-title">RSS FEED</div>

					<div class="sidebar-content">

						Subscribe to our RSS feed today and be the first to
						get new updates<br><br>

						<div class="row">
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Subscribe</button>
									</span>
								</div><!-- /input-group -->
							</div><!-- /.col-sm-6 -->		
						</div>				

					</div>
				</div>
				<!-- for rss subscription sidebar section ends !-->

			</div>

		</div>
		<!-- sidebar ends !-->

	</div>
</div>

<?php 
include_once('footer.php');
?>