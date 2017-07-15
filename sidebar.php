<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bignet
 */




if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;

}

?>
				
<?php dynamic_sidebar( 'sidebar' ); ?> 
<!-- câu lệnh gọi sidebar trong wordpress -->

<!-- thêm một chức năng bảng giá gạo  -->
<div class="box_video">
   <div class="box_right_group hidden-xs hidden-sm">
		<div class="title_box_right_group"><i class="fa fa-heart-o" aria-hidden="true"></i>BẢNG GIÁ GẠO </div>
			<div class="inner_right_group">
				<div id=" frame_video" >
				 	<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<p>Loại gạo</p>
							<hr>
							<p>Trân Châu</p>
							<hr>
							<p>Bắc Hương</p>
							<hr>
							<p>Lài Sữa</p>
							<hr>
							<p>Nàng Xuân</p>
							<hr>
							<p>Nếp Cái HV</p>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							  <p>Giá / Kg</p>
							  <hr>		
							  <p class="gia">24 200</p>
							  <hr>	
							  <p class="gia">15 200</p>
							  <hr>	
							  <p class="gia">19 800</p>
							  <hr>	
							  <p class="gia">22 000</p>
							  <hr>	
							  <p class="gia">24 000</p>
						</div>
					</div>
				</div>
			</div>
			<div class="luuy">
				<p class="mau">Lưu ý : bảng giá trên làm giá tham khảo Quý vị mua gạo xin hãy gọi điện trưc tiếp các điểm bán gạo để được cung cấp báo giá mới nhất.</p>
		   </div>
	</div>
</div>
<div>
<h3 class="dathang"><i class="fa fa-heart-o" aria-hidden="true"></i>ĐẶT HÀNG</h3>
<?php echo do_shortcode( '[contact-form-7 id="104" title="Đặt Hàng"]' ); ?>
<!-- câu lệnh gọi contact from7 trong wordpress -->
	
</div>
