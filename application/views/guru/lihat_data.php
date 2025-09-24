<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>Rusella - Lihat Data Materi</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?=base_url('assets')?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?=base_url('assets')?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?=base_url('assets')?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?=base_url('assets')?>/assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?=base_url('assets')?>/img/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="<?=base_url('guru/lihat_data')?>">
                <img alt="Logo" src="<?=base_url('assets')?>/img/logo.png" width="90px;" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                id="kt_aside">

                <!-- begin:: Brand -->
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="<?=base_url('guru')?>">
                            <img alt="Logo" width="35px;" src="<?=base_url('assets')?>/img/favicon.png" />
                        </a>
                    </div>
                </div>

                <!-- end:: Brand -->

                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                        data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--submenu-fullheight kt-menu__item--open kt-menu__item--here"
                                aria-haspopup="true"><a href="<?=base_url('guru')?>" class="kt-menu__link"><i
                                        class="kt-menu__link-icon flaticon2-protection"></i><span
                                        class="kt-menu__link-text">Applications</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <div class="kt-menu__wrapper">

                                    </div>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="click"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-calendar-5"></i><span
                                        class="kt-menu__link-text">Tambah</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Tambah</span></span>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a
                                                href="<?=base_url('guru/add_materi')?>" class="kt-menu__link "><i
                                                    class="kt-menu__link-icon la la-commenting"></i><span
                                                    class="kt-menu__link-text">Materi</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="click"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-list-2"></i><span
                                        class="kt-menu__link-text">Lihat Data</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Lihat Data</span></span>
                                        </li>
                                        <li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a
                                                href="<?=base_url('guru/lihat_data')?>" class="kt-menu__link "><i
                                                    class="kt-menu__link-icon la la-eye"></i><span
                                                    class="kt-menu__link-text">Materi</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- end:: Aside Menu -->
            </div>
            <div class="kt-aside-menu-overlay"></div>

            <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

                    <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
                            <ul class="kt-menu__nav ">
                                <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a
                                        href="<?=base_url('guru')?>" class="kt-menu__link "><span
                                            class="kt-menu__link-text">Dashboard</span></a></li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                        class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Materi</span><i
                                            class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="<?=base_url('guru/lihat_data')?>" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Lihat Data</span></a></li>
                                            <li class="kt-menu__item " aria-haspopup="true"><a
                                                    href="<?=base_url('guru/add_materi')?>" class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Tambah Materi</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- end: Header Menu -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username">Nick</span>
                                <img class="kt-hidden" alt="Pic"
                                    src="<?=base_url('assets')?>/assets/media/users/default.jpg" />
                                <span class="kt-header__topbar-icon"><i
                                        class="flaticon2-user-outline-symbol"></i></span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden-" alt="Pic"
                                            src="<?=base_url('assets')?>/assets/media/users/default.jpg" />

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span
                                            class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                    </div>
                                    <div class="kt-user-card__name font-weight-bold">
                                        Hai!, &nbsp;<?php
echo isset($guru['nama_guru']) ? $guru['nama_guru'] : 'Guru';
?>
                                    </div>
                                </div>

                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="<?=base_url('guru/add_materi')?>" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Tambah data materi
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Tambah Materi Rusella
                                            </div>
                                        </div>
                                    </a>
                                    <div class="kt-notification__custom">
                                        <a href="<?=base_url('welcome/logout')?>"
                                            class="btn btn-label-brand btn-sm btn-bold">Log Out</a>
                                    </div>
                                </div>

                                <!--end: Navigation -->
                            </div>
                        </div>

                        <!--end: User bar -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>

                <!-- end:: Header -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-subheader__main">
                            <h1 class="kt-subheader__title font-weight-bold"
                                style="font-size: 33px !important; letter-spacing:-1px; line-height:3px;">
                                Lihat Data Materi </h1>
                        </div>
                        <div class="kt-subheader__toolbar">
                            <div class="kt-subheader__wrapper">
                                <a href="#" class="btn kt-subheader__btn-daterange">
                                    <span class="kt-subheader__btn-daterange-title"
                                        id="kt_dashboard_daterangepicker_title">Tanggal</span>&nbsp;
                                    <span class="kt-subheader__btn-daterange-date"
                                        id="kt_dashboard_daterangepicker_date"><?php echo date('d / M / y'); ?></span>

                                    <!--<i class="flaticon2-calendar-1"></i>-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon kt-svg-icon--sm">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                id="Combined-Shape" fill="#000000" />
                                        </g>
                                    </svg> </a>
                            </div>
                        </div>
                    </div>

                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->

                    <!-- begin:: Content -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <!--Begin::Dashboard 7-->

                        <!--Begin::Section-->

                        <div class="row">
                            <div class="col-xl-12">

                                <!--begin:: Widgets/Blog-->
                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides">
                                            <img src="<?=base_url('assets/')?>img/user.png" class=" img-fluid" alt=""
                                                srcset="">
                                            <h1 class="kt-widget19__title kt-font-light display-4 font-weight-bold"
                                                style="letter-spacing: -1px;">
                                                Data Materi, <?php
