<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item {{ Request::is('/')?'active':''}}">
                        <a class="animsition-link" href="/">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('sale-order/*','sale-order')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-clipboard" aria-hidden="true"></i>
                            <span class="site-menu-title">รายการขาย</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('sale-order')?'active':''}}">
                                <a class="animsition-link" href="/sale-order">
                                    <span class="site-menu-title">ดูรายการขาย</span>
                                </a>
                            </li>
{{--                            <li class="site-menu-item {{ Request::is('sale-order/create')?'active':''}}">--}}
{{--                                <a class="animsition-link" href="/sale-order/create">--}}
{{--                                    <span class="site-menu-title">สร้างรายการขาย</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('purchase-order/*','purchase-order')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-shopping-cart" aria-hidden="true"></i>
                            <span class="site-menu-title">รายการซื้อ</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('purchase-order')?'active':''}}">
                                <a class="animsition-link" href="/purchase-order">
                                    <span class="site-menu-title">ดูรายการซื้อ</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('purchase-order/create')?'active':''}}">
                                <a class="animsition-link" href="/purchase-order/create">
                                    <span class="site-menu-title">สร้างรายการซื้อ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('product/*','product')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-inbox" aria-hidden="true"></i>
                            <span class="site-menu-title">สินค้า</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('product')?'active':''}}">
                                <a class="animsition-link" href="/product">
                                    <span class="site-menu-title">สินค้า</span>
                                </a>
                            </li>
                            <li class="site-menu-item {{ Request::is('product/category')?'active':''}}">
                                <a class="animsition-link" href="/product/category">
                                    <span class="site-menu-title">หมวดหมู่</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub {{ Request::is('contact/*','contact')?'active open':''}}">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">ลูกค้า</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item {{ Request::is('contact')?'active':''}}">
                                <a class="animsition-link" href="/contact">
                                    <span class="site-menu-title">ผู้ติดต่อ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon md-power" aria-hidden="true"></span>
        </a>
    </div>
</div>