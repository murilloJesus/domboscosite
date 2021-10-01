<template>
    <tr>
        <td v-for="(item, index) in coluns" :key="index">
            <component :is="item.component" :data="data[item.field]" ></component>
        </td>
    </tr>
</template>

<script>
export default {
    props: {
        data: Object,
        coluns: Object
    },
}
</script>

<style>

</style>
