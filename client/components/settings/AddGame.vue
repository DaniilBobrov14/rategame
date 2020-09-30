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
                              <div v-for="platforms in game['platforms']" class="platform">
                                  <span v-if="platforms['platform']['name'] === 'Xbox One'" class="xbox-one-platform"></span>
                              </div>
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
<style scoped>
    .pc-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/");
        background-size: cover;
    }
    .ps-3-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/");
        background-size: cover;
    }
    .ps-4-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/");
        background-size: cover;
    }
    .ps-5-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/");
        background-size: cover;
    }
    .xbox-360-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/");
        background-size: cover;
    }
    .xbox-one-platform {
        width: 30px;
        height: 30px;
        background-image: url("../../assets/img/xbox-logo.png");
        background-size: cover;
    }
</style>
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
