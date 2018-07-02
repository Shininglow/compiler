<article id="cherry-services-list">
	<div id="toc-cherry-services-list" class="toc-id"></div>
	<h3 id="cherry-services-list"><?php _e( 'Cherry Services List' ); ?></h3>

<p>
<?php printf( _( '%1$sCherry Services List%2$s'), '<a href="https://wordpress.org/plugins/cherry-services-list/" target="_blank">', '</a>'); ?> <?php _e( 'can be useful for any business website whether it is large or small. It will help you to list all services you provide in an attractive and structured way. Thanks to a number of options and settings the plugin can be customized in accordance with the style and specification of your business. ' ); ?>

<?php _e( 'The plugin adds a custom post type named <strong>Services</strong>, which you can use to display what your company offers in a professional way.' ); ?>
</p>

<pre class="unstyled" style= "width:900px; height:450px"; >
<?php assets_manager()->get_image( 'assets/images/services1.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<p>
    <?php _e( 'Before integrating the plugin into your theme you need to make several minor adjustments to avoid problems with layout. So, follow the instructions listed below:'); ?>
</p>
<h4><?php _e( 'Installation' ); ?></h4>

                   <p> <?php _e( '1. Create <strong>cherry-services</strong> folder in the <strong>root</strong> folder of your theme.'); ?></p>

                    <p><?php _e( '2. Copy <strong>archive-services.php</strong> and <strong>single-services.php</strong> files from the <strong>templates</strong> folder of the plugin to the <strong>cherry-services</strong> folder.' ); ?></p>

                    <p><?php _e( '3. Open each of the copied files and delete function calls <strong>get_header(services)</strong>; and <strong>get_footer(services)</strong>.' ); ?></p>



<h4><?php _e( 'Adding new post' ); ?></h4>
<p>
<?php _e( 'To create a new post you need to click an Add New button in the Properties tab. On the new page you need to enter the title and text of the new property. ' ); ?>
</p>

<p>
    <?php _e( 'Now proceed to the box below. Here you need to specify:' ); ?>
</p>
<pre class="unstyled" style= "width:900px; height:140px"; >
<?php assets_manager()->get_image( 'assets/images/services2.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<article>
    <ul class="marked-list">
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'state of progress' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'state of progress of the property;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'price' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'enter the price;'); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'property status' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'specify the property status (sale or rent);' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'location' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'specify the location of the apartment or office;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'bedrooms ' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'choose the number of bedrooms;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'bathrooms' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'choose the number of bathrooms;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'area ' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'specify the  area of the object;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'parking places ' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'specify the number of parking places;' ); ?>
                    </dd>
            </dl>
        </li>
        <li>
            <dl class="inline-term">
                <dt>
                    <?php _e( 'gallery' ); ?>
                </dt>
                    <dd>
                        <?php _e( 'add photos of the apartment or office.' ); ?>
                    </dd>
            </dl>
        </li>
    </ul>

</article>
