<template>
<div class="card">
            <div class="card">
  <div class="card-header">
    Добавить игру в базу
  </div>
  <div class="card-body text-center">
      <form @submit.prevent="">
          <input v-model="search" class="form-control mb-4" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary w-50">add game</button>
      </form>
  </div>
  <hr>
  
  <div class="row">
      <!--<div class="col-lg-6">-->
          <!--&lt;!&ndash;<div class="card">&ndash;&gt;-->
          <!--&lt;!&ndash;<img src="https://images-na.ssl-images-amazon.com/images/I/71nlEoSrewL._AC_SL1200_.jpg" class="rounded-top card-img-top" alt="">&ndash;&gt;-->
          <!--&lt;!&ndash;<div class="card-body">&ndash;&gt;-->
          <!--&lt;!&ndash;<h5 class="card-tittle text-center">Card Title</h5>&ndash;&gt;-->
          <!--&lt;!&ndash;<p class="card-text">Date release</p>&ndash;&gt;-->
          <!--&lt;!&ndash;</div>&ndash;&gt;-->
          <!--&lt;!&ndash;</div>&ndash;&gt;-->
      <!--</div>-->
      <div v-for="game in filteredGames" class="col-lg-6">
          <div class="card">
              <img :src="game['background_image']" class="rounded card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-tittle text-center">{{game.name}}</h5>
                  <p class="card-text">{{game.released}}</p>
              </div>
          </div>
      </div>
  </div>
</div>

</div>
</template>
<script>
export default {
    data () {
        return {
            api : [],
            search : ''
        }
    },
    async mounted() {
        const response = await fetch ('https://api.rawg.io/api/games').then(res => res.json());
        this.api = response.results;
    },
    computed : {
        filteredGames : function () {
            return this.api.filter((game) => {
                return game.name.match(this.search) ;
            })
        }
    }
}
</script>
