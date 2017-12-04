<!-- This file is used to markup the administration form of the widget. -->

<style>
    a:hover{
        cursor: pointer;
    }

    .email:before{
        content:"\f0e0";
        font-family: FontAwesome;
    } 

    .tel:before{
        content:"\f095";
        font-family: FontAwesome;
    }

    .location:before{
        content:"\f041";
        font-family: FontAwesome;
    }

    a:before{
        margin-right: 8px;
    }

    .fb_page:before{
        content:"\f082";
        font-family: FontAwesome;
    }

    .insta_page:before{
        content:"\f16d";
        font-family: FontAwesome;
    }

    .gg_page:before{
        content:"\f0d4";
        font-family: FontAwesome;
    }
</style>



    <p><a class="email"><?php echo ' '. $email; ?> </a> </p>

    <p><a class="tel"><?php echo ' '. $tel_number; ?> </a></p>

    <p><a class="location"><?php echo ' '. $location; ?> </a></p>

    <p class="social">

      <a class="fb_page" href=<?php echo 'http://'. $fb_page ?> target="_blank"></a>

      <a class="insta_page" href=<?php echo 'http://'. $insta_page ?> target="_blank"></a>

      <a class="gg_page" href=<?php echo 'http://'. $gg_page ?> target="_blank"></a>
    </p>
