<?php 
  $skills = get_sub_field('skills');
?>
<section id="skills" class="skills">
  <div class="container" data-aos="fade-up">

    <div class="row skills-content">

      <div class="col-lg-6">

        <?php
          $i=0; 
          while( have_rows('skills') ): the_row();
          
          $i++;

          $skill = get_sub_field('skill');
          $value = get_sub_field('value');
        ?>

          <div class="progress">
            <span class="skill"><?php echo $skill; ?> <i class="val"><?php echo $value . '%'; ?></i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $value; ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <?php if($i === 3)  { ?>
            </div>
            <div class="col-lg-6">
          <?php } ?>

        <?php endwhile; ?>

      </div>

    </div>

  </div>
</section>