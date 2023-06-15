<?php 
/* 
Template Name: Home
Template Post Type: page
*/
get_header();
?>
    <section class="introdution">
        <!-- Slider main container -->
        <div class="swiper slider_banner">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php while (have_rows('slider_backgrounds')):the_row();?>
                <?php $photo = get_sub_field('slider_background');?>
                    <div class="swiper-slide" style="background-image: url(<?= $photo['url'] ?>);">
                        
                        <!-- <img src="<?= $photo['url'] ?>" alt="<?php echo $photo['alt']; ?>"> -->
                    </div>
                <?php endwhile; ?>
                </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="banner_content">
            <div class="description">
                <h1><?php the_field('heading');?></h1>
                <p class="subtitle"><?php the_field('subtitle');?></p>
                <div class="button-w">
                    <a class="popmake-72"><?php the_field('button_text');?></a> 
                </div>
                <ul class="advantages">
                    <?php while (have_rows('advantages')):the_row();?>
                        <li>
                            <img class="tick" src="/wp-content/themes/safari-tanzania/img/tick.png" alt="SAFARI tick">
                            <?php the_sub_field('advantage');?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>

        
    

    <section class="cost_calculation" id="top_destinations">
        <div class="indent container">
            <div class="row">
                <div class="col-6 photo">
                    <?php $img = get_field('photo');?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                </div>
                <div class="col-6">
                    <p class="description_of_the_subtitle"><?php the_field('the_subtitle_of_the_calculator');?></p>
                    <h2 class="description_title"><?php the_field('calculator_title');?></h2>
                    <div class="specifications">
                        <div class="row">
                            <div class="col-6">
                                <h3><?php the_field('square');?></h3>
                                <p><?php the_field('area_information');?></p>
                            </div>
                            <div class="col-6">
                                <h3><?php the_field('percentage_of_parks');?></h3>
                                <p><?php the_field('information_about_parks');?></p>
                            </div>
                        </div>
                        <div class="for_the_mobile_version">
                            <div class="row">
                                <div class="col-6">
                                    <h3><?php the_field('number_of_plant_and_animal');?></h3>
                                    <p><?php the_field('species_of_animals');?></p>
                                </div>
                                <div class="col-6">
                                    <h3><?php the_field('species_number_of_bird_species');?></h3>
                                    <p><?php the_field('species_of_birds');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="calculator">
                        <h4 class="name_calculator"><?php the_field('name_of_the_calculator');?></h4>
                        <div class="row">
                            <div class="col-4">
                                <input class="input_num_1" type="number">
                            </div>
                            <div class="col-4">
                                <select name="arithmetic_operations" class="select_sim">
                                    <option value="+" selected>+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <input class="input_num_2" type="number">
                            </div>
                        </div>
                        <p>Result: <span class="calc_res"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>