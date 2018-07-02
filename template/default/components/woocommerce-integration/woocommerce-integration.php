<<<<<<< HEAD
<article>
	<div id="toc-woocommerce-integration" class="toc-id"></div>
	<h2 id="woocommerce-integration"><?php _e( 'WooCommerce Integration' ); ?></h2>
	<h5 id="this-section-defines-woocommerce-integration"><?php _e( 'This section defines WooCommerce Integration.' ); ?></h5>

<div id="toc-cart" class="toc-id"></div>

<h4><?php _e( 'WooCommerce Shortcodes Support' ); ?></h4>

<p><?php _e( 'In addition to all the abovementioned features, the template supports all Woocommerce Shortcodes. You simply need to add the content to the shortcode inside the posts and pages to add the elements. In this way, you can save yourself a great deal of time.' ); ?></p>

<h4><?php _e( 'Cart' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 170px;">
[woocommerce_cart]
</pre>
<p><?php _e( 'This shortcode is used to display the cart contents and interface for coupon codes and other cart bits and pieces.' ); ?></p>


<div id="toc-checkout" class="toc-id"></div>
<h4><?php _e( 'Checkout' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 200px;">[woocommerce_checkout]</pre>

<p><?php _e( 'This shortcode should be used on a checkout page only and indicates the checkout process.' ); ?></p>

<div id="toc-order-tracking-form" class="toc-id"></div>
<h4><?php _e( 'Order Tracking Form' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 240px;">[woocommerce_order_tracking]</pre>

<p><?php _e( 'This shortcode gives users the status of an order. To view it one needs to enter his order details.' ); ?></p>

<div id="toc-my-account" class="toc-id"></div>
<h4><?php _e( 'My Account' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 349px;">[recent_products per_page="12" columns="4"]</pre>

<p><?php _e( 'Shows "My account" section where the customer can view the previous orders and update information. You can specify the number or orders to show, it’s set by default to 15 (use -1 to display all orders.)' ); ?></p>

<div class="alert alert-info">The arguments array (labeled “Args”) shown above each of the shortcodes display valid parameters and default values.</div>
<p>Args:</p>
<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">array (
		'current_user' => '',
		'order_count' => '15'
)</pre>

<div id="toc-recent-products" class="toc-id"></div>
<h4><?php _e( 'Recent Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 349px;">[recent_products per_page="12" columns="4"]</pre>

<p><?php _e( 'Recent products list is useful on the homepage. The "per_page" shortcode determines how many products there are to show on the page. ' ); ?></p>

<p><?php _e( 'The columns attribute controls how many columns wide the products should be before wrapping.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'date',
		'order' => 'desc'
)</pre>

<div id="toc-featured-products" class="toc-id"></div>
<h4><?php _e( 'Featured Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 356px;">[featured_products per_page="12" columns="4"]</pre>

<p><?php _e( 'Works the same as the Recent Products but displays the products that have been set as “featured.” In this example, the shortcode defines the number of products and columns to be displayed. ' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'date',
		'order' => 'desc'
) </pre>

<div id="toc-product" class="toc-id"></div>
<h4><?php _e( 'Product' ); ?></h4>


<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 130px;">[product id="99"]</pre>
<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 160px;">[product sku="FOO"]</pre>

<p><?php _e( 'Use these shortcodes to display products using product ID number or SKU. ' ); ?></p>


<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'date',
		'order' => 'desc'
)</pre>

<p><?php _e( 'To find out the Product ID, navigate to the Products screen, hover over the product and locate the ID number in the line at the bottom of the page.' ); ?></p>

<div id="toc-products" class="toc-id"></div>
<h4><?php _e( 'Products' ); ?></h4>


<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 200px;">[products ids="1, 2, 3, 4, 5"]</pre>
<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 440px;">[products skus="foo, bar, baz" orderby="date" order="desc"]</pre>

<p><?php _e( 'Use these shortcodes to display multiple products using product ID number or SKU.' ); ?> </p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'columns' => '4',
		'orderby' => 'title',
		'order' => 'asc'
)</pre>

<div id="toc-add-to-cart" class="toc-id"></div>
<h4><?php _e( 'Add to Cart' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 170px;">
[add_to_cart id="99"]</pre>

<p><?php _e( 'Show the price and "Add to cart" button for the single product using its ID number.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'id' => '99',
		'style' => 'border:4px solid #ccc; padding: 12px;',
		'sku' => 'FOO'
) </pre>

<div id="toc-add-to-cart-url" class="toc-id"></div>
<h4><?php _e( 'Add to Cart URL' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 200px;">
[add_to_cart_url id="99"]</pre>

<p><?php _e( 'Echo the URL on the "Add to Cart" button for a single product using its ID number.' ); ?></p>

<p>Args:</p>
<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'id' => '99',
		'sku' => 'FOO'
) </pre>

<div id="toc-product-page" class="toc-id"></div>
<h4><?php _e( 'Product Page' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 175px;">
[product_page id="99"]</pre>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 200px;">
[product_page sku="FOO"]</pre>

<p><?php _e( 'Show full single product page by product ID number or SKU.' ); ?></p>

<div id="toc-product-category" class="toc-id"></div>
<h4><?php _e( 'Product Category' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 320px;">[product_category category="appliances"]</pre>

<p><?php _e( 'Show multiple products in a category by slug?' ); ?></p>

<p><?php _e( 'To find out the slug, please, feel free to navigate to "WooCommerce > Products > Categories" and locate the slug column.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'title',
		'order' => 'asc',
		'category' => ''
)</pre>

<div id="toc-product-categories" class="toc-id"></div>
<h4><?php _e( 'Product Categories' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 349px;">[product_categories number="12" parent="0"]</pre>

<p><?php _e( 'Use this shortcode to display product categories loop.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'number' => 'null',
		'orderby' => 'title',
		'order' => 'ASC',
		'columns' => '4',
		'hide_empty' => '1',
		'parent' => '',
		'ids' => ''
)</pre>

<div id="toc-sale-products" class="toc-id"></div>
<h4><?php _e( 'Sale Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 240px;">[sale_products per_page="12"]</pre>


<p><?php _e( 'Use this shortcode to display all products on sale in the form of a list.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'title',
		'order' => 'asc'
)</pre>

<div id="toc-best-selling-products" class="toc-id"></div>
<h4><?php _e( 'Best-Selling Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 300px;">[best_selling_products per_page="12"]</pre>

<p><?php _e( 'Use this shortcode to display the list the best-selling products on sale.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4'
)</pre>

<div id="toc-top-rated-products" class="toc-id"></div>
<h4><?php _e( 'Top Rated Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 280px;">
[top_rated_products per_page="12"]</pre>

<p><?php _e( 'Use this shortcode to display top-rated products on sale.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'title',
		'order' => 'asc'
)</pre>

<div id="toc-product-attribute" class="toc-id"></div>
<h4><?php _e( 'Product Attribute' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 355px;">[product_attribute attribute='color' filter='black']</pre>


<p><?php _e( 'Use this shortcode to list the products with the certain attributes.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'title',
		'order' => 'asc',
		'attribute' => '',
		'filter' => ''
)</pre>

<div id="toc-related-products" class="toc-id"></div>
<h4><?php _e( 'Related Products' ); ?></h4>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 250px;">
[related_products per_page="12"]</pre>

<p><?php _e( 'Use this shortcode to display the related products.' ); ?></p>

<p>Args:</p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
array (
		'per_page' => '12',
		'columns' => '4',
		'orderby' => 'title'
)</pre>

<div class="alert alert-info">Please note: the ‘per_page’ shortcode argument will determine how many products are shown on a page. This will not add pagination to the shortcode.</div>

<div id="toc-messed-up-shortcodes" class="toc-id"></div>
<h4><?php _e( 'Messed-Up Shortcodes' ); ?></h4>

<p><?php _e( 'If you have pasted your shortcodes correctly, however, the content looks broken on the frontend page, please, make sure you did not embed the shortcode between the tags. This is a common issue. To remove these tags, navigate to page editor, and switch to the Text tab.' ); ?></p>

<div id="toc-sorting-products" class="toc-id"></div>
<h4><?php _e( 'Sorting Products Using Custom Meta Fields' ); ?></h4>

<p><?php _e( 'In the shortcodes listed below you can choose to order products by the "menu_order", "title", "date", "rand" and "id". To do it use the "orderby" attribute.' ); ?></p>

<ul class="marked-list">
    <li>[recent_products]</li>
    <li>[featured_products]</li>
    <li>[products]</li>
    <li>[product_category]</li>
    <li>[sale_products]</li></li>
    <li>[top_rated_products]</li>
    <li>[product_attribute]</li>
    <li>[related_products]</ul>

<p>E.g., </p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px; width: 450px;">
[products skus=”foo, bar, baz” orderby=”date” order=”desc”]</pre>

<p><?php _e( 'You can as well sort the products by custom meta fields using the code below (in this example we order products by price).' ); ?></p>

<pre class="unstyled" style="background-color:#f9f9f9; line-height: 30px;">
add_filter( 'woocommerce_shortcode_products_query', 'woocommerce_shortcode_products_orderby' );


function woocommerce_shortcode_products_orderby( $args ) {

	$standard_array = array('menu_order','title','date','rand','id');

	if( isset( $args['orderby'] ) && !in_array( $args['orderby'], $standard_array ) ) {
		$args['meta_key'] = $args['orderby'];
		$args['orderby']  = 'meta_value_num';
	}

	return $args;
}
</pre>

<p><?php _e( 'You need to paste this snippet in "functions.php" in your theme folder and then customize by editing "meta_key".' ); ?></p>


<div class="alert alert-info"> <?php printf( _( 'For more information on how to use WooCommerce shortcodes feel free to navigate to the official <pre class="unstyled" style="color:#23ad8e;">%sWooCommerce website%s.' ), '<a href="https://docs.woocommerce.com/document/woocommerce-shortcodes/">', '</a>', '<a href="http://wordpress.org/download/release-archive/">', '</a>', '<strong>', '</strong>' ); ?></div>

</article>
=======

<article>

<div id="toc-woocommerce-integration" class="toc-id"></div>
<h2 id="woocommerce-integration"><?php _e( 'Woocommerce Shortcodes Support' ); ?></h2>

<h5>In addition to all the abovementioned features, the template supports all Woocommerce Shortcodes. You simply need to add the content to the shortcode inside the posts and pages to add the elements. In this way, you can save yourself a great deal of time.</h5>

<div id="toc-cart" class="toc-id"></div>
<h2 id="cart"><?php _e( 'Cart' ); ?></h2>

<h5>This shortcode is used to display the cart contents and interface for coupon codes and other cart bits and pieces.</h5>

<h4>[woocommerce_cart]</h4>


<div id="toc-checkout" class="toc-id"></div>
<h2 id="checkout"><?php _e( 'Checkout' ); ?></h2>

<h5>This shortcode should be used on a checkout page only and indicates the checkout process.</h5>

<h4>[woocommerce_checkout]</h4>


<div id="toc-order-tracking-form" class="toc-id"></div>
<h2 id="order-tracking-form"><?php _e( 'Order Tracking Form' ); ?></h2>

<h5>This shortcode gives users the status of an order by entering their order details.</h5>

<h4>[woocommerce_order_tracking]</h4>



<div id="toc-my-account" class="toc-id"></div>
<h2 id="my-account"><?php _e( 'My Account' ); ?></h2>

<h5>'Shows the ‘my account’ section where the customer can view the past orders and update their information. You can specify the number or order to show, it’s set by default to 15 (use -1 to display all orders.</h5>

<h4>[recent_products per_page="12" columns="4"]</h4>

<blockquote class="alert alert-info">
    <p><?php _e( 'The arguments array (labelled “Args”) shown above each of the shortcodes displays valid parameters and default values.' ); ?></p>
</blockquote>


<h5>Args:</h5>


<div class="codebox">
"
    array (
        "
<span>'current_user' => '',</span>
<span>'order_count' => '15'</span>

"
     )
 "
</div>




<div id="toc-recent-products" class="toc-id"></div>
<h2 id="recent-products"><?php _e( 'Recent Products' ); ?></h2>

<h5>Lists recent products – useful on the homepage. The ‘per_page’ shortcode determines how many products to show on the page and the columns attribute controls how many columns wide the products should be before wrapping.</h5>

<h4>[recent_products per_page="12" columns="4"]</h4>


<h5>Args:</h5>


<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4'</span>
<span>'columns' => 'date',,</span>
<span>'order' => 'desc'</span>


     )
 
</div>




<div id="toc-featured-products" class="toc-id"></div>
<h2 id="featured-products"><?php _e( 'Featured Products' ); ?></h2>

<h5>Works the same as the Recent Products but displays the products that have been set as “featured.” In this example, the shortcode says: Show 12 featured products in 4 columns.</h5>

<h4>[featured_products per_page="12" columns="4"]</h4>


<h5>Args:</h5>


<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4'</span>
<span>'columns' => 'date',,</span>
<span>'order' => 'desc'</span>


     )
 
</div>



<div id="toc-product" class="toc-id"></div>
<h2 id="product"><?php _e( 'Product' ); ?></h2>

<h5>Shows a single product by ID or SKU.</h5>

<h4>[product id="99"]</h4>
<h4>[product sku="FOO"]</h4>

<h5>Args:</h5>


<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4'</span>
<span>'columns' => 'date',,</span>
<span>'order' => 'desc'</span>


     )
 
</div>


<blockquote class="alert alert-info">
    <p><?php _e( 'To find the Product ID, go to the Products screen, hover over the product and the ID appears.' ); ?></p>
</blockquote>

<h5 class="italic">NOTE: If the product isn’t showing, make sure it isn’t set to Hidden in the Catalog Visibility.</h5>



<div id="toc-products" class="toc-id"></div>
<h2 id="products"><?php _e( 'Products' ); ?></h2>

<h5>Show multiple products by ID or SKU. Make note of the plural ‘products.</h5>


<h4>[products ids="1, 2, 3, 4, 5"]</h4>
<h4>[products skus="foo, bar, baz" orderby="date" order="desc"]</h4>

<h5>Args:</h5>



<div class="codebox">

    array (
        
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc'</span>


     )
 
</div>




<h5 class="italic">NOTE: If the product is not showing, make sure it is not set to Hidden in the Catalog Visibility.</h5>




<div id="toc-add-to-cart" class="toc-id"></div>
<h2 id="add-to-cart"><?php _e( 'Add To Cart' ); ?></h2>

<h5>Show the price and add to cart button of a single product by ID.</h5>

<h4>[add_to_cart id="99"]</h4>


<h5>Args:</h5>


<div class="codebox">

    array (
        
<span>'id' => '99',</span>
<span>'style' => 'border:4px solid #ccc; padding: 12px;',</span>
<span>'sku' => 'FOO'</span>


     )
 
</div>




<div id="toc-add-to-cart-url" class="toc-id"></div>
<h2 id="add-to-cart-url"><?php _e( 'Add To Cart URL' ); ?></h2>

<h5>Echo the URL on the Add to Cart button of a single product by ID.</h5>

<h4>[add_to_cart_url id="99"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'id' => '99',</span>
<span>'sku' => 'FOO'</span>

     )
 
</div>


<div id="toc-product-page" class="toc-id"></div>
<h2 id="product-page"><?php _e( 'Product Page' ); ?></h2>

<h5>Show a full single product page by ID or SKU.</h5>

<h4>[product_page id="99"]</h4>
<h4>[product_page sku="FOO"]</h4>


<div id="toc-product-category" class="toc-id"></div>
<h2 id="product-category"><?php _e( 'Product Category' ); ?></h2>
<p>
    Show multiple products in a category by slug.
</p>
<p>Go to: <strong>WooCommerce</strong> > <strong>Products</strong> > <strong>Categories</strong> to find the slug column.</p>

<h4>[product_category category="appliances"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc',</span>
<span>'category' => ''</span>

     )
 
</div>

<div id="toc-product-categories" class="toc-id"></div>
<h2 id="product-categories"><?php _e( 'Product Categories' ); ?></h2>
<p>
    Display product categories loop
</p>
<p>Go to: <strong>WooCommerce</strong> > <strong>Products</strong> > <strong>Categories</strong> to find the slug column.</p>

<h4>[product_categories number="12" parent="0"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'number' => 'null',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'ASC',</span>
<span>'columns' => '4',</span>
<span>'hide_empty' => '1',</span>
<span>'parent' => '',</span>
<span>'ids' => ''</span>

     )

</div>

<h5 class="italic"> The `number` field is used to display the number of products and the `IDs` field is to tell the shortcode which categories to display.</h5>


<p>
    Set the parent paramater to 0 to only display top level categories. Set IDs to a comma separated list of category IDs to only show those.
</p>

<div id="toc-sale-products" class="toc-id"></div>
<h2 id="sale-products"><?php _e( 'Sale Products' ); ?></h2>
<p>
    List all products on sale.
</p>


<h4>[sale_products per_page="12"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc'</span>

     )
 
</div>

<div id="toc-best-selling-products" class="toc-id"></div>
<h2 id="best-selling-products"><?php _e( 'Best Selling Products' ); ?></h2>
<p>
    List the best-selling products on sale.
</p>


<h4>[best_selling_products per_page="12"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>


     )
 
</div>



<div id="toc-top-rated-products" class="toc-id"></div>
<h2 id="top-rated-products"><?php _e( 'Top Rated Products' ); ?></h2>
<p>
    List top-rated products on sale.
</p>


<h4>[top_rated_products per_page="12"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc'</span>


     )
 
</div>

<div id="toc-products-attribute" class="toc-id"></div>
<h2 id="products-attribute"><?php _e( 'Product Attribute' ); ?></h2>
<p>
    Lists the products with an attribute shortcode.
</p>


<h4>[product_attribute attribute='color' filter='black']</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc'</span>
<span>'attribute' => '',</span>
<span>'filter' => ''</span>

     )
 
</div>


<div id="toc-related-products" class="toc-id"></div>
<h2 id="related-products"><?php _e( 'Related Products' ); ?></h2>
<p>
    Lists related products.
</p>


<h4>[related_products per_page="12"]</h4>


<h5>Args:</h5>

<div class="codebox">

    array (
        
<span>'per_page' => '12',</span>
<span>'columns' => '4',</span>
<span>'orderby' => 'title',</span>
<span>'order' => 'asc'</span>


     )
 
</div>

<h4>The ‘per_page’ Argument</h4>

<blockquote class="alert alert-info">
    <p><?php _e( '<strong>Please note:</strong> the ‘per_page’ shortcode argument will determine how many products are shown on a page. This will not add pagination to the shortcode.' ); ?></p>
</blockquote>




<div id="toc-messed-up-shortcodes" class="toc-id"></div>
<h2 id="messed-up-shortcodes"><?php _e( 'Messed-Up Shortcodes' ); ?></h2>
<p>
    If you have pasted your shortcodes correctly and the display looks incorrect, make sure you did not embed the shortcode between the tags. This is a common issue. To remove these tags, edit the page, and click the Text tab.
</p>


<div id="toc-sorting-products-by-custom-meta-fields" class="toc-id"></div>
<h2 id="sorting-products-by-custom-meta-fields"><?php _e( 'Sorting Products by Custom Meta Fields' ); ?></h2>
<p>
    In many shortcodes like:
</p>

<ul class="marked-list_bold">
<li>[recent_products]</li>
<li>[featured_products]</li>
<li>[products]</li>
<li>[product_category]</li>
<li>[sale_products]</li>
<li>[top_rated_products]</li>
<li>[product_attribute]</li>
<li>[related_products]</li>
</ul>

<p>
    you can choose to order products by the following values
</p>

<ul class="marked-list_bold">
<li>menu_order</li>
<li>title</li>
<li>date</li>
<li>id</li>
</ul>

<p>
    using the “orderby” attribute, for example:
</p>
<p>
    [products skus=”foo, bar, baz” <strong>orderby=”date”</strong> order=”desc”].
</p>

<p>
    But you can also sort the products by custom meta fields using the code below (in this example we order product by price):
</p>


<div class="codebox">
<pre>
add_filter( 'woocommerce_shortcode_products_query', 'woocommerce_shortcode_products_orderby' );

function woocommerce_shortcode_products_orderby( $args ) {

    $standard_array = array('menu_order','title','date','rand','id');

    if( isset( $args['orderby'] ) && !in_array( $args['orderby'], $standard_array ) ) {
        $args['meta_key'] = $args['orderby'];
        $args['orderby']  = 'meta_value_num'; 
    }

    return $args;
}
</pre>
</div>
<p>
    You need to place this snippet in functions.php in your theme folder and then customize by editing the meta_key.
</p>


<h4>
For more information navigate to the oficial 
<a href="https://docs.woothemes.com/document/woocommerce-shortcodes/">WooCommerce website</a>
</h4>



</article>




>>>>>>> a9becd7228f385ea1ec674c39b9d565c99be86dc
