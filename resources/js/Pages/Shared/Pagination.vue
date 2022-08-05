<template>
   <div>
    <Component
    :is="link.url ? 'Link' : 'span'"
    v-for="link in links" 
    :href="link.url" 
    v-html="link.label" 
    class="px-1"
    :class="{ 'text-gray-500' : ! link.url, 'font-bold' : link.active }"

    />

  </div>
</template>
<script>
export default {
    props: {
        links: Array
    }
}
</script>
<style lang="">
    
</style>