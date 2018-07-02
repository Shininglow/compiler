<article id="cherry-popups">
    <div id="toc-cherry-popups" class="toc-id"></div>
    <h3 id="cherry-popups"><?php _e( 'Cherry PopUps' ); ?></h3>

<p>
<?php _e( 'This plugin is used to display popups of your projects on a site page. It has its own settings page which allows to save, reset and set default options. With its help you will be able to create various kinds of popups and manage them the way you like.' ); ?>
</p>

<?php assets_manager()->get_image( 'assets/images/frontend.png', 'img-preview', _( 'About' ) ); ?>

<h3><?php _e( 'Popup Options' ); ?></h2>

<p>
<?php _e( 'Each popup has its own settings which are gathered in Popup settings.' ); ?>
</p>

<h3><?php _e( 'General Settings Sections' ); ?></h3>

<?php assets_manager()->get_image( 'assets/images/general.jpg', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'popup layout type' ); ?></dt>
            <dd>
               <?php _e( 'choose popup layout type (center, fullwidth center, fullwidth bottom);' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'show/hide animation' ); ?> </dt>
            <dd>
               <?php _e( 'choose show/hide animation effects(fade, scale, move up);' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'base style preset' ); ?></dt>
            <dd>
                <?php _e( 'popup controls base color styles(default, light, dark, blue, red);' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'container background type' ); ?></dt>
            <dd>
                <?php _e( 'container background type (fill-color, image);' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'container background color' ); ?></dt>
            <dd>
                <?php _e( 'popup container background color; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'container background image' ); ?></dt>
            <dd>
               <?php _e( 'choose container background image; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'container opacity' ); ?></dt>
            <dd>
                <?php _e( 'container opacity (active for fill-color type);' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'popup width' ); ?></dt>
            <dd>
                <?php _e( 'popup container width;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'popup height' ); ?></dt>
            <dd>
                <?php _e( 'popup container height.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( 'Overlay' ); ?></h3>

<?php assets_manager()->get_image( 'assets/images/overlay.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt> <?php _e( 'type of overlay' ); ?></dt>
                 <li>
                    <dl class="inline-term">
                        <dt><?php _e( 'disabled' ); ?> </dt>
                        <dd>
                            <?php _e( 'disable the overlay;' ); ?>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl class="inline-term">
                        <dt><?php _e( 'fill-color' ); ?> </dt>
                        <dd>
                            <?php _e( 'background fill-cover;' ); ?>
                        </dd>
                    </dl>
                </li>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'overlay background color' ); ?></dt>
            <dd>
                <?php _e( 'choose overlay background color;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'overlay opacity' ); ?></dt>
            <dd>
                 <?php _e( 'set overlay background opacity;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'overlay background image' ); ?></dt>
            <dd>
                <?php _e( 'set overlay background image; ' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'use Overlay as close button' ); ?></dt>
            <dd>
                <?php _e( 'clicking on the overlay closes the popup.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( '"Open" Page Settings' ); ?></h3>

<?php assets_manager()->get_image( 'assets/images/open-page.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>"<?php _e( 'open page popup appear event ' ); ?></dt>
            <dd>
                <?php _e( 'set an event to which a popup will be opened; ' ); ?>
            </dd>
                <li>
                    <dl class="inline-term">
                        <dt><?php _e( 'close page popup display in' ); ?></dt>
                        <dd>
                            <?php _e( 'pages identification for the default popup; ' ); ?>
                        </dd>
                    </dl>
                    </li>
                    <li>
                        <dl class="inline-term">
                            <dt><?php _e( 'on page load' ); ?></dt>
                            <dd>
                                <?php _e( 'page complete load event;' ); ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-term">
                            <dt><?php _e( 'inactivity time after' ); ?></dt>
                            <dd>
                                <?php _e( 'inactivity time event; ' ); ?>
                            </dd>
                        </dl>
                    </li>
                    <li>
                        <dl class="inline-term">
                            <dt><?php _e( 'on page scrolling' ); ?></dt>
                            <dd>
                                <?php _e( 'page scrolling progress event.' ); ?>
                            </dd>
                        </dl>
                    </li>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'open delay' ); ?></dt>
            <dd>
                <?php _e( 'set the time delay when the page loads.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( '"Close" Page Settings' ); ?></h3>

<?php assets_manager()->get_image( 'assets/images/close-page-settings.png', 'img-preview', _( 'About' ) ); ?>


<h4><?php _e( 'Close page popup appear event' ); ?> </h4>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'outside viewport' ); ?></dt>
            <dd>
                <?php _e( 'set top border for mouse cursor;' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'page unfocus' ); ?></dt>
            <dd>
                <?php _e( 'user sets focus on another page or app in the system.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h4><?php _e( 'Advanced Settings' ); ?></h4>

<?php assets_manager()->get_image( 'assets/images/advanced-settings.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'template' ); ?></dt>
            <dd>
                <?php _e( 'template file for content.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( 'Popup Identification on Static Page' ); ?></h3>
<p>
    <?php _e( 'If standard settings are not enough for identifying a visible section, there is a metablock that allows you to add a particular popup to any static page. To find the metablock open any page of your website in the and scroll down to the  Cherry Popups section.' ); ?>
</p>

<?php assets_manager()->get_image( 'assets/images/popup-tdentification.png', 'img-preview', _( 'About' ) ); ?>

<p>
    <?php _e( 'You can assign 2 popups simultaneously. One at the beginning, and another one at the end of section.' ); ?>
</p>

<h3><?php _e( 'Plugin Options' ); ?></h3>
<p>
<?php _e( 'All plugin settings are gathered in Popups > Settings' ); ?>
</p>

<h3><?php _e( 'General Settings Sections' ); ?></h3>
<p>
    <?php _e( 'Here ou can define where and for which users to display popups. ' ); ?>
</p>

<?php assets_manager()->get_image( 'assets/images/settings.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'enable popups' ); ?></dt>
            <dd>
                <?php _e( 'enable/disable plugin functions globally for the site;' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'enable plugin on mobile devices' ); ?></dt>
            <dd>
                <?php _e( 'show/hide popups on mobile devices;' ); ?>
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'enable for logged users' ); ?></dt>
            <dd>
                <?php _e( 'show/hide popups for logged in users.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( 'Open Page Settings' ); ?></h3>
<p>

</p>
<?php assets_manager()->get_image( 'assets/images/open-page-settings.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'default open page popup' ); ?></dt>
            <dd>
                 <?php _e( 'default  open page popup identity;' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'open page popup display in' ); ?></dt>
            <dd>
                <?php _e( 'pages identification for the default popup.' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( 'Close Page Settings' ); ?></h3>

<?php assets_manager()->get_image( 'assets/images/cherry-popup-settings-2.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'default close page popup' ); ?></dt>
            <dd>
                 <?php _e( 'default close page popup identity;' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'close page popup display in' ); ?></dt>
            <dd>
                <?php _e( 'pages identification for the default popup. ' ); ?>
            </dd>
        </dl>
    </li>
</ul>

<h3><?php _e( 'Mailing List Manager' ); ?></h3>
<p>
    <?php _e( 'MailChimp mailing list settings:' ); ?>
</p>

<?php assets_manager()->get_image( 'assets/images/frontend.png', 'img-preview', _( 'About' ) ); ?>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt><?php _e( 'mailChimp API key' ); ?></dt>
            <dd>
                <?php _e( 'add MailChimp Api key (<a href="http://kb.mailchimp.com/integrations/api-integrations/about-api-keys">how to get</a>);' ); ?>
            </dd>
        </dl>
    </li>
        <li>
        <dl class="inline-term">
            <dt><?php _e( 'mailChimp list ID' ); ?></dt>
            <dd>
                 <?php _e( 'profile list id (<a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id">how to get</a>);' ); ?>
            </dd>
        </dl>
    </li>
</ul>    </article>
