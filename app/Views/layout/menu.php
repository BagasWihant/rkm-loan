<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="<?= base_url() ?>"><img class="img-fluid for-light" src="<?= base_url() ?>/template/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="<?= base_url() ?>/template/assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?= base_url() ?>/template/assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?= base_url() ?>/template/assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>">
                            <svg class="stroke-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#stroke-home"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#fill-home"></use>
                            </svg>
                            <span>Dashboard </span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Kredit</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>/kredit/pengajuan">
                            <svg class="stroke-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#stroke-form"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#fill-form"></use>
                            </svg>
                            <span>Form Pengajuan</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="<?= base_url() ?>/kredit/data_pengajuan">
                            <svg class="stroke-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#stroke-table"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="<?= base_url() ?>/template/assets/svg/icon-sprite.svg#fill-table"></use>
                            </svg>
                            <span>Data Pengajuan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->