<article id="cherry-data-importer">

<div id="toc-cherry-data-importer" class="toc-id"></div>
<h3 id="cherry-data-importer"><?php _e( 'Cherry Data Importer' ); ?></h3>

<p>
	<?php _e( 'This plugin will help you export posts, comments, widgets, settings etc., from one site to another. With a single click of a button the plugin generates an XML file that can be imported to another website. ' ); ?>
</p>

<p><?php _e( 'After the installation the plugin adds a new block - <strong>Demo Content</strong> where you can export or import the content.' ); ?></p>

<pre class="unstyled" style= "width:900px; "; >

<?php assets_manager()->get_image( 'assets/images/cherry-importer-1.png', 'img-preview', _( 'About' ) ); ?>
</pre>




<p>
</p>

<div class ="alert alert-info">
	<?php _e( 'Note: The images are not exported separately, they are downloaded from the server during the import. ' ); ?>
</div>

<h4>
<?php _e( 'File Import' ); ?>
</h4>
<p>
	<?php _e( 'To import the content, you need to upload the XML file and press <strong>Start Import</strong>.' ); ?>
</p>

<p>
	<?php _e( 'Once the import begins you will see a box with progress bars. ' ); ?>
</p>
<pre class="unstyled" style= "width:900px; height:400px"; >
    <?php assets_manager()->get_image( 'assets/images/cherry-importer-3.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<p>
	<?php _e( 'After the import is complete you can view the site or customize it. ' ); ?>
</p>

<pre class="unstyled" style= "width:900px; height:230px"; >
<?php assets_manager()->get_image( 'assets/images/cherry-importer-4.png', 'img-preview', _( 'About' ) ); ?>
</pre>
<h4><?php _e( 'File Export' ); ?></h4>

<p><?php _e( 'To export the data, you only need to press an Export button and an XML file will be created automatically. ' ); ?></p>

<pre class="unstyled" style= "width:900px; height:230px"; >
<?php assets_manager()->get_image( 'assets/images/cherry-importer-5.png', 'img-preview', _( 'About' ) ); ?>
</pre>


<h4><?php _e( 'Array Structure ' ); ?></h4>

<p>
	<?php _e( '<strong>XML importer settings. Features:</strong>' ); ?>
</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'enabled ' ); ?></dt>
            <dd>
				<?php _e( 'enable/disable XML importer;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use_upload ' ); ?></dt>
            <dd>
            	<?php _e( 'show/hide the files upload form;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'path ' ); ?> </dt>
            <dd>
            	 <?php _e( 'path to the pre-installed sample-data; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'import ' ); ?></dt>
            <dd>
               <?php _e( 'import settings;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'chunk_size' ); ?></dt>
            <dd>
               <?php _e( 'number of  processed items at 1 importing step. The less this number is, the more steps will be during the importing process, and less time will be spent for 1 step.  For this reason, it is strongly recommended to reduce this number for the themes with large sample data to avoid problems with importing files on weak servers;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'remap' ); ?> </dt>
            <dd>
               <?php _e( 'data post-processing settings. Here you need to add keys with posts IDs that can be changed during the import; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'post_meta' ); ?></dt>
            <dd>
               <?php _e( 'post metadata settings; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'term_meta' ); ?> </dt>
            <dd>
               <?php _e( 'terms metadata settings;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'options' ); ?> </dt>
            <dd>
               <?php _e( 'options.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<p>
	<?php _e( '<strong>Export Settings</strong>' ); ?>
</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'message' ); ?> </dt>
            <dd>
               <?php _e( 'message displayed in the export block; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'logo' ); ?></dt>
            <dd>
               <?php _e( 'url of the logo displayed in the export block;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'options ' ); ?></dt>
            <dd>
               <?php _e( 'options array for the additional export.' ); ?>
            </dd>
        </dl>
    </li>
</ul>


<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'success links ' ); ?></dt>
            <dd>
               <?php _e( 'associative array of links displayed on successful installation page. Link ID is used as a key. The plugin contains IDs for  the homepage and for customizer;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'label' ); ?> </dt>
            <dd>
                <?php _e( 'link text;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'type ' ); ?></dt>
            <dd>
               <?php _e( 'type of displayed button (default, primary, success, danger, warning); ' ); ?>

            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'target ' ); ?></dt>
            <dd>
               <?php _e( '_balnk, _self;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'url ' ); ?></dt>
            <dd>
               <?php _e( 'link url.' ); ?>
            </dd>
        </dl>
    </li>
</ul>
</article>
