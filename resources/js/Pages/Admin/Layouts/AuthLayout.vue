<template>
    <div class="app-content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Login basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row d-flex justify-between">
                                    <div class="col-sm-5">
                                        <h2 class="brand-text text-primary ms-1">{{ $page.props.setting['title'] }}</h2>
                                    </div>
                                    <div class="col-sm-5">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle waves-effect" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i :class="'flag-icon '+ $page.props.adminLang['flag']"></i>
                                            {{ $page.props.adminLang['title'] }}
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" :href="route('dashboard.change.lang', language['id'])"
                                                v-for="language in $page.props.languages">
                                                <i :class="'flag-icon '+ language['flag']"></i>
                                                {{ language['title'] }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="index.html" class="brand-logo">
                                    <span class="brand-logo">
                                        <img :src="$page.props.ziggy['url'] + '/images/logo.png'" alt="">
                                    </span>
                                </a>

                                <h4 class="card-title mb-1">Welcome to {{ $page.props.setting['title'] }}! 👋</h4>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                                <main>
                                    <slot />
                                </main>
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted: function () {

        this.loadScript('app-assets/vendors/js/vendors.min.js');
        // var script = document.createElement('script');
        // script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js';
        // document.body.appendChild(script);
        this.loadScript('app-assets/vendors/js/charts/apexcharts.min.js');
        this.loadScript('app-assets/vendors/js/extensions/toastr.min.js');
        this.loadScript('app-assets/js/core/app-menu.js');
        this.loadScript('app-assets/js/core/app.js');
        this.loadScript('app-assets/js/scripts/pages/dashboard-ecommerce.js');

        if (feather) {
            feather.replace({
                width: 20,
                height: 20
            });
        }
    },
    methods: {
        loadScript: function (src) {
            var script = document.createElement('script');
            script.src = window.location.origin + '/' + src;
            document.body.appendChild(script);
        }
    }
}
</script>
