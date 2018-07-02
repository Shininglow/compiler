<div id="toc-color-scheme" class="toc-id"></div>
<h3 id="color-scheme"><?php _e( 'Color Scheme' ); ?></h3>
<p><?php _e( 'Here you can set up site color scheme.' ); ?></p>

<?php
	get_customizer_sub_component(
		array(
			'regular-scheme',
		)
	);
?>
<ul>
	<?php
		get_customizer_sub_component(
			array(
				'regular-accent-color-1',
				'regular-accent-color-2',
                'regular-text-color',
				'regular-link-color',
				'regular-link-hover-color',
				'regular-h1-color',
				'regular-h2-color',
				'regular-h3-color',
				'regular-h4-color',
				'regular-h5-color',
				'regular-h6-color',
			)
		);
	?>
</ul>
<?php
	get_customizer_sub_component(
		array(
			'invert-scheme',
		)
	);
?>
<ul>
	<?php
		get_customizer_sub_component(
			array(
				'invert-accent-color-1',
                'invert-accent-color-2',
                'invert-text-color',
				'invert-link-color',
				'invert-link-hover-color',
				'invert-h1-color',
				'invert-h2-color',
				'invert-h3-color',
				'invert-h4-color',
				'invert-h5-color',
				'invert-h6-color',
			)
		);
	?>
</ul>


<h5><?php _e( 'Regular Scheme' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
     
</ul>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the text;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link hover color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links on hover;' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H1 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H1 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H2 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H2 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H3 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H3 title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H4 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H4 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H5 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H5 title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H6 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H6 title.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h5><?php _e( 'Invert Scheme' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
   
   
  
</ul>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the text;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'link hover color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links on hover;' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H1 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H1 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H2 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H2 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H3 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H3 title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H4 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H4 title;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H5 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H5 title;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H6 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H6 title.' ); ?>
            </dd>
        </dl>
    </li>
    </ul>

<<<<<<< HEAD
<h5><?php _e( 'Greyscale colors' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Grey color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of grey color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Grey color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of grey color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Grey color (3)' ); ?></dt>
            <dd>
                <?php _e( 'second version of grey color.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
=======
>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
