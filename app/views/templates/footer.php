<!--Footer-->
<footer style="font-size: 15px;" class="pt-4 mt-4 bg-dark text-white">
    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a id="i" target="_blanck1" href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" target="_blanck2" href="https://www.instagram.com/" class="fa fa-instagram"></a>
            </li>
            <li class="list-inline-item">
                <a id="i" target="_blanck3" href="https://www.youtube.com/" class="fab fa-youtube"></a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div style="font-size: 16px;background-color: #222222" class="footer-copyright py-3 text-center ">
        © 2018 Copyright:
        <a href="http://<?=URL?>">
            searchfood.com.br
            <?php if ($route->Path == 'restaurante') { ?>
                <img height="35" src="../public/img/logo/logo.png" alt="">
            <?php } else { ?>
                <img height="35" src="public/img/logo/logo.png" alt="">
            <?php } ?>
        </a>
    </div>
    <!--/.Copyright-->
</footer>