<?php
include_once('header.php');
?>

<div class="container">
	<div class="row">
		<!--for blog post !-->
		<div class="col-sm-9">
			<div class="post-cat">
				<span class="highlight-post-cat">TECH </span> <span class="highlight-post-cat"> PEOPLE </span>
			</div>

			<div class="post-title">Pseudo-classes – The Basics</div>

			<div class="posted">Posted on January 5, 2017</div><br>

			<div class="post-content">

				For better accessibility, add :focus wherever you include :hover as not all visitors will use a mouse to navigate your site.<br><br>

				:hover can apply to any element on the page not just links and form controls.

				:focus and :active are relevant to links, form controls, content editable elements, and any element with a tabindex attribute.<br><br>

				While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant.<br><br>

				The following pseudo-classes match elements based on attributes, user interaction, and form control state:

				:enabled
				A user interface element that’s enabled, which is basically any form control that supports the disabled attribute but doesn’t currently have it applied.<br><br>


			</div>

			<div class="post-author">
				<h2 class="text-center">About Author</h2><br>

				<div class="row">
					<div class="col-sm-3">
						<img src="files/img/mark.png" width="200" class="img-responsive"><br>
					</div>

					<div class="col-sm-9">
						<h4><strong>Mark Zuckerberg</strong></h4>

						While it’s likely you’ve been using these basic pseudo-classes for some time, there are many others available. Several of these pseudo-classes have been in the specification for years, but weren’t supported (or commonly known) until browsers started supporting the new HTML5 form attributes that made them more relevant.
					</div>
				</div>
			</div>
		</div>
		<!--for blog post ends !-->

		<!--for sidebar !-->
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
		<!--for sidebar ends !-->

	</div>
</div>

<?php 
include_once('footer.php');
?>