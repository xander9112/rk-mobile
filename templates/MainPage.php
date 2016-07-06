<section class="b-main-slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?= $imagePath; ?>/MainSlider/001.jpeg" alt="Описание изображения">
                <div class="carousel-caption">
                    Описание слайдера
                </div>
            </div>
            <div class="item">
                <img src="<?= $imagePath; ?>/MainSlider/002.jpeg" alt="Описание изображения">
                <div class="carousel-caption">
                    Описание слайдера
                </div>
            </div>
            <div class="item">
                <img src="<?= $imagePath; ?>/MainSlider/003.jpeg" alt="Описание изображения">
                <div class="carousel-caption">
                    Описание слайдера
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                  data-toggle="tab">Home</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
        </li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            home
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            profile
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">
            messages
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
            settings
        </div>
    </div>
</section>
<section class="b-video-block">
    <div class="g-title"></div>
</section>
