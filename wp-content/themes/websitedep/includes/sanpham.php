

<div class="section-content relative">
			
<div class="row" id="row-777061941">
<div class="col small-12 large-12"><div class="col-inner">
<div class="container section-title-container"><h2 class="section-title section-title-normal"><b></b><span class="section-title-main" style="font-size:95%;color:rgb(84, 140, 1);">Chậu gốm nhập khẩu</span><b></b><a href="danh-muc/chau-gom-nhap-khau/" target="">+ Xem tất cả<i class="icon-angle-right"></i></a></h2></div><!-- .section-title -->
    <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
  		<?php if($vnkings -> have_posts()) :while($vnkings -> have_posts()) :$vnkings ->the_post();?>       	
	    <div class="col">
				<div class="col-inner">				
          <div class="badge-container absolute left top z-1"></div>
						<div class="product-small box has-hover box-normal box-text-bottom">
							<div class="box-image" style="border-radius:3%;">
								<div class="image-zoom image-cover" style="padding-top:100%;">
									<a href="<?php the_permalink();?>">
										<?php the_post_thumbnail();?></a>
																		 								</div>
								<div class="image-tools top right show-on-hover"></div>
                <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
              </div><!-- box-image -->
							<div class="box-text text-center" style="padding:0px 20px 0px 30px;">
								<div class="title-wrapper">
                <p class="name product-title">
                <a href="<?php the_permalink();?>"><?php the_title();?></a></p></div>
                <div class="price-wrapper">
                  <span class="price">
                  <span class="woocommerce-Price-amount amount"><bdi> <?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?>
                  <span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
                </div>
                <div class="add-to-cart-button">
                <a href="?add-to-cart=170" rel="nofollow" data-product_id="170" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ hàng</a></div>							
              </div><!-- box-text -->
						</div><!-- box -->
					</div><!-- .col-inner -->
				</div><!-- col --> 
        <?php endwhile;endif;?> 
	    </div>
  </div>
</div>
</div>
</div>
