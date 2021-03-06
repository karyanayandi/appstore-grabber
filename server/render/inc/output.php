<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="style.css?<?php echo rand() ?>">
		<script src="app.js?<?php echo rand() ?>"></script>

		<title><?php echo $grabber->app->trackCensoredName ?></title>
	</head>

	<body<?php if ( isset( $_GET['full'] ) ) : ?> class="preview"<?php endif; ?>>
		<section id="header">
			<ul>
				<li class="icon">
					<img src="<?php echo $grabber->app->artworkUrl512 ?>" alt="App Icon" width="118" height="118">
				</li>
				<li class="app-detail">
					<h1><?php echo $grabber->app->trackCensoredName ?></h1>
					<p class="promo-line"><?php echo ( empty( $grabber->app->tagline ) ) ? $grabber->app->artistName : $grabber->app->tagline ?></p>
					
					<ul class="action-buttons">
						<li class="get"><a href="<?php echo $grabber->app->trackViewUrl ?>" class="get-button">GET</a></li>
						<li class="share"><a href="" class="share-button"></a></li>
					</p>
				</li>
			</ul>
		</section>

		<section id="ratings-overview">
			<ul class="ratings">
				<li>
					<h2><?php echo number_format($grabber->app->rating, 1) ?></h2>

					<div class="stars">
						<div class="rating-back" style="width: <?php echo ( floatval($grabber->app->rating) * 20 ) ?>%"></div>
						<img src="images/stars.png" height="17" />
					</div>
				</li>
				<li><?php echo $grabber->app->ratings_count ?> Ratings</li>
			</ul>

			<ul class="age">
				<li><h2><?php echo $grabber->app->contentAdvisoryRating ?></h2></li>
				<li>Age</li>
			</ul>
		</section>

		<section id="whats-new">
			<ul>
				<li><h2>What's New</h2></li>
				<li>Version <?php echo $grabber->app->version ?></li>
			</ul>

			<ul class="versioning">
				<li><a href="">Version History</a></li>
				<li>5d ago</li>
			</ul>

			<div class="desc">
				<p><?php echo str_replace( "\n", '<br>', $grabber->app->releaseNotes ) ?></p>
				<a href="" class="more">more</a>
			</div>
		</section>

		<section id="preview">
			<h2>Preview</h2>

			<ul>
				<?php foreach( (array)$grabber->app->screenshotUrls as $screenshotUrl ) { ?>
				<li><img src="<?php echo $screenshotUrl ?>" alt="screenshot" height="390"></li>
				<?php } ?>
			</ul>

			<?php if ( !empty($grabber->app->ipadScreenshotUrls ) ) { ?>
			<div class="ipad-preview">
				<p class="device-name">
					<img src="images/iphone-icon.png" alt="device-iphone" width="10" height="16"> 
					iPhone
				</p>

				<ul>
					<?php foreach( (array)$grabber->app->ipadScreenshotUrls as $screenshotUrl ) { ?>
					<li><img src="<?php echo $screenshotUrl ?>" alt="screenshot" height="390"></li>
					<?php } ?>
				</ul> 
				<?php } ?> 
			</div>   
		</section>

		<section id="device-compat"<?php if ( !empty($grabber->app->ipadScreenshotUrls ) ) { ?> class="has-ipad"<?php } ?>>
			<ul>
				<?php if ( !empty($grabber->app->ipadScreenshotUrls ) ) { ?>
					<li><img src="images/iphone-icon.png" alt="device-iphone" width="10" height="16"></li>
					<li>Offers iPad App</li>
				<?php } else { ?>
					<li><img src="images/iphone-icon.png" alt="device-iphone" width="10" height="16"></li>
					<li>iPhone</li>
				<?php } ?>
			</ul>
		</section>

		<section id="description">
			<p><?php echo str_replace( "\n", '<br>', $grabber->app->description ) ?></p>

			<a href="" class="more">more</a>
		</section>

		<section id="developer">
			<ul>
				<li><a href=""><?php echo $grabber->app->artistName ?></a></li>
				<li>Developer</li>  
			</ul>
		</section>

		<section id="ratings-reviews">
			<ul class="heading">
				<li><h2>Ratings &amp; Reviews</h2></li>
				<li><a href="">See All</a></li>
			</ul>

			<div class="ratings">
				<ul class="rating">
					<li><?php echo number_format($grabber->app->rating, 1) ?></li>
					<li>out of 5</li>
				</ul>

				<ul class="rating-totals">
					<li>
						<ul>
							<li class="stars">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
							</li>
							<li class="total five-stars">
								<div>
									<div class="barfront" style="width: <?php echo $grabber->app->ratings_bar_sizes[0] ?>;"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="stars">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
							</li>
							<li class="total four-stars">
								<div class="barback">
									<div class="barfront" style="width: <?php echo $grabber->app->ratings_bar_sizes[1] ?>;"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="stars">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
							</li>
							<li class="total three-stars">
								<div class="barback">
									<div class="barfront" style="width: <?php echo $grabber->app->ratings_bar_sizes[2] ?>;"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="stars">
								<img src="images/stars/full.png" width="6" height="6">
								<img src="images/stars/full.png" width="6" height="6">
							</li>
							<li class="total two-stars">
								<div class="barback">
									<div class="barfront" style="width: <?php echo $grabber->app->ratings_bar_sizes[3] ?>;"></div>
								</div>
							</li>
						</ul>
					</li>
					<li>
						<ul>
							<li class="stars">
								<img src="images/stars/full.png" width="6" height="6">
							</li>
							<li class="total one-star">
								<div class="barback">
									<div class="barfront" style="width: <?php echo $grabber->app->ratings_bar_sizes[4] ?>;"></div>
								</div>
							</li>
						</ul>
					</li>

					<li><?php echo $grabber->app->ratings_count ?> Ratings</li>
				</ul>
			</div>
		</section>

		<section id="leave-rating">
			<ul class="tap-rate">
				<li>Tap to Rate:</li>
				<li>
					<img src="images/rate-star.png" width="24" height="23">
					<img src="images/rate-star.png" width="24" height="23">
					<img src="images/rate-star.png" width="24" height="23">
					<img src="images/rate-star.png" width="24" height="23">
					<img src="images/rate-star.png" width="24" height="23">
				</li>
			</ul>

			<ul class="links">
				<li><a href="">Write a Review</a></li>
				<li><a href="">App Support</a></li>
			</ul>
		</section>

		<section id="information">
			<h2>Information</h2>

			<ul>
				<li>
					<h3>Seller</h3>
					<p><?php echo $grabber->app->artistName ?></p>
				</li>
				<li>
					<h3>Size</h3>
					<p><?php echo formatBytes($grabber->app->fileSizeBytes, 1) ?></p>
				</li>
				<li>
					<h3>Category</h3>
					<p><?php echo $grabber->app->primaryGenreName ?></p>
				</li>
				<li>
					<h3>Compatibility</h3>
					<p>Works on this Device</p>
				</li>
				<li>
					<h3>Languages</h3>
					<p>English<?php if ( count($grabber->app->languageCodesISO2A) > 1 ) { ?> and <?php echo count($grabber->app->languageCodesISO2A) - 1 ?> more<?php } ?></p>
				</li>
				<li>
					<h3>Age Rating</h3>
					<p><?php echo $grabber->app->contentAdvisoryRating ?></p>
				</li>
				<li>
					<h3>Copyright</h3>
					<p>&copy; <?php echo $grabber->app->artistName ?></p>
				</li>
				<li>
					<h3><a href="<?php echo $grabber->app->sellerUrl ?>">Developer Website</a></h3>
					<p><a href="<?php echo $grabber->app->sellerUrl ?>"><img src="images/website.png" height="15" alt="Website"></a></p>
				</li>
				<li>
					<h3><a href="<?php echo $grabber->app->sellerUrl ?>">Privacy Policy</a></h3>
					<p><a href="<?php echo $grabber->app->sellerUrl ?>"><img src="images/privacy.png" height="15" alt="Privacy"></a></p>
				</li>
				<li>
					<h3><a href="<?php echo $grabber->app->sellerUrl ?>">License Agreement</a></h3>
					<p><a href="<?php echo $grabber->app->sellerUrl ?>"><img src="images/license.png" height="15" alt="License"></a></p>
				</li>
			</ul>
		</section>

		<section id="scroll-header">
			<img src="<?php echo $grabber->app->artworkUrl100 ?>" alt="App Icon" width="28" height="28">
			<a href="<?php echo $grabber->app->trackViewUrl ?>" class="get-button">GET</a>
		</section>

		<footer></footer>
	</body>
</html>