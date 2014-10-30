


<div class="our_work">
        <div class="title">
          <h2 class="blue"><?php echo of_get_option('recent_work'); ?></h2>
        </div>
        <div id="middle" class="cols2 sidebar_left box_white">
          <div class="content" role="main">
            <article class="post-detail">
              <div class="entry">
                <div class="work-carousel">
                  <div class="work-carousel-head"> <a class="prev" id="work-carousel-prev" href="#" ><span>prev</span></a> <a class="next" id="work-carousel-next" href="#"><span>next</span></a> </div>
                  <div class="carousel_content">
                    <div class="caroufredsel_wrapper" >
                      <ul id="work-carousel" >
                        <li>
                        <?php  if(of_get_option('recent1')){ ?>
                          <div class="work">
                            <div class="main">
                           
                            
                              <div class="view view-seventh"> <img  src="<?php echo of_get_option('recent1'); ?>" alt="<?php echo of_get_option('recenttitle1'); ?>" />
                            
                                <div class="mask">
                                <?php  if(of_get_option('recenttitle1')){ ?>
                                  <h2><?php echo of_get_option('recenttitle1'); ?></h2>
                                  <?php } ?>
                                  <p><?php echo of_get_option('recentdesc1'); ?></p>
                                  <a href="<?php echo of_get_option('recenturl1'); ?>" class="info">Read More</a> </div>
                              </div>
                            </div>
                            <p class="port"><a href="<?php echo of_get_option('recenturl1'); ?>"><?php echo of_get_option('recenttitle1'); ?><a></p>
                          </div>
                        </li>
                        <li>
						 <?php } ?>
                         
				<?php  if(of_get_option('recent2')){ ?>		
                          <div class="work">
                            <div class="main">
                              
                              <div class="view view-seventh"> <img  src="<?php echo of_get_option('recent2'); ?>" alt="<?php echo of_get_option('recenttitle2'); ?>" />
                              
                               <div class="mask">
                                <?php  if(of_get_option('recenttitle2')){ ?>
                                  <h2><?php echo of_get_option('recenttitle2'); ?></h2>
                                  <?php } ?>
                                  <p><?php echo of_get_option('recentdesc2'); ?></p>
                                  <a href="<?php echo of_get_option('recenturl2'); ?>" class="info">Read More</a> </div>
                              </div>
                            </div>
                            <p class="port"><a href="<?php echo of_get_option('recenturl2'); ?>"><?php echo of_get_option('recenttitle2'); ?></a></p>
                          </div>
                        </li>
                        <li>
						
						 <?php } ?>
                         
                        <?php  if(of_get_option('recent3')){ ?>	
                          <div class="work">
                            <div class="main">
                              
                              <div class="view view-seventh"> <img  src="<?php echo of_get_option('recent3'); ?>" alt="<?php echo of_get_option('recenttitle3'); ?>" />
                              
                               <div class="mask">
                                <?php  if(of_get_option('recenttitle3')){ ?>
                                  <h2><?php echo of_get_option('recenttitle3'); ?></h2>
                                  <?php } ?>
                                  <p><?php echo of_get_option('recentdesc3'); ?></p>
                                  <a href="<?php echo of_get_option('recenturl3'); ?>" class="info">Read More</a> </div>
                              </div>
                            </div>
                            <p class="port"><a href="<?php echo of_get_option('recenturl3'); ?>"><?php echo of_get_option('recenttitle3'); ?></a></p>
                          </div>
                        </li>
                        <li >
						<?php } ?>
                        
                        <?php  if(of_get_option('recent4')){ ?>	 
                        
                          <div class="work">
                            <div class="main">
                              
                              <div class="view view-seventh"> <img  src="<?php echo of_get_option('recent4'); ?>" alt="<?php echo of_get_option('recenttitle4'); ?>" />
                              
                               <div class="mask">
                                <?php  if(of_get_option('recenttitle4')){ ?>
                                  <h2><?php echo of_get_option('recenttitle4'); ?></h2>
                                  <?php } ?>
                                  <p><?php echo of_get_option('recentdesc4'); ?></p>
                                  <a href="<?php echo of_get_option('recenturl4'); ?>" class="info">Read More</a> </div>
                              </div>
                            </div>
                            <p class="port"><a href="<?php echo of_get_option('recenturl4'); ?>"><?php echo of_get_option('recenttitle4'); ?></a></p>
                          </div>
                        </li>
                        <li >
						
						<?php } ?>
                        
                        <?php  if(of_get_option('recent5')){ ?>	 
                         <div class="work">
                            <div class="main">
                              
                              <div class="view view-seventh"> <img  src="<?php echo of_get_option('recent5'); ?>" alt="<?php echo of_get_option('recenttitle5'); ?>" />
                              
                               <div class="mask">
                                <?php  if(of_get_option('recenttitle5')){ ?>
                                  <h2><?php echo of_get_option('recenttitle5'); ?></h2>
                                  <?php } ?>
                                  <p><?php echo of_get_option('recentdesc5'); ?></p>
                                  <a href="<?php echo of_get_option('recenturl5'); ?>" class="info">Read More</a> </div>
                              </div>
                            </div>
                           
                            <p class="port"><a href="<?php echo of_get_option('recenturl5'); ?>"><?php echo of_get_option('recenttitle5'); ?></a></p>
                          </div>
                        </li>
                       
                 <?php } ?>
                    
                         
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            </div></div>