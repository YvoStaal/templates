<?php

/*

type: layout
content_type: static
name: Contact Us

description: Contact us layout
position: 7
*/
?>
<link rel="stylesheet" href="<?php
print TEMPLATE_URL; ?>css/pages/page_contact.css" type="text/css" media="all">
<?php include TEMPLATE_DIR. "header.php"; ?>

<div class="container content edit" rel="contact" field="contact">
    <div class="row margin-bottom-30">
        <div class="col-md-9 mb-margin-bottom-30">
            <div class="headline"><h2>Contact Form</h2></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />
            <module type="contact_form" id="contact-form" te    mplate="default"/>
        </div><!--/col-md-9-->

        <div class="col-md-3">
            <!-- Contacts -->
            <div class="headline"><h2>Contacts</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
                <li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
            </ul>

            <!-- Business Hours -->
            <div class="headline"><h2>Business Hours</h2></div>
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                <li><strong>Saturday:</strong> 11am to 3pm</li>
                <li><strong>Sunday:</strong> Closed</li>
            </ul>

            <!-- Why we are? -->
            <div class="headline"><h2>Why we are?</h2></div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
                <li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
                <li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
            </ul>
        </div><!--/col-md-3-->
    </div><!--/row-->
</div>

<?php include TEMPLATE_DIR. "footer.php"; ?>
