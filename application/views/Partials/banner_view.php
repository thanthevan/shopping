    <!--Slider Area Start-->
        <div class="slider-area">
            <div class="preview-2">
                <div id="nivoslider" class="slides">  
                  <?php foreach ($slide as $key => $value): ?>  
                    <?php $i=1; ?>
                    <a href="#"><img src="<?php echo base_url().IMG_SLIDE_PATH.$value['imgpath']; ?>" title="<?php echo '#slider-1-caption'.$i ;?>"/></a>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </div> 
               <?php foreach ($slide as $k => $v): ?>
                     <?php $j=1; ?>
                <div id="<?php echo 'slider-1-caption'.$j;?>" class="nivo-html-caption nivo-caption">
                    <div class="timethai" style=" 
                        position:absolute;
                        bottom:0;
                        left:0;
                        background-color:rgba(224, 53, 80, 0.6);
                        height:3px;
                        -webkit-animation: myfirst 5000ms ease-in-out;
                        -moz-animation: myfirst 5000ms ease-in-out;
                        -ms-animation: myfirst 5000ms ease-in-out;
                        animation: myfirst 5000ms ease-in-out;
                        ">
                    </div>
                    <div class="<?php echo 'banner-content slider-'.$j.' hidden-xs';?>">
                        <div class="text-content">
                            <h1 class="title1"><span><?php echo $v['title1']; ?></span></h1>                                        
                            <h2 class="title2" ><span><?php echo $v['title2']; ?></span></h2>                                                                   <h3 class="title3"><?php echo $v['desctiption']; ?></h3>                                                                                                                                                 <div class="banner-readmore">
                                <a href="#" title="Read more">Xem ngay</a> 
                            </div>
                        </div>
                    </div>
                  <?php $j++; ?>
                <?php endforeach; ?> 

            </div>
                </div> 
          
            </div>
                    </div>
        </div>
        <!--End of Slider Area-->
        <!--Banner Area Start-->
        <div class="banner-area">
            <div class="container">
                <div class="section-padding">
                    <div class="row">
                    <?php foreach ($banner as $k1 => $v1): ?>  
                    <?php if($v1['access']==1): ?>
                         <?php unset($banner[$k1]); ?>
                        <div class="col-md-5 col-sm-5">
                            <div class="banner-container">
                                <a href="#">
                                    <img src="<?php echo base_url().IMG_BANNER_PATH.$v1['imgpath']; ?>" alt="">
                                </a>    
                                <div class="banner-text">
                                    <h3><?php echo $v1['title'] ?></h3>
                                    <p><?php echo $v1['description']; ?></p>
                                    <a href="#">Xem sản phẩm</a>
                                </div>
                            </div>
                        </div>
                       
                    <?php endif; ?>
                    <?php endforeach; ?>
                        <div class="col-md-7 col-sm-7">
                            <div class="row">
                             <?php foreach ($banner as $k2 => $v2): ?>  
                                <div class="col-md-6 col-sm-6">
                                    <div class="banner-box">
                                        <a href="">
                                            <img src="<?php echo base_url().IMG_BANNER_PATH.$v2['imgpath']; ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    
                    </div>
                </div>    
            </div>
        </div>

        <!--End of Banner Area-->