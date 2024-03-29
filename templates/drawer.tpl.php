

<nav id="drawer" class="menu menu-flyout menu-flyout-left">
    
    <div class="user">

            <!-- <div class="user-info-top">Username1234</div> -->
            <div class="user-body">
                <!-- <i class="fa fa-user user-pic"></i> -->
                <div class="user-info-side"></div>
            </div>

    </div>

    <ul id="sidebar-links" class="sidebar-links">
						
        <li id="home" class="side-menu-item">
            <a href="/home"><i class="fas fa-home" aria-hidden="true"></i>home</a>
        </li>

        <li id="search" class="side-menu-item">
            <a href="/search"><i class="fas fa-magnifying-glass" aria-hidden="true"></i>search</a>
        </li>


        <li id="ocdla-org" class="side-menu-item">
            <a target="_new" href="<?php print ORG_URL; ?>">
                <i class="fas fa-solid fa-building" aria-hidden="true"></i>ocdla.org</a>
        </li>

        <li id="library-of-defense" class="side-menu-item">
            <a target="_new" href="<?php print LOD_URL; ?>">
                <i class="fas fa-solid fa-scale-balanced" aria-hidden="true"></i>library of defense</a>
        </li>



        <li id="legal-resource-library" class="side-menu-item">
            <a href="/legal-resource-library">
                <i class="fas fa-solid fa-book-bookmark" aria-hidden="true"></i>legal resource library</a>
        </li>

        <!-- <li id="xml" class="side-menu-item"><a href="/repository/product2"><i class="fas fa-home" aria-hidden="true"></i>xml</a></li> -->
       
        <!--<li class="side-menu-item"><i class="fas fa-people-arrows fa-2x"></i><a href="/covid" title="How OCDLA is pivoting to meet COVID-19 challenges.">covid-19</a></li>-->

        <!--<li class="side-menu-item"><i class="fas fa-scroll"></i><a href="/documents" title="OCDLA motion bank">motion bank</a></li>-->

        <!--<li class="side-menu-item"><i class="fas fa-book-open"></i><a href="/user/documents" title="Read your publications">my publications</a></li>-->

        <!--<li class="side-menu-item"><i class="fas fa-calendar-day fa-2x" aria-hidden="true"></i><a href="/events">events</a></li>-->

        <li id="jobs" class="side-menu-item">
            <a href="/jobs"><i class="fas fa-briefcase" aria-hidden="true"></i>jobs</a>
        </li>

        <li id="car" class="side-menu-item">
            <a href="/car/list"><i class="fas fa-database" aria-hidden="true"></i>case reviews</a>
        </li>

        <!--<li class="side-menu-item"><i class="fas fa-map-pin fa-2x" aria-hidden="true"></i><a href="/maps">maps</a></li>-->

        <!--<li class="side-menu-item"><i class="fas fa-video fa-2x" aria-hidden="true"></i><a href="/videos">videos</a></li>-->

        <li id="member" class="side-menu-item">
            <a href="/directory/members"><i class="fas fa-user-friends" aria-hidden="true"></i>member directory</a>
        </li>
        
        <li id="expert" class="side-menu-item">
            <a href="/directory/experts"><i class="fas fa-user-friends" aria-hidden="true"></i>expert directory</a>
        </li>

        <!--<li class="side-menu-item"><i class="fas fa-comment-dots fa-2x" aria-hidden="true"></i><a href="/feedback">feedback</a></li>-->

        <li class="side-menu-item">
            <a href="<?php print ORG_URL . "/contact-us"; ?>" target="_new"><i class="fas fa-mobile-alt" aria-hidden="true"></i>contact us</a>
        </li>
        

    </ul>



    <ul>

        <?php
            function isConstant($link) {
                // "const:STORE_URL"
                $parts = explode("const:", $link);
                
                return count($parts) > 1;
            }

            function parseConstant($link) {
                $parts = explode("const:", $link);
                $const = $parts[1];
                if(!defined($const)) throw new \Exception("PHP_CONST is not defined.");

                return constant($const);
            }
            if(is_array($secondary_links)) {
                
                foreach($secondary_links as $link) {
                    $href = isConstant($link["href"]) ? parseConstant($link["href"]) : $link["href"];
                    $link["href"] = $href;
                    print "<li class='side-menu-item menu-secondary-item'>" . html("a", $link) . "</li>";
                }
            }
        ?>

    </ul>



</nav>
