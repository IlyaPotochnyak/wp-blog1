<div class="sidebar-main">
    <div class="sidebar-vidget">
        <div class="search-main">
            <form action="#" method="get">
                <input  name="s" type="text" class="search-txt" name="search" value="Поиск"
                       onfocus="if(this.value=='Поиск')this.value=''"
                       onblur="if(this.value=='')this.value='Поиск'"/>
                <input type="image" src="<?php bloginfo('template_url')?>/images/search-btn.jpg">
            </form>
        </div>
    </div>

    <?php if (!dynamic_sidebar('sidebar')) : ?>
    <span>Это область для сайдбара, добавляемого из виджетов</span>
    <?php endif;?>
<!--    <div class="sidebar-vidget">-->
<!--        <ul class="ads-main">-->
<!--            <li><a href="#"><img src="--><?php //bloginfo('template_url')?><!--/images/ads1.jpg" alt=""/></a></li>-->
<!--            <li><a href="#"><img src="--><?php //bloginfo('template_url')?><!--/images/ads2.jpg" alt=""/></a></li>-->
<!--            <li><a href="#"><img src="--><?php //bloginfo('template_url')?><!--/images/ads3.jpg" alt=""/></a></li>-->
<!--            <li><a href="#"><img src="--><?php //bloginfo('template_url')?><!--/images/ads4.jpg" alt=""/></a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="sidebar-vidget">-->
<!--        <h3>Категории</h3>-->
<!--        <ul class="side-categories">-->
<!--            <li><a href="#">Backgrounds</a></li>-->
<!--            <li><a href="#">Brushes</a></li>-->
<!--            <li><a href="#">Design Articles</a></li>-->
<!--            <li><a href="#">Fonts</a></li>-->
<!--            <li><a href="#">Free PSD Files</a></li>-->
<!--            <li><a href="#">Icons</a></li>-->
<!--            <li><a href="#">Logos</a></li>-->
<!--            <li><a href="#">Patterns</a></li>-->
<!--            <li><a href="#">Textures</a></li>-->
<!--            <li><a href="#">Tools & Utilities</a></li>-->
<!--        </ul>-->
<!--        <ul class="side-categories">-->
<!--            <li><a href="#">Backgrounds</a></li>-->
<!--            <li><a href="#">Brushes</a></li>-->
<!--            <li><a href="#">Design Articles</a></li>-->
<!--            <li><a href="#">Fonts</a></li>-->
<!--            <li><a href="#">Free PSD Files</a></li>-->
<!--            <li><a href="#">Icons</a></li>-->
<!--            <li><a href="#">Logos</a></li>-->
<!--            <li><a href="#">Patterns</a></li>-->
<!--            <li><a href="#">Textures</a></li>-->
<!--            <li><a href="#">Tools & Utilities</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="sidebar-vidget">-->
<!--        <h3>Последние записи</h3>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--        <p class="latest-post">-->
<!--            <img src="--><?php //bloginfo('template_url')?><!--/images/latest-post1.jpg" alt="">-->
<!--            <a href="#">Request a quote form PSD in 3 colors</a>-->
<!--        </p>-->
<!--    </div>-->
    <div class="sidebar-vidget">
        <div class="facebook">
            <img src="<?php bloginfo('template_url')?>/images/facbook.jpg" alt="">
        </div>

    </div>


</div>