<div id="toc-woocommerce-recently-viewed" class="toc-id"></div>
    <h3 id="woocommerce-recently-viewed"><?php _e( 'WooCommerce Recently Viewed' ); ?></h3>

    <p><?php _e( 'This widget displays a list of recently viewed products.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/woocommerce-recent-views.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

    <ul class="marked-list">
        <li>
            <dl class="inline-term">
                <dt><?php _e( 'title' ); ?></dt>
                <dd>
                    <?php _e( 'this property specifies the widget title;' ); ?>
                </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt><?php _e( 'number of reviews to show' ); ?></dt>
                <dd>
                    <?php _e( 'specify the number of displayed products.' ); ?>
                </dd>
            </dl>
        </li>
    </ul>
