
<div class="container">
				<header class="content-header">
					<div class="meta mb-3">
                        <span class="date"><?php the_date(); ?></span>
                         <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>'); ?>
                        <?php the_category('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>'); ?>
                        <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number()?></a>

                        <div class="post_category">
        <?php $category = get_the_category();
             $allcategory = get_the_category(); 
        foreach ($allcategory as $category) {
        ?>
           <a class="btn"><?php echo $category->cat_name;; ?></a>
        <?php 
        }
        ?>
 </div>
 
                    </span></div>
				</header>

<?php
the_content();
?>

</div>