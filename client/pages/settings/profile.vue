<template>
<div>
  <Info />
  <hr>
  <Games />
</div>
</template>

<script>
import Games from '../../components/settings/Games'
import Info from '../../components/settings/Info'

export default {
  scrollToTop: false,

  head () {
    return { title: this.$t('settings') }
  },

  components: {

    Games,
    Info

  },
}
</script>
