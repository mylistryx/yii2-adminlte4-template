<?php

use yii\adminlte4\BI;
use yii\adminlte4\Html;

?>
<!--begin::End Navbar Links-->
<ul class="navbar-nav ms-auto">
    <!--begin::Navbar Search-->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="bi bi-search"></i>
        </a>
    </li>
    <!--end::Navbar Search-->

    <!--begin::Messages Dropdown Menu-->
    <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <?= BI::icon('chat-text') ?>
            <span class="navbar-badge2 badge text-bg-danger">2342343</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <?= Html::img('/img/user1-128x128.jpg', [
                            'alt'   => 'User Avatar',
                            'class' => ['img-size-50', 'rounded-circle me-3'],
                        ]) ?>
                    </div>

                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-end fs-7 text-danger">
                                <?= BI::icon('star-fill') ?>
                            </span>
                        </h3>
                        <p class="fs-7">Call me whenever you can...</p>
                        <p class="fs-7 text-secondary">
                            <?= BI::icon('clock-fill me-1') ?> 5 Hours Ago
                        </p>
                    </div>
                </div>
                <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <?= Html::img('/img/user8-128x128.jpg', [
                            'alt'   => 'User Avatar',
                            'class' => ['img-size-50', 'rounded-circle me-3'],
                        ]) ?>
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-end fs-7 text-secondary">
                                <?= BI::icon('star-fill') ?>
                            </span>
                        </h3>
                        <p class="fs-7">I got your message bro</p>
                        <p class="fs-7 text-secondary">
                            <?= BI::icon('clock-fill me-1') ?> 4 Hours Ago
                        </p>
                    </div>
                </div>
                <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <?= Html::img('/img/user3-128x128.jpg', [
                            'alt'   => 'User Avatar',
                            'class' => ['img-size-50', 'rounded-circle me-3'],
                        ]) ?>
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-end fs-7 text-warning">
                                <?= BI::icon('star-fill') ?>
                            </span>
                        </h3>
                        <p class="fs-7">The subject goes here</p>
                        <p class="fs-7 text-secondary">
                            <?= BI::icon('clock-fill me-1') ?> 4 Hours Ago
                        </p>
                    </div>
                </div>
                <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
    <!--end::Messages Dropdown Menu-->

    <!--begin::Notifications Dropdown Menu-->
    <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" href="#">
            <?= BI::icon('bell-fill') ?><span class="badge text-bg-warning">2215</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <span class="dropdown-item dropdown-header">15 Notifications</span>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
                <i class="bi bi-envelope me-2"></i> 4 new messages
                <span class="float-end text-secondary fs-7">3 mins</span>
            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
                <i class="bi bi-people-fill me-2"></i> 8 friend requests
                <span class="float-end text-secondary fs-7">12 hours</span>
            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
                <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                <span class="float-end text-secondary fs-7">2 days</span>
            </a>

            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">
                See All Notifications
            </a>
        </div>
    </li>
    <!--end::Notifications Dropdown Menu-->

    <!--begin::Fullscreen Toggle-->
    <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
            <?= BI::i('arrows-fullscreen')->addDataAttribute('lte-icon','maximize') ?>
            <?= BI::i('fullscreen-exit')->addDataAttribute('lte-icon','minimize')->addCssStyle(['display' => 'none']) ?>
        </a>
    </li>
    <!--end::Fullscreen Toggle-->

    <!--begin::User Menu Dropdown-->
    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <?= Html::img('/img/user2-160x160.jpg', [
                'alt'   => 'User Image',
                'class' => ['user-image', 'rounded-circle', 'shadow'],
            ]) ?>
            <span class="d-none d-md-inline">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!--begin::User Image-->
            <li class="user-header text-bg-primary">
                <?= Html::img('/img/user2-160x160.jpg', [
                    'alt'   => 'User Image',
                    'class' => ['rounded-circle', 'shadow'],
                ]) ?>
                <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                </p>
            </li>
            <!--end::User Image-->

            <!--begin::Menu Body-->
            <li class="user-body">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                </div>
                <!--end::Row-->
            </li>
            <!--end::Menu Body-->

            <!--begin::Menu Footer-->
            <li class="user-footer">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
            </li>
            <!--end::Menu Footer-->
        </ul>
    </li>
    <!--end::User Menu Dropdown-->
</ul>
<!--end::End Navbar Links-->