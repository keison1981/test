<div class="sub">
            



<aside id="adsense" class="mb_40">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- レクタングル -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518311722061982"
     data-ad-slot="3057350511"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
 </aside>

dvvdvdvdv
<!--
  <div id="search" class="mt_30">
  <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"><label class="hidden" for="s"><?php _e('', 'kubrick'); ?></label>
      <input type="text" value="<?php the_search_query(); ?>"  name="s" id="s" />
      <input type="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/searchbtn.gif" alt="検索" id="searchsubmit"  value="<?php _e('Search', 'kubrick'); ?>" />
      </form>
  </div>
-->



  <?php dynamic_sidebar(); ?>




            <div id="widget1" class="mt_20">
                <div id="widget1_tit">最近の記事</div>
                
                    <ul class="side_news_list">
                      
                     <?php query_posts('showposts=5'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                      
                             
                    <li><a href="<?php the_permalink(); ?>">
                        <div class="side_news_tn"><?php the_post_thumbnail('thumb70'); ?></div>
                        <div class="side_news_tit"><?php the_title(); ?></div>
                        <div class="clear"></div>
                        </a></li>
                        
                  <?php endwhile; endif; ?>      
                  
                    </ul>
                
                <p class="past_posts"><a href="<?php echo home_url(); ?>/information/">>>過去の記事一覧</a></p>
                
               </div><!-- end widget1 -->
 
			
            


          <?php dynamic_sidebar(2); ?>

         
          <div class="fb-page" data-href="https://www.facebook.com/skygold.Co.Ltd/" data-tabs="timeline" data-width="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/skygold.Co.Ltd/"><a href="https://www.facebook.com/skygold.Co.Ltd/">スカイゴールド株式会社</a></blockquote></div></div>
          
      


  <div class="fixnav">


  <?php $posts = get_posts(array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      'meta_key' => 'views',
      'orderby' => 'meta_value_num',
  )); ?>

              <div id="widget1" class="mt_20">


                  <div id="widget1_tit">人気の記事</div>
                  
                    <ul class="side_news_list">
        
                        <?php foreach($posts as $post) : ?>
                               
                      <li class="ranking">

                          <a href="<?php the_permalink(); ?>"><!-- パーマリンク -->
                          <div class="side_news_tn"><?php the_post_thumbnail('thumb70'); ?></div><!-- サムネール -->
                          <div class="side_news_tit"><?php the_title(); ?></div><!-- タイトル -->
                          <div class="pv"><?php echo get_post_meta($post->ID, 'views', true); ?> views</div><!-- ページビュー -->
                          <div class="clear"></div>
                          </a>

                      </li>
                          
                          <?php endforeach; ?>
                    
                    </ul>
                  
                 
              </div><!-- end widget1 -->

  </div>








</div><!-- end side -->
