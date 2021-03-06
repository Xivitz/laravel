
    <div class="carousel">
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="" contenteditable="false"></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active" contenteditable="false"></li>
                <li data-target="#myCarousel" data-slide-to="2" class="" contenteditable="false"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item" style="">
                    <img src="/img/1.jpg" alt="" class="">
                    <div class="carousel-caption">
                        <h4 class="">First Slide Title</h4>
                        <p class="">
                            Description for First Slide, this First Slide.
                        </p>
                    </div>
                </div>
                <div class="item active">
                    <img src="/img/2.jpg" alt="" class="">
                    <div class="carousel-caption">
                        <h4 class="">Second Slide Title</h4>

                        <p class="">
                            Description for Second Slide, this is Second Slide.
                        </p>
                    </div>
                </div>
                <div class="item" style="">
                    <img src="/img/3.jpg" alt="" class="">
                    <div class="carousel-caption">
                        <h4 class="">Third Slide Title</h4>

                        <p class="">
                            Description for Third Slide, this is Third Slide.
                        </p>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>


<script>

    $('#myCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });</script>

<style>
    .carousel-inner > .item > img, .carousel-inner > .item > a > img {
        display: block;
        height: 400px;
        min-width: 100%;
        width: 100%;
        max-width: 100%;
        line-height: 1;
    }
</style>