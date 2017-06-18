<ul class="nav nav-pills">
    <li class="active">
        <a href="#new-mods" data-toggle="tab">All Mods</a>
    </li>
    <li><a href="#popular-mods" data-toggle="tab">Popular Mods</a>
    </li>
    <li><a href="#featured-mods" data-toggle="tab">Featured Mods</a>
    </li>
</ul>
<div class="tab-content clearfix">
    <div id="new-mods active" class="tab-pane">
        <ul class="hover-block">
            <?php
            $listmod = $classNews->getmodzone('mod', 8, 'all');
            while ($row = mysql_fetch_array($listmod)) {
            $linkmod = $base['url'] . "mod/" . $row['mods_url'];
            if ($row['mods_pic1'] == null) {
                $img_thumb = "/res/thumbnails/default_mod.png";
            } else {
                $img_thumb = $row['mods_pic1'];
            }
            $img_thumb = "http://cxg2qwrn.cloudimg.io/s/width/222/" . $img_thumb;
            ?>
            <li class="modzone">
                <a href="<?php echo $linkmod; ?>">
                    <!-- Image -->
                    <img class="img-responsive" src="<?php echo $img_thumb; ?>"
                         alt="<?php echo $row['mods_seo']; ?>"/>
                    <!-- Content with background color Class -->
                    <div class="hover-content-modzone b-orange">
                        <h6><?php echo $row['mods_name']; ?></h6>
                        <?php echo $row['mods_des']; ?>
                    </div>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
        <br/>
        <center><a href="http://gamexmod.com/viewmore/mod" target=_blank>Load More >></a></center>
    </div>

    <div id="popular-mods" class="tab-pane">
        <ul class="hover-block">
            <?php
            $listmod = $classNews->getmodzone('update', 8, 'all');
            while ($row = mysql_fetch_array($listmod)) {
            $linkmod = $base['url'] . "mod/" . $row['mods_url'];
            if ($row['mods_pic1'] == null) {
                $img_thumb = "/res/thumbnails/default_mod.png";
            } else {
                $img_thumb = $row['mods_pic1'];
            }
            ?>
            <li class="modzone">
                <a href="<?php echo $linkmod; ?>">
                    <!-- Image -->
                    <img class="img-responsive" src="<?php echo $img_thumb; ?>"
                         alt="<?php echo $row['mods_seo']; ?>"/>
                    <!-- Content with background color Class -->
                    <div class="hover-content-modzone b-orange">
                        <h6><?php echo $row['mods_name']; ?></h6>
                        <?php echo $row['mods_des']; ?>
                    </div>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
        <br/>
        <center><a href="http://gamexmod.com/viewmore/update" target=_blank>Load More >></a></center>
    </div>

    <div id="featured-mods" class="tab-pane">
        <ul class="hover-block">
            <?php
            $listmod = $classNews->getmodzone('mod', 8, 'popular');
            while ($row = mysql_fetch_array($listmod)) {
            $linkmod = $base['url'] . "mod/" . $row['mods_url'];
            if ($row['mods_pic1'] == null) {
                $img_thumb = "/res/thumbnails/default_mod.png";
            } else {
                $img_thumb = $row['mods_pic1'];
            }
            ?>
            <li class="modzone">
                <a href="<?php echo $linkmod; ?>">
                    <!-- Image -->
                    <img class="img-responsive" src="<?php echo $img_thumb; ?>"
                         alt="<?php echo $row['mods_seo']; ?>"/>
                    <!-- Content with background color Class -->
                    <div class="hover-content-modzone b-orange">
                        <h6><?php echo $row['mods_name']; ?></h6>
                        <?php echo $row['mods_des']; ?>
                    </div>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>