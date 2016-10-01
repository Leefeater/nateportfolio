<?php
  //Template Name:  Partners
  update_option('current_page_template','testing'); // <----- this adds a body class
  get_header();
?>

<div class="container">

  <section class="why-highfive-hero">
    <div class="copy">
      <h2><?php the_field('title'); ?></h2>
      <p><?php the_field('subtitle'); ?></p>
      <a class="btn solid partner-btn-top" href="<?php the_field('trial_button_target'); ?>"><?php the_field('trial_button_title'); ?></a>
    </div>
    <img src="<?php echo GET_TEMP?>/img/hp-divider.png" class="hr-hide" alt="" />
  </section>

  <section class="split-two-column why-highfive-col">
    <?php if( have_rows('split_column') ): while( have_rows('split_column') ): the_row(); ?>
      <div class="row">
        <div class="column">
          <div class="copy">
            <h4><?php the_sub_field('left_title'); ?></h4>
            <p><?php the_sub_field('left_paragraph'); ?></p>
          </div>
        </div>
        <div class="column">
          <img src="<?php the_sub_field('left_image'); ?>" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <img src="<?php the_sub_field('right_image'); ?>" alt="" />
        </div>
        <div class="column">
          <div class="copy">
            <h4><?php the_sub_field('right_title'); ?></h4>
            <p><?php the_sub_field('right_paragraph'); ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </section>
<img src="<?php echo GET_TEMP?>/img/hp-divider.png" class="hr-hide" alt="" />

<section class="equipment-awards">

    <h2><?php the_field('bottom_title_1'); ?></h2>
    <img src="<?php the_field('bottom_image_1'); ?>" alt="" />
    <img src="<?php the_field('bottom_image_2'); ?>" alt="" />

  </section>

  <section class="free-trial-blurb">

    <?php if( have_rows('bottom_button') ): while( have_rows('bottom_button') ): the_row(); ?>
    <a href="<?php the_sub_field('link'); ?>" <?php the_sub_field('new_tab'); ?> class="btn solid"><?php the_sub_field('label'); ?></a>
    <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
<?php
  //Template Name:  Partners
  update_option('current_page_template','partners'); // <----- this adds a body class
  get_header();
?>

<div class="container">

  <section class="why-highfive-hero">
    <div class="copy">
      <h2><?php the_field('title'); ?></h2>
      <p><?php the_field('subtitle'); ?></p>
      <a class="btn solid partner-btn-top" href="<?php the_field('trial_button_target'); ?>"><?php the_field('trial_button_title'); ?></a>
    </div>
    <img src="<?php echo GET_TEMP?>/img/hp-divider.png" class="hr-hide" alt="" />
  </section>

  <section class="split-two-column why-highfive-col">
    <?php if( have_rows('split_column') ): while( have_rows('split_column') ): the_row(); ?>
      <div class="row">
        <div class="column">
          <div class="copy">
            <h4><?php the_sub_field('left_title'); ?></h4>
            <p><?php the_sub_field('left_paragraph'); ?></p>
          </div>
        </div>
        <div class="column">
          <img src="<?php the_sub_field('left_image'); ?>" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <img src="<?php the_sub_field('right_image'); ?>" alt="" />
        </div>
        <div class="column">
          <div class="copy">
            <h4><?php the_sub_field('right_title'); ?></h4>
            <p><?php the_sub_field('right_paragraph'); ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </section>
<img src="<?php echo GET_TEMP?>/img/hp-divider.png" class="hr-hide" alt="" />

<section class="equipment-awards">

    <h2><?php the_field('bottom_title_1'); ?></h2>
    <img src="<?php the_field('bottom_image_1'); ?>" alt="" />
    <img src="<?php the_field('bottom_image_2'); ?>" alt="" />

  </section>

  <section class="free-trial-blurb">

    <?php if( have_rows('bottom_button') ): while( have_rows('bottom_button') ): the_row(); ?>
    <a href="<?php the_sub_field('link'); ?>" <?php the_sub_field('new_tab'); ?> class="btn solid"><?php the_sub_field('label'); ?></a>
    <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
