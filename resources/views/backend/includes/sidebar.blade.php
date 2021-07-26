<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
    <h2 style="text-align:center">RDC</h2>
        <!-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">            
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
        </svg> -->
    </div><!--c-sidebar-brand-->

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.dashboard')"
                :active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                icon="c-sidebar-nav-icon cil-speedometer"
                :text="__('Dashboard')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.home.index')"
                :active="activeClass(Route::is('admin.home'), 'c-active')"
                icon="c-sidebar-nav-icon fas fa-house-user"
                :text="__('Home Page')" />
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.awards.index')"
                :active="activeClass(Route::is('admin.awards'), 'c-active')"
                icon="c-sidebar-nav-icon fas fa-award"
                :text="__('Awards')" />
        </li>

        <li class="c-sidebar-nav-dropdown ">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon fas fa-users"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('People')" />

            <ul class="c-sidebar-nav-dropdown-items">                   
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('admin.professional.index')"
                            class="c-sidebar-nav-link"
                            :text="__('Professional Team')"
                            :active="activeClass(Route::is('admin.professional'), 'c-active')" />
                    </li>                    
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('admin.office.index')"
                            class="c-sidebar-nav-link"
                            :text="__('Office Team')"
                            :active="activeClass(Route::is('admin.office'), 'c-active')" />
                    </li>                   
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.lifeat.index')"
                :active="activeClass(Route::is('admin.lifeat'), 'c-active')"
                icon="c-sidebar-nav-icon fas fa-suitcase-rolling"
                :text="__('Life At RDCA')" />
        </li>

        <li class="c-sidebar-nav-dropdown ">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon fas fa-tasks"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Projects')" />

            <ul class="c-sidebar-nav-dropdown-items">                   
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('admin.category.index')"
                            class="c-sidebar-nav-link"
                            :text="__('Category')"
                            :active="activeClass(Route::is('admin.category'), 'c-active')" />
                    </li>                    
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('admin.projects.index')"
                            class="c-sidebar-nav-link"
                            :text="__('Project')"
                            :active="activeClass(Route::is('admin.projects'), 'c-active')" />
                    </li>                   
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.press.index')"
                :active="activeClass(Route::is('admin.press'), 'c-active')"
                icon="c-sidebar-nav-icon far fa-newspaper"
                :text="__('Press Release')" />
        </li>
        
        <li class="c-sidebar-nav-item">
            <x-utils.link
                class="c-sidebar-nav-link"
                :href="route('admin.contactus.index')"
                :active="activeClass(Route::is('admin.contactus'), 'c-active')"
                icon="c-sidebar-nav-icon fas fa-comments"
                :text="__('Contact Us')" />
        </li>

        

        






        @if (
            $logged_in_user->hasAllAccess() ||
            (
                $logged_in_user->can('admin.access.user.list') ||
                $logged_in_user->can('admin.access.user.deactivate') ||
                $logged_in_user->can('admin.access.user.reactivate') ||
                $logged_in_user->can('admin.access.user.clear-session') ||
                $logged_in_user->can('admin.access.user.impersonate') ||
                $logged_in_user->can('admin.access.user.change-password')
            )
        )
            <li class="c-sidebar-nav-title">@lang('System')</li>

            <li class="c-sidebar-nav-dropdown {{ activeClass(Route::is('admin.auth.user.*') || Route::is('admin.auth.role.*'), 'c-open c-show') }}">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-user"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Access')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    @if (
                        $logged_in_user->hasAllAccess() ||
                        (
                            $logged_in_user->can('admin.access.user.list') ||
                            $logged_in_user->can('admin.access.user.deactivate') ||
                            $logged_in_user->can('admin.access.user.reactivate') ||
                            $logged_in_user->can('admin.access.user.clear-session') ||
                            $logged_in_user->can('admin.access.user.impersonate') ||
                            $logged_in_user->can('admin.access.user.change-password')
                        )
                    )
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.user.index')"
                                class="c-sidebar-nav-link"
                                :text="__('User Management')"
                                :active="activeClass(Route::is('admin.auth.user.*'), 'c-active')" />
                        </li>
                    @endif

                    @if ($logged_in_user->hasAllAccess())
                        <li class="c-sidebar-nav-item">
                            <x-utils.link
                                :href="route('admin.auth.role.index')"
                                class="c-sidebar-nav-link"
                                :text="__('Role Management')"
                                :active="activeClass(Route::is('admin.auth.role.*'), 'c-active')" />
                        </li>
                    @endif
                </ul>
            </li>
        @endif

        @if ($logged_in_user->hasAllAccess())
            <li class="c-sidebar-nav-dropdown">
                <x-utils.link
                    href="#"
                    icon="c-sidebar-nav-icon cil-list"
                    class="c-sidebar-nav-dropdown-toggle"
                    :text="__('Logs')" />

                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::dashboard')"
                            class="c-sidebar-nav-link"
                            :text="__('Dashboard')" />
                    </li>
                    <li class="c-sidebar-nav-item">
                        <x-utils.link
                            :href="route('log-viewer::logs.list')"
                            class="c-sidebar-nav-link"
                            :text="__('Logs')" />
                    </li>
                </ul>
            </li>
        @endif
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
