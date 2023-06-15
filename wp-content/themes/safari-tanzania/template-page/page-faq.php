<?php 
/* 
Template Name: FAQ
Template Post Type: page
*/
get_header();
?>

    <section class="recommendations">
        <div class="indent container">
            <div class="row">
                <div class="col-5">
                    <p><?php the_field('subtitle_faq');?></p>
                    <h1><?php the_field('faq_title');?></h1>
                </div>
                <div class="col-7">
                    <?php while (have_rows('additional_information')):the_row();?>
                        <div class="council">
                            <h3 class="title"><?php the_sub_field('additional_information_header');?></h3>
                            <p class="disclosure"><?php the_sub_field('description_of_additional_information');?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cost_calculation" id="top_destinations">
        <div class="indent container">
            <div class="row">
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
                <div class="col-6 photo">
                    <?php $img = get_field('photo');?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>