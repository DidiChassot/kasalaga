<?php 
if( ! function_exists( 'charitize_content_wrapper_end' ) ) :

/**
 * Home Banner section
 *
 * @since Charitize 1.0.0
 *
 * @param null
 * @return null
 *
 */
    function charitize_content_wrapper_end(){
        echo "</div>";
    }
endif;
add_action( 'charitize_action_after_content', 'charitize_content_wrapper_end', 10 );


if ( ! function_exists( 'charitize_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function charitize_before_footer() {
        global $charitize_customizer_all_values;
        $charitize_footer_widgets_number = $charitize_customizer_all_values['charitize-footer-sidebar-number'];
        if( $charitize_footer_widgets_number <= 0 ){
            return false;
        }
        if( !is_active_sidebar( 'footer-col-one' ) && !is_active_sidebar( 'footer-col-two' ) && !is_active_sidebar( 'footer-col-three' ) ){
            return false;
        }
        if( 1 == $charitize_footer_widgets_number ){
                $col = 'col-md-12';
            }
        elseif( 2 == $charitize_footer_widgets_number ){
            $col = 'col-md-6';
        }
        elseif( 3 == $charitize_footer_widgets_number ){
            $col = 'col-md-4';
        }
        else{
            $col = 'col-md-4';
        }
        ?>
        <!-- *****************************************
             Footer before section
    ****************************************** -->
    <section class="wrapper block-section wrap-contact footer-widget">
        <div class="container overhidden">
            <div class="contact-inner evision-animate fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php if( is_active_sidebar( 'footer-col-one' ) && $charitize_footer_widgets_number > 0 ) : ?>
                                <div class="contact-list <?php echo esc_attr( $col );?>">
                                    <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( is_active_sidebar( 'footer-col-two' ) && $charitize_footer_widgets_number > 1 ) : ?>
                                <div class="contact-list <?php echo esc_attr( $col );?>">
                                    <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                </div>
                            <?php endif; ?>
                            <?php if( is_active_sidebar( 'footer-col-three' ) && $charitize_footer_widgets_number > 2 ) : ?>
                                <div class="contact-list <?php echo esc_attr( $col );?>">
                                    <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- *****************************************
                 Footer before section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'charitize_action_before_footer', 'charitize_before_footer', 10 );


if ( ! function_exists( 'charitize_footer' ) ) :
    /**
     * Footer content
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_footer() {
        global $charitize_customizer_all_values;
        ?>
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
        <footer id="colophon" class="wrapper evision-wrapper site-footer" role="contentinfo">
            <div class="container">
                
                <div class="footer-bottom">
                    <span class="copyright">
                        L’Association des Amis de Kasalaga<br>
Case postale 102<br>
1726 Posieux
                    </span>
                    <?php
                        if( 1 == $charitize_customizer_all_values['charitize-enable-theme-name']){
                            ?>
                        <span class="site-info">
                          mail: kasalagafriends@bluewin.ch
                        </span><!-- .site-info -->
                    <?php
                        }
                    ?>
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
                </div>
            </div>
            <div id="don">
              <a href="nous-soutenir">&nbsp;</a>
            </div>
        </footer><!-- #colophon -->
        <!-- *****************************************
                 Footer section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'charitize_action_footer', 'charitize_footer', 10 );

if ( ! function_exists( 'charitize_page_end' ) ) :
    /**
     * Page end
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_page_end() {
        global $charitize_customizer_all_values;
        if(1 == $charitize_customizer_all_values['charitize-enable-back-to-top']) {
        ?>
            <!--<a id="gotop" class="evision-back-to-top" href="#top"><i class="fa fa-angle-up"></i></a>-->
        <?php
        }
        ?>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'charitize_action_after', 'charitize_page_end', 10 );