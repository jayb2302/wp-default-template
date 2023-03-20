<?php
/**
 * Template Name: Front Page
 */
get_header( );
?>

<div id="primary" class="content-area">
    <main id="main" class="site-area">
        <!-- <nav>
            <div class="logo">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                ?>
            </div>
            <div class="menu">
            <?php
                  wp_nav_menu( 
                    array(
                        'theme_location' => 'my-custom-menu',
                        'container_class' => 'custom-menu-class'
                    )
                );
        
            ?>
            </div>
            <div class="search-nav">
                <?php
                    get_search_form(  );
                ?>
            </div>
        </nav> -->
    <div id="section1" class="sections-style">
        <div id="textbox1" class="textboxes">
            
                
        </div> 
        <div id="textbox2" class="textboxes">
            <h1>Welcome</h1>
            <p> Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                <button class="start-button">Start</button>
                <button class="portofolio-button">Portofolio</button>
        </div>
    </div>
        <div id="section2" class="sections-style">
        <div id="aboutme" >
            <h1>About Me</h1>
            <p> Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown 
                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
               
                
        </div>
       
        </div>
    <div id="section3" class="sections-style">
        <div id="buttonbox">
        <button class="start-button">Start</button>
        <button class="portofolio-button">Portofolio</button>  
          
        </div> 
        <div id="picturebox">
            <img src="https://cdn.pixabay.com/photo/2016/01/09/18/27/camera-1130731_1280.jpg" alt="" class="images">
            <img src="https://cdn.pixabay.com/photo/2016/01/09/18/27/camera-1130731_1280.jpg" alt="" class="images">

        </div>
    </div>
    </main>
</div>

<?php 
get_footer();
?>