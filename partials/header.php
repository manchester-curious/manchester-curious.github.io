<p class="show-for-small">small</p>
<p class="show-for-medium">medium</p>
<p class="show-for-large">large</p>
<p class="show-for-xlarge">xlarge</p>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left" id="mobile-menu" data-off-canvas>
            <ul class="menu-off-canvas">
                <?php include('partials/nav-links.php'); ?> 
            </ul>
        </div><!--/.off-canvas position-left-->
        <div class="off-canvas-content" data-off-canvas-content>
        <div class="title-bar">
            <div class="title-bar-left">
                <button class="menu-icon" type="button" data-open="mobile-menu"></button>
                <span class="title-bar-title">Manchester Curious</span>
            </div>
        </div>
        <div class="header-bg">
            <header>
                <div class="logo">
                    <a href="/" alt="Logo" title="Manchester Curious">Manchester Curious</a>
                </div>
                <nav>
                    <ul class="main-nav">
                        <?php include('partials/nav-links.php'); ?> 
                    </ul>
                </nav>
            </header>
        </div>