<?php
$uri = service('uri')->getSegments();
$uri1 = $uri[1] ?? 'index';
$uri2 = $uri[2] ?? '';
$uri3 = $uri[3] ?? '';
?>

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/assets/images/logo/LOGO-web-2.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?= ($uri1 == 'index') ? 'active' : '' ?> ">
                    <a href="/mazer" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'index') ? 'active' : '' ?> ">
                    <a href="/guru" class='sidebar-link'>
                        <!-- <i class="fa fa-chalkboard-teacher"></i> -->
                        <i class="fas fa-users"></i>
                        <span>Data Ustadz/dzah</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'index') ? 'active' : '' ?>">
                    <a href="/siswa" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Data Santri</span>
                    </a>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item <?= ($uri1 == 'forms' && $uri2 != 'layout' && $uri2 != 'editor') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'forms' && $uri2 != 'layout') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'input') ? 'active' : '' ?>">
                            <a href="/mazer/forms/input">Input</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'input-group') ? 'active' : '' ?>">
                            <a href="/mazer/forms/input-group">Input Group</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'select') ? 'active' : '' ?>">
                            <a href="/mazer/forms/select">Select</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'radio') ? 'active' : '' ?>">
                            <a href="/mazer/forms/radio">Radio</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'checkbox') ? 'active' : '' ?>">
                            <a href="/mazer/forms/checkbox">Checkbox</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'textarea') ? 'active' : '' ?>">
                            <a href="/mazer/forms/textarea">Textarea</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'layout') ? 'active' : '' ?>">
                    <a href="/mazer/forms/layout" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>



                <li class="sidebar-title">Raise Support</li>

                <li class="sidebar-item  ">
                    <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                        <i class="bi bi-life-preserver"></i>
                        <span>Documentation</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                        <i class="bi bi-puzzle"></i>
                        <span>Contribute</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Donate</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>