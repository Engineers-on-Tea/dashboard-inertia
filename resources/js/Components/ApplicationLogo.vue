<template>
    <div class="flex items-center">
        <img
            class="h-8 w-8 rounded-full object-cover"
            :src="$page.props.setting['logo']"
            :alt="$page.props.setting['title']"
        />

        <h1
            class="ml-3 text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight"
        >
            {{ $page.props.setting['title'] }}
        </h1>
    </div>
</template>
