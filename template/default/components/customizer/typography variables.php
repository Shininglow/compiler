<div id="toc-typography" class="toc-id"></div>
<h3 id="typography"><?php _e( 'Typography' ); ?></h3>
<p><?php _e( 'Here you can configure headers and text typography.' ); ?></p>
<?php
	get_customizer_sub_component(
		array(
			'typography',
		)
	);
?>
<ul>
	<?php
		get_customizer_sub_component(
			array(
				'body-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'body-font-family',
					'body-font-style',
					'body-font-weight',
					'body-font-size',
					'body-line-height',
					'body-letter-spacing',
					'body-character-set',
					'body-text-align',

				)
			);
		?>
	</ul>
		<?php
		get_customizer_sub_component(
			array(
				'h1-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h1-font-family',
					'h1-font-style',
					'h1-font-weight',
					'h1-font-size',
					'h1-line-height',
					'h1-letter-spacing',
					'h1-character-set',
					'h1-text-align',
				)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'h2-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h2-font-family',
					'h2-font-style',
					'h2-font-weight',
					'h2-font-size',
					'h2-line-height',
					'h2-letter-spacing',
					'h2-character-set',
					'h2-text-align',

					)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'h3-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h3-font-family',
					'h3-font-style',
					'h3-font-weight',
					'h3-font-size',
					'h3-line-height',
					'h3-letter-spacing',
					'h3-character-set',
					'h3-text-align',

					)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'h4-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h4-font-family',
					'h4-font-style',
					'h4-font-weight',
					'h4-font-size',
					'h4-line-height',
					'h4-letter-spacing',
					'h4-character-set',
					'h4-text-align',
				)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'h5-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h5-font-family',
					'h5-font-style',
					'h5-font-weight',
					'h5-font-size',
					'h5-line-height',
					'h5-letter-spacing',
					'h5-character-set',
					'h5-text-align',
				)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'h6-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'h6-font-family',
					'h6-font-style',
					'h6-font-weight',
					'h6-font-size',
					'h6-line-height',
					'h6-letter-spacing',
					'h6-character-set',
					'h6-text-align',
				)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'breadcrumbs-typography',
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'breadcrumbs-font-family',
					'breadcrumbs-font-style',
					'breadcrumbs-font-weight',
					'breadcrumbs-font-size',
					'breadcrumbs-line-height',
					'breadcrumbs-letter-spacing',
					'breadcrumbs-character-set',
				)
			);
		?>
	</ul>
	<?php
		get_customizer_sub_component(
			array(
				'meta-typography'
			)
		);
	?>
	<ul>
		<?php
			get_customizer_sub_component(
				array(
					'meta-font-family',
					'meta-font-style',
					'meta-font-weight',
					'meta-font-size',
					'meta-line-height',
					'meta-letter-spacing',
					'meta-character-set',
				)
			);
		?>
	</ul>
</ul>




<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Body text' ); ?></dt>
            <dd>
                <?php _e( 'main website text typography options.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H1 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H1 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H2 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H2 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H3 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H3 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H4 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H4 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H5 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H3 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'H6 Heading' ); ?></dt>
            <dd>
                <?php _e( 'H4 heading font settings.' ); ?>
            </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Main menu' ); ?></dt>
            <dd>
                <?php _e( 'main menu font settings.' ); ?>
             </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Button' ); ?></dt>
            <dd>
                <?php _e( 'button font settings.' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Breadcrumbs' ); ?></dt>
            <dd>
                <?php _e( 'breadcrumbs font settings.' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Breadcrumbs' ); ?></dt>
            <dd>
                <?php _e( 'Breadcrumbs font settings.' ); ?>
             </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Meta' ); ?></dt>
            <dd>
                <?php _e( 'website text typography options.' ); ?>
             </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Entry meta' ); ?></dt>
            <dd>
                <?php _e( 'website text typography options.' ); ?>
             </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Main menu' ); ?></dt>
            <dd>
                <?php _e( 'main menu font settings.' ); ?>
             </dd>
        </dl>
    </li>
     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Button' ); ?></dt>
            <dd>
                <?php _e( 'button font settings.' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Breadcrumbs' ); ?></dt>
            <dd>
                <?php _e( 'breadcrumbs font settings.' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Extra font' ); ?></dt>
            <dd>
                <?php _e( 'extra font settings.' ); ?>
             </dd>
        </dl>
    </li>



    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Blockquote' ); ?></dt>
            <dd>
                <?php _e( 'blockquotes typography options.' ); ?>
             </dd>
        </dl>
    </li>

     <li>
        <dl class="inline-term">
            <dt><?php _e( 'Metadata typography' ); ?></dt>
            <dd>
                <?php _e( 'metadata typography options.' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'Misc' ); ?></dt>
            <dd>
                <?php _e( 'enable / disbale Word Wrap.' ); ?>
             </dd>
        </dl>
    </li>


<p><?php _e( 'Every category of listed above contains the following settings:' ); ?></p>

<ul class="marked-list">

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'font family' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the font-family for an element;' ); ?>
             </dd>
        </dl>
    </li>

    <li>
        <dl class="inline-term">
            <dt><?php _e( 'font style' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the font style for a text;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'font weight' ); ?></dt>
            <dd>
                <?php _e( 'this property sets the font weight of the text;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'font size' ); ?></dt>
            <dd>
                <?php _e( 'this property sets the font size;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'line height' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the line height;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'letter spacing' ); ?></dt>
            <dd>
                <?php _e( 'this property increases or decreases the space between characters in a text;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'character set' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the character set for an element;' ); ?>
             </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'text align' ); ?></dt>
            <dd>
                <?php _e( 'this property specifies the horizontal text alignment inside the element.' ); ?>
             </dd>
        </dl>
    </li>
