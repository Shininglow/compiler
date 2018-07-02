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
				'regular-accent-color-3',
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
				'invert-accent-color-3',
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
<?php
	get_customizer_sub_component(
		array(
			'gradient-scheme',
		)
	);
?>
<ul>
	<?php
		get_customizer_sub_component(
			array(
				'gradient-scheme',
				'gradient-color-1',
				'gradient-color-2',
			)
		);
	?>
</ul>

<h5><?php _e( 'Gradient Scheme' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'gradient color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of gradient color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'gradient color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of gradient color.' ); ?>
            </dd>
        </dl>
    </li>

<h5><?php _e( 'Regular Scheme' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (3)' ); ?></dt>
            <dd>
                <?php _e( 'third version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (4)' ); ?></dt>
            <dd>
                <?php _e( 'fourth version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (4)' ); ?></dt>
            <dd>
                <?php _e( 'fourth version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (5)' ); ?></dt>
            <dd>
                <?php _e( 'fifth version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (6)' ); ?></dt>
            <dd>
                <?php _e( 'sixth version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (7)' ); ?></dt>
            <dd>
                <?php _e( 'seventh version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (8)' ); ?></dt>
            <dd>
                <?php _e( 'eighth version of the main theme color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'accent color (9)' ); ?></dt>
            <dd>
                <?php _e( 'ninth version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'footer text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the footer text;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'regular input color' ); ?></dt>
            <dd>
                <?php _e( 'color of the regular input;' ); ?>
            </dd>
        </dl>
    </li>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the text.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Link color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Link hover color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links on hover.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H1 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H1 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H2 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H2 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H3 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H3 title.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H4 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H4 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H5 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H5 title.' ); ?>
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
            <dt><?php _e( 'Accent color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Accent color (3)' ); ?></dt>
            <dd>
                <?php _e( 'third version of the main theme color.' ); ?>
            </dd>
        </dl>
    </li>
</ul>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the text.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Link color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Link hover color' ); ?></dt>
            <dd>
                <?php _e( 'color of the links on hover.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H1 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H1 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H2 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H2 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H3 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H3 title.' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H4 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H4 title.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H5 color' ); ?></dt>
            <dd>
                <?php _e( 'color of the H5 title.' ); ?>
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

   <li>
        <dl class="inline-term">
            <dt><?php _e( 'footer text color' ); ?></dt>
            <dd>
                <?php _e( 'color of the footer text;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'regular input color' ); ?></dt>
            <dd>
                <?php _e( 'color of the regular input;' ); ?>
            </dd>
        </dl>
    </li>

<ul>
    <?php
        get_customizer_sub_component(
            array(
                'grey-color-1',
                'grey-color-2',
                'grey-color-3',
                'grey-color-4',
                
            )
        );
    ?>
</ul>

<h5><?php _e( 'Greyscale Colors' ); ?></h5>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'grey color (1)' ); ?></dt>
            <dd>
                <?php _e( 'first version of the main theme grey color;' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'grey color (2)' ); ?></dt>
            <dd>
                <?php _e( 'second version of the main theme grey color;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'grey color (3)' ); ?></dt>
            <dd>
                <?php _e( 'third version of the main theme grey color;' ); ?>
            </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'grey color (4)' ); ?></dt>
            <dd>
                <?php _e( 'fourth version of the main theme grey color.' ); ?>
            </dd>
        </dl>
    </li>
   