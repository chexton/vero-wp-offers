<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
    <?php if(get_query_var('name') == 'thanks') { } else {?>
      <?php dd_fblike_generate('Like Button Count') ?><div class="linkedin"><?php dd_linkedin_generate('Compact') ?></div><?php dd_google1_generate('Compact (20px)') ?><?php dd_twitter_generate('Compact','twitter_username') ?>
	  <?php } ?>
  </div><!-- #primary -->

  <?php if(get_query_var('name') == 'thanks') { } else {?>
  <div id="secondary" class="sidebar widget-area" role="complementary">
    <h1>Download This Free Guide:</h1>
    <form title="An Introductory Guide: How To Use Twitter for Business" accept-charset="UTF-8" id="hsForm_28833bd4-d1ce-4d57-a2b7-88e81377c860" class="dl-form" action="https://forms.hubspot.com/uploads/form/v2/53/28833bd4-d1ce-4d57-a2b7-88e81377c860" method="POST" enctype="multipart/form-data" novalidate="novalidate">
      <div title="Enter First Name">
        <label placeholder="Enter your First Name" style="display: block;">First Name<span class="hs-form-required"> * </span>
        </label>
        <div class="input">
          <input class="hs-input" type="text" required="required" name="firstname" value="Chris">
        </div>
      </div>
      <div title="Enter Last Name">
        <label placeholder="Enter your Last Name" style="display: block;">Last Name<span class="hs-form-required"> * </span></label>
        <div class="input">
          <input class="hs-input" type="text" required="required" name="lastname" value="Hexton">
        </div>
      </div>
      <div class="hs_email field hs-form-field smart-field" title="Enter Email (&lt;a target=&quot;_blank&quot; href=&quot;http://www.getvero.com/privacy&quot;&gt;privacy policy&lt;/a&gt;)">
        <label placeholder="Enter your Email (&lt;a href=&quot;http://www.hubspot.com/privacy-policy&quot;&gt;privacy policy&lt;/a&gt;)" style="display: block;">Email (<a href="http://getvero.com/privacy">privacy policy</a>)<span class="hs-form-required"> * </span></label>
    </div>
    <div class="input">
      <input type="email" required="required" name="email" value="chris@getvero.com">
    </div>
    <input type="hidden" name="title" value="<?php $image = get_post_meta($id, 'offer_name', true) ?>"/>
    <input type="hidden" name="redirect_on_success" value="http://offers.getvero.com/thanks?id=<?php echo get_post_meta($id, 'offer_name', true) ?>"/>
    <div class="actions"><input class="btn" type="submit" value="Download eBook Now"></div>
  </form>
  </div><!-- #secondary -->
  <?php } ?>
<?php get_footer(); ?>