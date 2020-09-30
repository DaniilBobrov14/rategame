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
      <div v-for="game in filteredGames" class="col-lg-6">
          <div class="card">
              <img :src="game['background_image']" class="rounded card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-tittle text-center">{{game.name}}</h5>
                  <div class="row">
                      <div class="col-5">
                          <p class="card-text">{{game.released}}</p>
                      </div>
                      <div class="col-7">
                          <div class="card-platforms">
                              <p v-for="platforms in game['platforms']" class="pc-platform">
                                  {{platforms['platform']['name']}}
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

</div>
</template>
<script>
export default {
    data (context) {
        return {
            api : [],
            apiAllGames : [],
            search : '',
        }
    },
    async mounted() {
        const response = await fetch ('https://api.rawg.io/api/games').then(res => res.json());
        this.api = response.results;
        this.apiAllGames = response ;
    },
    computed : {
        filteredGames : function () {
            return this.api.filter((game) => {
                return game.name.toLowerCase().match(this.search);
            })
        }
    }
}
</script>
