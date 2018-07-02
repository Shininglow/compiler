<div id="toc-pages" class="toc-id"></div>
    <h3 id="pages"><?php _e( 'Pages' ); ?></h3>

	<p><?php _e( 'This widget displays a full list of pages of your site.' ); ?></p>

<figure class="img-preview" style= "width:900px";><img src="<?php url_manager()->get_assets_url( 'assets/images/temp/pages.png' ); ?>" alt="<?php _e( 'About' ); ?>"></figure>

	<ul class="marked-list">
        <li>
            <dl class="inline-term">
                <dt> <?php _e( 'title' ); ?></dt>
                <dd>
    				<?php _e( 'this property specifies the widget title;' ); ?>
                </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt><?php _e( 'sort by' ); ?></dt>
                <dd>
                    <?php _e( 'this option allows to sort the pages by page title, page order or page ID;' ); ?>
                </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt><?php _e( 'exclude' ); ?></dt>
                <dd>
                    <?php _e( 'specify the IDs of the pages you want to exclude.' ); ?>
                </dd>
            </dl>
        </li>
    </ul>
