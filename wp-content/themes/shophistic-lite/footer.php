        <div class="footer_wrap ">


                <footer id="footer" class="container">
                    
                           <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>Yên VI</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Tivi</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Tablet</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Đăng kí nhận tin mới!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập email">
                                <input type="submit" value="Đăng kí ngay">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</footer>
                    
                    <div class="sub_footer">
                            
                        <p>
                        <?php esc_html_e( 'Powered by ', 'shophistic-lite' ); ?><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shophistic-lite' ) ); ?>"><?php esc_html_e( 'WordPress', 'shophistic-lite' ); ?></a>. <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shophistic-lite' ), 'Shophistic Lite', '<a href="https://www.quemalabs.com/" rel="designer">Quema Labs</a>' ); ?>
                        </p>

                        <?php get_template_part( '/templates/menu', 'social' ); ?>
                           
                        <div class="clearfix"></div>
                    </div><!-- /sub_footer -->
               


            <div class="clearfix"></div>
                
        </div><!-- /footer_wrap -->

        </div><!-- /wrap -->

    
        
    <!-- WP_Footer --> 
    <?php wp_footer(); ?>
    <!-- /WP_Footer --> 

      
    </body>
</html>