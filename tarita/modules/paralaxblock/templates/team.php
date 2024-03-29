<?php
/*
type: layout
name: Team block
description: Paralax block
*/
$bg= get_option('bgpic',$params['id']);
?>
<div class="parallaxBg" <?php if ($bg): ?> style="background: url('<?php print $bg ?>') 50% 0 repeat fixed;" <?php endif; ?>>
<div class="container content parallax-about edit " rel="field<?php print $params['id'];?>" field="field<?php print $params['id'];?>">
    <div class="title-box-v2">
        <h2>About our company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="banner-info light margin-bottom-10">
                <i class="rounded-x fa fa-magic"></i>
                <div class="overflow-h">
                    <h3>Our mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt sit amet dui auctor pellentesque. Nulla ut posuere purus.</p>
                </div>
            </div>
            <div class="banner-info light margin-bottom-10">
                <i class="rounded-x fa fa-magic"></i>
                <div class="overflow-h">
                    <h3>Our vision</h3>
                    <p>Phasellus vitae rhoncus ipsum. Aliquam ultricies, velit sit amet scelerisque tincidunt, dolor neque consequat est, a dictum felis metus eget nulla.</p>
                </div>
            </div>
            <div class="banner-info light margin-bottom-10">
                <i class="rounded-x fa fa-thumbs-o-up"></i>
                <div class="overflow-h">
                    <h3>We are good at ...</h3>
                    <p>Nunc ac ligula ut diam rutrum porttitor. Integer et neque at lacus placerat pretium eu ac dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                </div>
            </div>
            <div class="margin-bottom-20"></div>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="<?php print TEMPLATE_URL;?>assets/img/mockup/2.png" alt="">
        </div>
    </div>
</div>
</div>