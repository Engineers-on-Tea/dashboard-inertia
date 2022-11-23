<template>
    <button type="button" class="btn btn-outline-primary dropdown-toggle waves-effect" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i :class="'flag-icon '+ $page.props.adminLang['icon']" ></i>
        {{ $page.props.adminLang['title'] }}
    </button>
    <div class="dropdown-menu" style="">
        <a class="dropdown-item" :href="route('dashboard.change.lang', language['id'])" v-for="language in $page.props.languages">
            <i :class="'flag-icon '+ language['icon']" ></i>
            {{ language['title'] }}
        </a>
    </div>
</template>
<script>
export default {
    name: 'lang',
}
</script>
