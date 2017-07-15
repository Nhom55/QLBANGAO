<?php
/*
Template name: Trang Chủ
*/get_header();?>
    <!-- gọi từ file header -->
<content id="content">
	<div class="row container-fluid">
	     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	     	 <?php get_sidebar(); ?>
	     </div>
	<!-- gọi từ file sidebar -->
		<div class="products col-xs-9 col-sm-9 col-md-9 col-lg-9">
		    <h2 class="sanphamnoibat">SẢN PHẨM NỔI BẬT </h2><hr>
		    <div class="row">
			    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			        <ul>	
						<?php
							$args = array(
							'post_type'=>'product',
							'post_status'=>'publish',
							'tax_query' => array(
							      array(
							          'taxonomy' => 'product_cat',
							          'field' => 'id',
							          'terms' => '15',
							      )
							  ),
							'posts_per_page'=> '12',
							);
 
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
						   		while ( $loop->have_posts() ) : $loop->the_post();
						    		woocommerce_get_template_part( 'content', 'product' );
						    	endwhile;
							  } else {
							   echo __( 'No products found' );
							  }
							  wp_reset_postdata();
						?>	
					</ul> 
			    </div>
	<!--  gọi từ danh mục sản phẩm trong wordpress -->
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				    <ul>
				         <?php
								$args = array(
								'post_type'=>'product',
								'post_status'=>'publish',
								'tax_query' => array(
								      array(
								          'taxonomy' => 'product_cat',
								          'field' => 'id',
								          'terms' => '17',
								      )
								  ),
								'posts_per_page'=> '12',
								);
	 
								$loop = new WP_Query( $args );
								if ( $loop->have_posts() ) {
							   		while ( $loop->have_posts() ) : $loop->the_post();
							    		woocommerce_get_template_part( 'content', 'product' );
							    	endwhile;
								  } else {
								   echo __( 'No products found' );
								  }
								  wp_reset_postdata();
							?>	
					</ul>
			    </div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<ul>
						<?php
							$args = array(
							'post_type'=>'product',
							'post_status'=>'publish',
							'tax_query' => array(
							      array(
							          'taxonomy' => 'product_cat',
							          'field' => 'id',
							          'terms' => '18',
							      )
							  ),
							'posts_per_page'=> '12',
							);
 
							$loop = new WP_Query( $args );
							if ( $loop->have_posts() ) {
						   		while ( $loop->have_posts() ) : $loop->the_post();
						    		woocommerce_get_template_part( 'content', 'product' );
						    	endwhile;
							  } else {
							   echo __( 'No products found' );
							  }
							  wp_reset_postdata();
						?>	
				    </ul> 
			    </div>
		    </div>
		</div>
	</div> 
</content>


<?php 
get_footer();
/*gọi file footer*/