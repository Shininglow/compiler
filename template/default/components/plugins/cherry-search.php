<article id="cherry-search">
    <div id="toc-cherry-search" class="toc-id"></div>
    <h3 id="cherry-search"><?php _e( 'Cherry Search' ); ?></h3>


<p>
<?php printf( _( '%1$sCherry Search%2$s'), '<a href="https://wordpress.org/plugins/cherry-search/" target="_blank">', '</a>'); ?>
 <?php _e( 'allows you to send search queries without reloading the page via AJAX technology. In this way, users can find any information they are interested in quickly and easily. Thanks to a full range of settings, you can customize the functionality of the plugin the way you need.' ); ?>
</p>

<h4><?php _e( 'Settings' ); ?></h4>
 <p>
    <?php _e( 'Once the plugin is installed you can see a Cherry Search button in the right sidebar of your admin panel:' ); ?>
 </p>

 <h4><?php _e( 'Main Settings' ); ?></h4>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/main-settings.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'replace the standard search form ' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option allows to replace all the standard search forms on your website;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'search button text' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option sets search button text;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'search button icon' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option sets search button icon;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( 'caption / placeholder text ' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option sets placeholder text in input field.' ); ?>
                </dd>
        </dl>
    </li>
</ul>

 <h4><?php _e( 'Search Result Settings' ); ?></h4>


<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/search-result-settings.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'search in' ); ?>
            </dt>
                <dd>
                    <?php _e( 'you can select particular search sources. If nothing is selected in the option, search will be made over the entire site;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'exclude categories from search results' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option allows to set categories in which search will not be made;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( ' exclude tags from search results' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option allows to set tags in which search will not be made;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( 'exclude post types from search results' ); ?>
            </dt>
                <dd>
                   <?php _e( ' this option allows to set post types in which search will not be made;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( 'number of results displayed in one search query' ); ?>
            </dt>
                <dd>
                    <?php _e( 'this option will allow you to limit the number of displayed search results. If the overall number of results exceeds previous set limit, the <strong>load more</strong> button will come up;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'sort search results by' ); ?>
            </dt>
                <dd>
                    <?php _e( 'sort search results by a certain criteria;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'filter results by' ); ?>
            </dt>
                <dd>
                    <?php _e( 'filter search results by ascending or descending order.' ); ?>
                </dd>
        </dl>
    </li>
</ul>

 <h4><?php _e( 'Visual Settings' ); ?></h4>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/search-visual-settings.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'show post titles' ); ?>
            </dt>
                <dd>
                    <?php _e( 'show/hide post titles;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'post word count' ); ?>
            </dt>
                <dd>
                    <?php _e( 'specify the post word count;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'show post authors' ); ?>
            </dt>
                <dd>
                   <?php _e( 'show/hide post authors;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( 'prefix before author`s name' ); ?>
            </dt>
                <dd>
                    <?php _e( 'specify the prefix that will be displayed before author’s name;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
               <?php _e( 'show post thumbnails' ); ?>
            </dt>
                <dd>
                    <?php _e( 'show/hide posts thumbnails;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'enable scrolling for dropdown lists' ); ?>
            </dt>
                <dd>
                   <?php _e( ' enable disable scrolling for dropdown search results lists;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'dropdown list height' ); ?>
            </dt>
                <dd>
                    <?php _e( 'specify the dropdown list height;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'view more button text ' ); ?>
            </dt>
                <dd>
                    <?php _e( 'add text for view more button.' ); ?>
                </dd>
        </dl>
    </li>
</ul>

<h4><?php _e( 'Notifications' ); ?></h4>

<pre class="unstyled" style= "width:900px"; >
<?php assets_manager()->get_image( 'assets/images/notifications.png', 'img-preview', _( 'About' ) ); ?>
</pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'negative search result' ); ?>
            </dt>
                <dd>
                    <?php _e( 'text that will be displayed if nothing is found;' ); ?>
                </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>
                <?php _e( 'technical error ' ); ?>
            </dt>
                <dd>
                    <?php _e( 'text that will be displayed during technical error.' ); ?>
                </dd>
        </dl>
    </li>
</ul>    </article>
