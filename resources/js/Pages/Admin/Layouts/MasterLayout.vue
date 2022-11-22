<template>
    <Header></Header>

    <SideBar></SideBar>

    <main>
        <slot />

    </main>

</template>

<script setup>
import Header from '../Includes/Header.vue'
import SideBar from '../Includes/SideBar.vue'

</script>

<script>
export default {
    mounted: function () {

        this.loadScript('app-assets/vendors/js/vendors.min.js');
        var script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js';
        document.body.appendChild(script);
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
