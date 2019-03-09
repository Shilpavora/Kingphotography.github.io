<?php
require('Header.php');
include('Connection.php');
$obj=new con_data();
?>
    <!-- about
       ================================================== -->
    <section id="about" class="s-about target-section" style="background-color: powderblue">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h3>About</h3>
                <h1>More About Me</h1>
                <p class="lead"><q>Photography is a very important part of my space.In short,Photography is a passion that I am working on for some time.</q></p>
            </div>
        </div>

        <div class="row about-content">

            <div class="col-six tab-full left">
                <h3>Jigar</h3>

                <p>I was born in August 1998,Ahmedabad.Photography is a hobby since the 16 years of age.Passionate as I was I mostly learned by just taking and anlysing photos without lots of knowledge from the books. The self learning and exploring method still makes it just more interesting for me.
                    From wedding to Family portraits,commercial works or fine art,Birthday celebration, King photogrphy is sure to make your photos memorable.

                </p>

                <p>
                I am also good in Graphic design.I am able to design logo,print ads,brochures and animated graphics.I provide my insight as a designer,as wll as present a vast varity of illustration and photography skills.My work is vibrant and bold in colors.
                </p>
                <p>
                    For all general inquiry and booking please contact me.
                </p>
            </div>

            <div class="col-six tab-full right">
                <h3>I've Got Some skills.</h3>

                <ul class="skill-bars">
                    <li>
                        <div class="progress percent90"><span>95%</span></div>
                        <strong>Photography</strong>
                    </li>
                    <li>
                        <div class="progress percent90"><span>95%</span></div>
                        <strong>Photoshop</strong>
                    </li>
                    <li>
                        <div class="progress percent85"><span>85%</span></div>
                        <strong>Coral Draw</strong>
                    </li>
                    <li>
                        <div class="progress percent70"><span>70%</span></div>
                        <strong>Illustrater</strong>
                    </li>
                    <li>
                        <div class="progress percent95"><span>75%</span></div>
                        <strong>Video Editing</strong>
                    </li>
                    <li>
                        <div class="progress percent75"><span>70%</span></div>
                        <strong>HTML</strong>
                    </li>

                </ul>
            </div>

        </div> <!-- end about-content -->

        <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="RESUME_jigar.pdf" class="btn btn--primary full-width">Download My CV</a>
            </div>
            <div class="col-six tab-full right">
                <a href="#0" class="btn full-width">Hire Me Now</a>
            </div>

        </div> <!-- end about-content buttons -->

    </section> <!-- end about -->
    <!-- works
       ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Portfolio</h3>
                <h1>See My Latest Photos.</h1>

                </div>
        </div>
        <div class="row masonry-wrap">
            <div class="masonry">
                <?php
                    $i=1;
                    $port_qry= "SELECT * FROM Portfolio";
                    $port_res= $obj->run_qry($port_qry);
                    while($port_row=mysqli_fetch_array($port_res)){
                ?>
                <div class="masonry__brick">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="<?php echo $port_row['Image']; ?>" class="thumb-link" title="Lighthouse" data-size="1050x700">
                                <img src=""<?php echo $port_row['Image']; ?>
                                     srcset="<?php echo $port_row['Image']; ?> 1x, <?php echo $port_row['Image']; ?> 2x" alt="">
                                <span class="shadow-overlay"></span>
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                             <!--   Lighthouse-->
                            </h3>
                            <p class="item-folio__cat">
                                <?php echo $port_row['Image_name']; ?>
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="im im-link"></i>
                        </a>

                        <div class="item-folio__caption">
                           <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>-->
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->
                        <?php }
                        $i++;
                        ?>
        </div>
            </div>

    </section> <!-- end works -->

    <!-- testimonials
    ================================================== -->
    <section id="testimonial" class="s-testimonials target-section">
        <div>

            <div class="overlay"></div>

            <div class="row testimonials-header">
                <div class="col-full">
                    <h1 class="h02">What People Say.</h1>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="images/avatars/Samir3.JPG" alt="Author image" class="testimonials__avatar">
                        <p>Jigar is a wonderful photographer that we would not hesitate to recommend to any one.He made us so comfortable and was the most perfect photographer.
                            The only problem we hve encountered is trying to choose our favourite,because there are just so many amazing shots.<br>Thank you so much Jigar! You captured our day perfectly.</p>
                        <div class="testimonials__author h06">
                            Samir

                        </div>
                    </div>

                    <div class="testimonials__slide">
                        <img src="images/avatars/IMG_0501.jpg" alt="Author image" class="testimonials__avatar">
                        <p>We LOVE how our photos turned out! Jigar is amazing and incredibly professional,organized,friendly,and so easy to work with.It was great to have a photographer we could trust,and we are so thankful that we found Jigar - nobody could have done a better job capturing one of the most special moments of our live.<br>Thank you!!!</p>
                        <div class="testimonials__author h06">
                            Yash

                        </div>
                    </div>

                    <div class="testimonials__slide">
                        <img src="images/avatars/IMG_16234.JPG" alt="Author image" class="testimonials__avatar">
                        <p>Jigar is such a fun, comfortable person,which helps the subjects to relax and have fun. It shows in hi potos! He knows exactly the perfact angles and positions for beatiful and flattering shots. He was also very patient and accommodating of our large,boisterous family and was able to capture everyone looking their best,which was really a miracle! I am so glad we hired Jigar.</p>
                        <div class="testimonials__author h06">
                            Alpa

                        </div>
                    </div>

                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end s-testimonials -->
    </section>
    <!-- testimonials
           ================================================== -->
    <section id="testimonial" class="s-testimonials target-section" style="background-image: none; background-color: peachpuff">

        <div>

            <div class="row testimonials-header">
                <div class="col-full">
                    <h1 class="h02" style="color: black">Instagram post</h1>
                </div>
            </div>


            <!-- #region Jssor Slider Begin -->
            <!-- Generator: Jssor Slider Maker -->
            <!-- Source: https://www.jssor.com -->
            <script src="Small%20slider/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jssor_1_slider_init = function() {

                    var jssor_1_options = {
                        $AutoPlay: 1,
                        $AutoPlaySteps: 5,
                        $SlideDuration: 160,
                        $SlideWidth: 200,
                        $SlideSpacing: 3,
                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$,
                            $Steps: 5
                        },
                        $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                        }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 980;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
            <style>
                /*jssor slider loading skin spin css*/
                .jssorl-009-spin img {
                    animation-name: jssorl-009-spin;
                    animation-duration: 1.6s;
                    animation-iteration-count: infinite;
                    animation-timing-function: linear;
                }

                @keyframes jssorl-009-spin {
                    from { transform: rotate(0deg); }
                    to { transform: rotate(360deg); }
                }

                /*jssor slider bullet skin 057 css*/
                .jssorb057 .i {position:absolute;cursor:pointer;}
                .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
                .jssorb057 .i:hover .b {stroke-opacity:.7;}
                .jssorb057 .iav .b {stroke-opacity: 1;}
                .jssorb057 .i.idn {opacity:.3;}

                /*jssor slider arrow skin 073 css*/
                .jssora073 {display:block;position:absolute;cursor:pointer;}
                .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
                .jssora073:hover {opacity:.8;}
                .jssora073.jssora073dn {opacity:.4;}
                .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
            </style>
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
<?php
$i=1;
$insta_qry="SELECT * FROM Instagram";
$insta_res=$obj->run_qry($insta_qry);
while($insta_row=mysqli_fetch_array($insta_res)) {
    ?>

                    <div data-p="43.75">
                        <img data-u="image" src="<?php echo $insta_row['Image']; ?>" />
                    </div>

                <?php }
                $i++;
                ?>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:16px;height:16px;">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                        </svg>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
                    </svg>
                </div>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
            <!-- #endregion Jssor Slider End -->

        </div> <!-- end s-testimonials -->
    </section>

    <!-- s-stats
       ================================================== -->
    <section id="contact" class="s-contact target-section" style="background-image: url('images/black.jpg'); background-size: cover;opacity: 0.85">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-eight">
                <h3>Contact</h3>
                <h1>Say Hello.</h1>
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight tab-full contact__form">
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>

                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" aria-required="true" class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                        </div>
                        <div class="form-field">
                            <button type="submit" class="full-width btn--primary" name="btn_submit" id="btn_submit">Submit</button>
                            <div class="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div>

                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div>

        </div>
    </section> <!-- end s-contact -->
<?php
if(isset($_POST['btn_submit']))
{
    $name=$_POST['contactName'];
    $email=$_POST['contactEmail'];
    $subject=$_POST['contactSubject'];
    $message=$_POST['contactMessage'];

    $con_qry="INSERT INTO contact_us(Name,Email_ID,Subject,Message) VALUE('".$name."','".$email."','".$subject."','".$message."')";

    var_dump($con_qry);
    $con_res=$obj->run_qry($con_qry);
    if($con_res)
    {
        header("location:Home.php");
    }
}
?>



<?php

require('Footer.php');
?>