echo isset($guru['nama_guru']) ? $guru['nama_guru'] : 'Guru';
?> !
                                            </h1>
                                            <div class="kt-widget19__shadow"></div>
                                            <div class="kt-widget19__labels">
                                                <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Rusella</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__body">
                                        <div class="kt-widget19__wrapper">
                                            <div class="kt-widget19__content">
                                                <div class="kt-widget19__userpic">
                                                    <img src="<?=base_url('assets/')?>assets/media/users/default.jpg"
                                                        alt="">
                                                </div>
                                                <div class="kt-widget19__info">
                                                    <a href="#" class="kt-widget19__username font-weight-bold">
                                                        Administrator
                                                    </a>
                                                    <span class="kt-widget19__time">
                                                        Administrator
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="kt-widget19__text">
                                                Berikut adalah data materi yang sudah Anda upload. Anda dapat melihat detail materi dan menambahkan materi baru.
                                            </div>
                                        </div>
                                        <div class="kt-widget19__action">
                                            <a href="<?=base_url('guru/add_materi')?>" class="btn btn-sm btn-label-brand btn-bold">Tambah Materi</a>
                                        </div>
                                    </div>
                                </div>

                                <!--end:: Widgets/Blog-->
                            </div>
                        </div>

                        <!--End::Section-->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="row">
                                <div class="col-xl-12">

                                    <!--begin::Portlet-->
                                    <div class="kt-portlet kt-portlet--mobile">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">
                                                    Data Materi yang Sudah Diupload
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__body">

                                            <!--begin: Datatable -->
                                            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Guru</th>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Kelas</th>
                                                        <th>Video</th>
                                                        <th>Deskripsi</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (!empty($materi)) : ?>
                                                        <?php $no = 1; ?>
                                                        <?php foreach ($materi as $m) : ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><?= $m->nama_guru ?></td>
                                                                <td><?= $m->nama_mapel ?></td>
                                                                <td><?= $m->kelas ?></td>
                                                                <td>
                                                                    <?php if (!empty($m->video)) : ?>
                                                                        <span class="kt-badge kt-badge--success kt-badge--inline">Ada Video</span>
                                                                    <?php else : ?>
                                                                        <span class="kt-badge kt-badge--warning kt-badge--inline">Tidak Ada Video</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><?= substr($m->deskripsi, 0, 50) ?>...</td>
                                                                <td>
                                                                    <a href="<?= base_url('materi/belajar/' . $m->id) ?>" class="btn btn-sm btn-info" target="_blank">
                                                                        <i class="la la-eye"></i> Lihat
                                                                    </a>
                                                                    <a href="<?= base_url('guru/update_materi/' . $m->id) ?>" class="btn btn-sm btn-warning">
                                                                        <i class="la la-edit"></i> Update
                                                                    </a>
                                                                    <a href="<?= base_url('guru/delete_materi/' . $m->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus materi ini?')">
                                                                        <i class="la la-trash"></i> Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php else : ?>
                                                        <tr>
                                                            <td colspan="7" class="text-center">
                                                                <div class="alert alert-info">
                                                                    <i class="la la-info-circle"></i> Belum ada materi yang diupload
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>

                                            <!--end: Datatable -->
                                        </div>
                                    </div>

                                    <!--end::Portlet-->
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content -->

                        <!-- begin:: Footer -->
                        <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                            <div class="kt-footer__copyright"> Copyright &copy; 2025 <div class="bullet"></div><a href="https://www.facebook.com/rusdian.giri">Rusdiyanto Giri Agni</a>
                            </div>
                            <div class="kt-footer__menu">
                                Made with &nbsp; <span class="" style="color: red"> &#10084;</span> &nbsp; by Syaauqi
                            </div>
                        </div>

                        <!-- end:: Footer -->
                    </div>
                </div>
            </div>

            <!-- end:: Page -->

            <!-- begin::Quick Panel -->
            <div id="kt_quick_panel" class="kt-quick-panel">
                <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i
                        class="flaticon2-delete"></i></a>
                <div class="kt-quick-panel__nav">
                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x"
                        role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications"
                                role="tab">Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit
                                Logs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings"
                                role="tab">Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="kt-quick-panel__content">
                    <div class="tab-content">
                        <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications"
                            role="tabpanel">
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-line-chart kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been received
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-box-1 kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-chart2 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Finance report has been generated
                                        </div>
                                        <div class="kt-notification__item-time">
                                            25 mins ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-send kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been placed
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-pie-chart-2 kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                            <div class="kt-notification">
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New order has been received
                                        </div>
                                        <div class="kt-notification__item-time">
                                            2 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-home kt-font-primary"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-contract kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-contract kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            New customer is registered
                                        </div>
                                        <div class="kt-notification__item-time">
                                            3 hrs ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                            <div class="kt-grid-nav kt-grid-nav--skin-light">
                                <div class="kt-grid-nav__row">
                                    <a href="#" class="kt-grid-nav__item">
                                        <span class="kt-grid-nav__icon">
                                            <i class="flaticon2-layers-1"></i>
                                        </span>
                                        <span class="kt-grid-nav__title">Settings</span>
                                    </a>
                                    <a href="#" class="kt-grid-nav__item">
                                        <span class="kt-grid-nav__icon">
                                            <i class="flaticon2-menu-4"></i>
                                        </span>
                                        <span class="kt-grid-nav__title">Profile</span>
                                    </a>
                                </div>
                                <div class="kt-grid-nav__row">
                                    <a href="#" class="kt-grid-nav__item">
                                        <span class="kt-grid-nav__icon">
                                            <i class="flaticon2-new-1"></i>
                                        </span>
                                        <span class="kt-grid-nav__title">Help</span>
                                    </a>
                                    <a href="#" class="kt-grid-nav__item">
                                        <span class="kt-grid-nav__icon">
                                            <i class="flaticon2-contract"></i>
                                        </span>
                                        <span class="kt-grid-nav__title">Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end::Quick Panel -->

            <!-- begin::Scrolltop -->
            <div id="kt_scrolltop" class="kt-scrolltop">
                <i class="fa fa-arrow-up"></i>
            </div>

            <!-- end::Scrolltop -->

            <!-- begin::Global Config(global config for global JS sciprts) -->
            <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd27eb"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
            </script>

            <!-- end::Global Config -->

            <!--begin::Global Theme Bundle(used by all pages) -->
            <script src="<?=base_url('assets')?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
            <script src="<?=base_url('assets')?>/assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>

            <!--end::Global Theme Bundle -->

            <!--begin::Page Vendors(used by this page) -->
            <script src="<?=base_url('assets')?>/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

            <!--end::Page Vendors -->

            <!--begin::Page Scripts(used by this page) -->
            <script src="<?=base_url('assets')?>/assets/demo/default/custom/components/datatables/base/data-local.js" type="text/javascript"></script>

            <!--end::Page Scripts -->

            <!-- Flash Messages -->
            <?php if ($this->session->flashdata('success-update')) : ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Update Berhasil!',
                        text: '<?= $this->session->flashdata('success-update') ?>',
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
                <?php $this->session->unset_userdata('success-update'); ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success-delete')) : ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Delete Berhasil!',
                        text: '<?= $this->session->flashdata('success-delete') ?>',
                        showConfirmButton: false,
                        timer: 2500
                    })
                </script>
                <?php $this->session->unset_userdata('success-delete'); ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('fail-update')) : ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Update Gagal!',
                        text: '<?= $this->session->flashdata('fail-update') ?>',
                        showConfirmButton: true
                    })
                </script>
                <?php $this->session->unset_userdata('fail-update'); ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('fail-delete')) : ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Delete Gagal!',
                        text: '<?= $this->session->flashdata('fail-delete') ?>',
                        showConfirmButton: true
                    })
                </script>
                <?php $this->session->unset_userdata('fail-delete'); ?>
            <?php endif; ?>
            <!-- End Flash Messages -->
        </div>
    </div>

</body>

<!-- end::Body -->

</html>