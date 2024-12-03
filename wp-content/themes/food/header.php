<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="shortcut icon" type="ico" href="https://apkafe.com/wp-content/uploads/2019/04/fav_apkafe-2.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

  <?php

  $menu = wp_get_nav_menu_items('Top Menu');
  $arrMenu = array();

  foreach ($menu as $item) {
    $key = $item->title . '---' . $item->ID;
    if ($item->menu_item_parent == 0) {
      $arrMenu[$key] = [];
    } else {
      $arrMenu[$key][] = [
        'title' => $item->title,
        'url' => $item->url,
      ];
    }
  }

  ?>

  <div style="display: contents">
    <div id="top" class="site svelte-qlls6c" vocab="https://schema.org/">
      <div id="header-wrap" class="svelte-dgiybl">
        <header class="svelte-dgiybl">
          <div class="links-container svelte-dgiybl">
            <button aria-label="open menu" class="menu-icon menu-icon--burger svelte-dgiybl">
              <svg width="33" height="28" viewBox="0 0 33 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 1.86035H31" stroke="currentColor" stroke-width="2.69767" stroke-linecap="round"></path>
                <path d="M2 14H31" stroke="currentColor" stroke-width="2.69767" stroke-linecap="round"></path>
                <path d="M2 26.1396H31" stroke="currentColor" stroke-width="2.69767" stroke-linecap="round"></path>
              </svg>
            </button>
            <a data-sveltekit-reload href="/?ref=nav" class="logo svelte-dgiybl" title="Home">
              <svg width="150" height="45" viewBox="0 0 150 45" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M4.58971 5.51367C0.565612 5.51367 0.725993 9.59609 1.3092 11.6373H5.46451V41.3806C6.8642 44.5299 13.0461 43.7135 15.9622 42.9116V28.4773H26.4598C30.4839 28.4773 30.3235 23.9575 29.7403 21.6976H15.9622V12.5121H29.5216C33.5457 12.5121 33.0937 7.84648 32.3647 5.51367H4.58971Z" fill="currentColor" stroke="currentColor" stroke-width="0.437402"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.4265 18.6356C37.1032 16.5944 42.8624 12.8181 52.4852 14.0429C64.5138 15.5738 63.2016 28.9145 62.7642 31.3203C62.7534 31.3793 62.7422 31.4425 62.7302 31.5096C62.2552 34.1722 60.6923 42.9329 47.8925 43.7862C34.7704 44.661 31.7086 36.3504 31.4899 33.2886C31.2712 30.2268 31.0525 23.2283 35.4265 18.6356ZM43.0809 23.447C44.4225 21.6112 47.925 18.9411 51.4823 22.4312C51.7197 22.664 51.927 22.9287 52.0536 23.2362C52.3483 23.9521 52.7038 25.3345 52.7038 27.3836V32.2423C52.7038 32.6479 52.675 33.0541 52.5542 33.4413C52.1609 34.702 51.1437 36.559 49.2046 37.0065C46.5178 37.6265 43.6357 37.4653 42.5886 34.8617C42.4629 34.5492 42.403 34.216 42.3659 33.8812C42.0246 30.8017 41.7569 25.1021 43.0809 23.447Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M68.7645 18.7064C70.4412 16.6652 76.2003 12.8889 85.8232 14.1137C97.8517 15.6446 96.5395 28.9853 96.1021 31.3911C96.0914 31.4501 96.0801 31.5133 96.0681 31.5804C95.5931 34.243 94.0302 43.0037 81.2305 43.857C68.1084 44.7318 65.0466 36.4212 64.8279 33.3594C64.6092 30.2976 64.3905 23.2991 68.7645 18.7064ZM76.4189 23.5178C77.7604 21.682 81.263 19.0119 84.8203 22.502C85.0576 22.7349 85.265 22.9995 85.3915 23.307C85.6862 24.0229 86.0417 25.4054 86.0417 27.4544V32.3131C86.0417 32.7187 86.0129 33.1249 85.8921 33.5121C85.4988 34.7728 84.4817 36.6298 82.5425 37.0773C79.8557 37.6973 76.9737 37.5361 75.9265 34.9325C75.8008 34.62 75.741 34.2868 75.7038 33.952C75.3625 30.8725 75.0948 25.1729 76.4189 23.5178Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M129.905 1.13955C127.791 0.629246 122.819 0.221004 119.845 2.67046V14.0429C116.783 13.6055 109.697 13.3868 105.848 16.0112C101.037 19.2917 97.1002 27.6024 99.2872 35.4756C101.474 43.3489 112.191 47.2855 120.064 38.9748V42.9115C122.397 43.6405 127.893 44.6611 131.218 42.9115C134.542 41.1618 134.061 38.2458 133.405 37.0065H130.124L129.905 1.13955ZM119.626 20.9519V34.8304C119.626 34.9619 119.568 35.0864 119.464 35.1669C117.411 36.7567 112.899 38.7854 110.004 35.0382C106.286 30.2268 110.004 21.6974 113.284 20.6039C114.393 20.396 117.07 20.109 119.286 20.5323C119.486 20.5706 119.626 20.7482 119.626 20.9519Z" fill="currentColor"></path>
                <path d="M119.845 2.67046L119.706 2.50163L119.626 2.56725V2.67046H119.845ZM129.905 1.13955L130.124 1.13822L130.123 0.967104L129.957 0.926953L129.905 1.13955ZM119.845 14.0429L119.814 14.2594L120.064 14.2951V14.0429H119.845ZM105.848 16.0112L105.725 15.8305L105.848 16.0112ZM99.2872 35.4756L99.0765 35.5341L99.2872 35.4756ZM120.064 38.9748H120.283V38.426L119.905 38.8244L120.064 38.9748ZM120.064 42.9115H119.845V43.0722L119.999 43.1202L120.064 42.9115ZM131.218 42.9115L131.319 43.105L131.218 42.9115ZM133.405 37.0065L133.598 36.9042L133.536 36.7878H133.405V37.0065ZM130.124 37.0065L129.905 37.0079L129.907 37.2252H130.124V37.0065ZM119.464 35.1669L119.331 34.994L119.464 35.1669ZM110.004 35.0382L110.177 34.9045L110.004 35.0382ZM113.284 20.6039L113.244 20.389L113.229 20.3917L113.215 20.3964L113.284 20.6039ZM119.286 20.5323L119.245 20.7471L119.286 20.5323ZM119.984 2.83928C121.422 1.65496 123.357 1.15186 125.214 1.01319C127.068 0.874704 128.817 1.10182 129.854 1.35214L129.957 0.926953C128.88 0.666977 127.085 0.434818 125.182 0.577001C123.28 0.718997 121.242 1.2365 119.706 2.50163L119.984 2.83928ZM120.064 14.0429V2.67046H119.626V14.0429H120.064ZM105.971 16.1919C107.849 14.9119 110.537 14.3145 113.16 14.0968C115.777 13.8796 118.298 14.0428 119.814 14.2594L119.876 13.8264C118.331 13.6056 115.777 13.4407 113.124 13.6609C110.476 13.8806 107.697 14.4862 105.725 15.8305L105.971 16.1919ZM99.498 35.4171C98.4189 31.5324 98.8493 27.5344 100.148 24.0985C101.447 20.66 103.61 17.8022 105.971 16.1919L105.725 15.8305C103.275 17.5008 101.064 20.4385 99.7388 23.9438C98.413 27.4517 97.9686 31.5456 99.0765 35.5341L99.498 35.4171ZM119.905 38.8244C112.144 47.0167 101.638 43.1197 99.498 35.4171L99.0765 35.5341C101.311 43.578 112.237 47.5543 120.223 39.1252L119.905 38.8244ZM120.283 42.9115V38.9748H119.845V42.9115H120.283ZM131.116 42.7179C129.507 43.5648 127.35 43.7494 125.282 43.6226C123.22 43.4963 121.281 43.0625 120.129 42.7027L119.999 43.1202C121.18 43.4894 123.155 43.9305 125.256 44.0592C127.351 44.1876 129.604 44.0077 131.319 43.105L131.116 42.7179ZM133.211 37.1089C133.521 37.693 133.791 38.6812 133.589 39.7261C133.389 40.7591 132.723 41.8718 131.116 42.7179L131.319 43.105C133.036 42.2015 133.792 40.9814 134.018 39.8092C134.243 38.6488 133.945 37.5594 133.598 36.9042L133.211 37.1089ZM130.124 37.2252H133.405V36.7878H130.124V37.2252ZM129.687 1.14088L129.905 37.0079L130.343 37.0052L130.124 1.13822L129.687 1.14088ZM119.845 34.8304V20.9519H119.408V34.8304H119.845ZM119.598 35.3398C119.758 35.2158 119.845 35.0261 119.845 34.8304H119.408C119.408 34.8977 119.378 34.9569 119.331 34.994L119.598 35.3398ZM109.831 35.1719C111.334 37.1181 113.27 37.5667 115.079 37.3206C116.876 37.0764 118.552 36.1499 119.598 35.3398L119.331 34.994C118.324 35.7737 116.718 36.6564 115.021 36.8872C113.337 37.1161 111.568 36.7055 110.177 34.9045L109.831 35.1719ZM113.215 20.3964C112.333 20.6905 111.452 21.4701 110.688 22.5149C109.921 23.5651 109.254 24.9066 108.81 26.3631C107.925 29.2674 107.91 32.687 109.831 35.1719L110.177 34.9045C108.379 32.578 108.364 29.3272 109.229 26.4906C109.66 25.0766 110.305 23.7801 111.041 22.773C111.781 21.7607 112.595 21.0641 113.353 20.8114L113.215 20.3964ZM119.327 20.3175C117.074 19.8869 114.366 20.1786 113.244 20.389L113.324 20.8189C114.421 20.6134 117.067 20.3311 119.245 20.7471L119.327 20.3175ZM119.845 20.9519C119.845 20.6484 119.635 20.3764 119.327 20.3175L119.245 20.7471C119.337 20.7647 119.408 20.848 119.408 20.9519H119.845Z" fill="currentColor"></path>
                <path d="M146.051 33.7809C141.147 32.7161 138.675 35.7146 138.041 37.4056C137.384 39.1552 138.041 41.9984 139.134 42.8732C140.228 43.748 146.351 46.1537 149.194 41.3423C151.283 37.8079 148.86 35.2324 147.039 34.1576C146.733 33.9774 146.398 33.8561 146.051 33.7809Z" fill="#F4CF35"></path>
              </svg>
            </a>
            <nav id="main-nav" class="svelte-dgiybl">
              <ul class="nav-list svelte-dgiybl">
                <?php foreach ($arrMenu as $menuID => $menuItem) { ?>
                  <?php $explode = explode('---', $menuID); ?>
                  <li class="nav-list-item open svelte-dgiybl">
                    <span class="nav-list-item__text svelte-dgiybl"><?php echo $explode[0]; ?></span>
                    <span class="caret svelte-dgiybl">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 1024 1024" class="caret">
                        <path fill="currentColor" d="M19.552 781.839c-26.080-26.080-26.080-68.364 0-94.444l445.218-445.218c12.531-12.531 29.505-19.551 47.225-19.551s34.699 7.037 47.225 19.551l445.218 445.218c26.074 26.080 26.074 68.364 0 94.444-26.097 26.080-68.375 26.080-94.444 0l-397.999-397.999-397.999 397.999c-26.080 26.080-68.364 26.080-94.444 0z"></path>
                      </svg>
                    </span>
                    <?php foreach ($menuItem as $item) { ?>
                      <ul class="dropdown svelte-dgiybl">
                        <li class="dropdown__item svelte-dgiybl">
                          <a href="<?php echo $item['url'] ?>" class="svelte-dgiybl"><?php echo $item['title'] ?>
                          </a>
                        </li>
                      </ul>
                  </li>
                <?php } ?>
              <?php } ?>
              </ul>
            </nav>
          </div>
          <div class="buttons svelte-dgiybl">
            <a aria-label="search" class="button button--search svelte-dgiybl" href="/search?ref=nav">
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M10.0780142,0 C15.091663,0 19.1560284,4.06436539 19.1560284,9.07801418 C19.1560284,11.7201597 18.0272767,14.0986712 16.2256822,15.7576398 L22.544153,22.0759308 C22.8985219,22.4302996 22.9052702,23.011836 22.5507517,23.3663545 L22.5507517,23.3663545 L22.4572086,23.4480573 C22.0993908,23.7199908 21.5886439,23.6880718 21.260328,23.3597559 L21.260328,23.3597559 L14.7580917,16.8582376 C13.3914568,17.6820838 11.7900833,18.1560284 10.0780142,18.1560284 C5.06436539,18.1560284 1,14.091663 1,9.07801418 C1,4.06436539 5.06436539,0 10.0780142,0 Z M10.0780142,1.81560284 C6.06709515,1.81560284 2.81560284,5.06709515 2.81560284,9.07801418 C2.81560284,13.0889332 6.06709515,16.3404255 10.0780142,16.3404255 C14.0889332,16.3404255 17.3404255,13.0889332 17.3404255,9.07801418 C17.3404255,5.06709515 14.0889332,1.81560284 10.0780142,1.81560284 Z" id="path-search"></path>
                </defs>
                <g id="icons-/-search" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <mask id="mask-search" fill="white">
                    <use xlink:href="#path-search"></use>
                  </mask>
                  <use fill="currentColor" xlink:href="#path-search"></use>
                  <g id="Group" mask="url(#mask-search)" fill="currentColor">
                    <g id="color-/-primary-/-black">
                      <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                    </g>
                  </g>
                </g>
              </svg>
            </a>
            <a aria-label="saves" class="button button--saves svelte-dgiybl" href="/saves?ref=nav">
              <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.0222168 1C0.0222168 0.45999 0.459983 0.0222244 0.999995 0.0222244H17C17.54 0.0222244 17.9778 0.45999 17.9778 1V23C17.9778 23.3537 17.7868 23.6798 17.4783 23.8528C17.1698 24.0258 16.7919 24.0188 16.4901 23.8343L8.99999 19.257L1.50986 23.8343C1.20806 24.0188 0.830192 24.0258 0.521707 23.8528C0.213222 23.6798 0.0222168 23.3537 0.0222168 23V1ZM1.97777 1.97778V21.2566L8.49013 17.2768C8.80313 17.0855 9.19686 17.0855 9.50986 17.2768L16.0222 21.2566V1.97778H1.97777Z" fill="currentColor"></path>
              </svg>
            </a>
            <div class="profile-wrap svelte-dgiybl">
              <button aria-label="sign in" class="button button--sign-in svelte-dgiybl" id="log-in">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>icons / profile</title>
                  <defs>
                    <path d="M12.1439808,23.9836154 C9.46988462,23.9836154 6.97942308,23.5945962 5.13148077,22.8881538 C3.70296154,22.3420385 2,21.3434423 2,19.6875 C2,17.7075 2.51773077,15.7683462 3.49723077,14.07975 C4.45175,12.4340769 5.80244231,11.0907115 7.40328846,10.1948077 L7.52253846,10.1281154 L7.43778846,10.0209231 C6.57782692,8.93319231 6.10417308,7.55878846 6.10417308,6.15080769 C6.10417308,2.75925 8.81357692,0 12.1439808,0 C15.4742692,0 18.1837308,2.76161538 18.1837308,6.15611538 C18.1837308,7.56017308 17.7101346,8.93238462 16.8500577,10.02 L16.7653077,10.1271923 L16.8846154,10.1939423 C18.4854038,11.0897885 19.8360962,12.4333269 20.7906731,14.0792885 C21.7701731,15.7681154 22.2879038,17.7074423 22.2879038,19.6875 C22.2879038,21.3434423 20.585,22.3420385 19.1564231,22.8881538 C17.3084808,23.5945962 14.8180769,23.9836154 12.1439808,23.9836154 L12.1439808,23.9836154 Z M8.30282692,11.7359423 C5.53740385,13.2835385 3.81955769,16.3194231 3.81955769,19.6588846 C3.81955769,20.1660577 4.57873077,20.7763269 5.80082692,21.2514808 C7.41707692,21.8799231 9.72909615,22.2404423 12.1439808,22.2404423 C14.5588077,22.2404423 16.8708269,21.8799231 18.4870769,21.2514808 C19.7092308,20.7763269 20.4684038,20.1660577 20.4684038,19.6588846 C20.4684038,16.3194808 18.7504423,13.2835385 15.9850769,11.7359423 L14.0381346,10.6463654 L15.4140385,8.90619231 C16.0356154,8.12025 16.3641154,7.16676923 16.3641154,6.14896154 C16.3641154,3.74371154 14.4709423,1.78684615 12.1439808,1.78684615 C9.81690385,1.78684615 7.92373077,3.74371154 7.92373077,6.14896154 C7.92373077,7.16671154 8.25228846,8.12019231 8.87380769,8.90619231 L10.2497692,10.6463077 L8.30282692,11.7359423 L8.30282692,11.7359423 Z" id="path-profile"></path>
                  </defs>
                  <g id="icons-/-profile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <mask id="mask-profile" fill="white">
                      <use xlink:href="#path-profile"></use>
                    </mask>
                    <use fill="currentColor" xlink:href="#path-profile"></use>
                    <g id="Group" mask="url(#mask-profile)" fill="currentColor">
                      <g id="color-/-primary-/-black">
                        <rect id="Rectangle" x="0" y="0" width="24" height="24"></rect>
                      </g>
                    </g>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </header>
      </div>