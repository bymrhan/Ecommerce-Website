<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Components</a></li>
        <li class="active"><a href="">Syntax Highlighting</a></li>
    </ul>
    <!-- END Navigation info -->

    <p class="well">Easily use code syntax highlighting to demo the code you want! For Internet Explorer support, version 9 or higher is required.</p>

    <!-- HTML Syntax -->
    <h3 class="page-header">HTML <small>Basic Template Structure</small></h3>

    <pre class="line-numbers"><code class="language-markup">&lt;!-- Body --&gt;
&lt;!-- Add the class .fixed to &lt;body&gt; for a fixed layout on large resolutions (min: 1200px) --&gt;
&lt;!-- &lt;body class=&quot;fixed&quot;&gt; --&gt;
&lt;body&gt;
    &lt;!-- Page Container --&gt;
    &lt;div id=&quot;page-container&quot;&gt;
        &lt;!-- Header --&gt;
        &lt;!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively --&gt;
        &lt;!-- &lt;header class=&quot;navbar navbar-inverse navbar-fixed-top&quot;&gt; --&gt;
        &lt;!-- &lt;header class=&quot;navbar navbar-inverse navbar-fixed-bottom&quot;&gt; --&gt;
        &lt;header class=&quot;navbar navbar-inverse&quot;&gt;
            Logo, widgets etc..
        &lt;/header&gt;
        &lt;!-- END Header --&gt;

        &lt;!-- Inner Container --&gt;
        &lt;div id=&quot;inner-container&quot;&gt;
            &lt;!-- Sidebar --&gt;
            &lt;aside id=&quot;page-sidebar&quot;&gt;
                Search and Main Navigation
            &lt;/aside&gt;
            &lt;!-- END Sidebar --&gt;

            &lt;!-- Page Content --&gt;
            &lt;div id=&quot;page-content&quot;&gt;
                Main Content
            &lt;/div&gt;
            &lt;!-- END Page Content --&gt;

            &lt;!-- Footer --&gt;
            &lt;footer&gt;
                Copyright etc..
            &lt;/footer&gt;
            &lt;!-- END Footer --&gt;
        &lt;/div&gt;
        &lt;!-- END Inner Container --&gt;
    &lt;/div&gt;
    &lt;!-- END Page Container --&gt;
&lt;/body&gt;
&lt;!-- END Body --&gt;</code></pre>
    <!-- END HTML Syntax -->

    <!-- CSS Syntax -->
    <h3 class="page-header">CSS <small>Basic Stylesheet Structure</small></h3>

    <pre class="line-numbers"><code class="language-css">/*
=================================================================
(#shortcode) SECTION
=================================================================
*/

/* Sub section 1 */
.class {
}

/* Sub section 2 */
.class {
}

/*
=================================================================
(#shortcode) SECTION
=================================================================
*/

/* Sub section 1 */
.class {
}

/* Sub section 2 */
.class {
}</code></pre>
    <!-- END CSS Syntax -->

    <!-- Javascript Syntax -->
    <h3 class="page-header">Javascript <small>Scroll to top function used in the template</small></h3>

    <pre class="line-numbers"><code class="language-javascript">/* Scroll to top link */
var scrollToTop = function() {
    // Get link
    var link = $('#to-top');

    $(window).scroll(function(){
        // If the user scrolled a bit (150 pixels) show the link
        if ($(this).scrollTop() > 150) {
            link.fadeIn(150);
        } else {
            link.fadeOut(150);
        }
    });

    // On click get to top
    link.click(function(){
        $("html, body").animate({ scrollTop: 0 }, 300);
        return false;
    });
};</code></pre>
    <!-- END Javascript Syntax -->

    <!-- PHP Syntax -->
    <h3 class="page-header">PHP <small>Example Code</small></h3>

    <pre class="line-numbers remove-margin"><code class="language-php">&lt;?php
// Comment
class Test {
    function home() {
        // ...
    }
}
?&gt;</code></pre>
    <!-- END PHP Syntax -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>
