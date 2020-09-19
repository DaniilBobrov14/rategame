<template>
<div>
            <div class="card">
  <div class="card-header">
    Добавить игру в базу
  </div>
  <div class="card-body text-center">
      <form @submit.prevent="">
          <input v-model="name" class="form-control mb-4" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary w-50">add game</button>
      </form>
  </div>
  <hr>
  
  <div class="card-deck">
          <div class="card">
              <img h src="https://images-na.ssl-images-amazon.com/images/I/71nlEoSrewL._AC_SL1200_.jpg" class="rounded-top card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-tittle text-center">Card Title</h5>
                  <p class="card-text">Date release</p>
              </div>
          </div>
          <div class="card">
              <img h src="https://images-na.ssl-images-amazon.com/images/I/71nlEoSrewL._AC_SL1200_.jpg" class="rounded-top card-img-top" alt="">
              <div class="card-body">
                  <h5 class="card-tittle text-center">Card Title</h5>
                  <p class="card-text">Date release</p>
              </div>
          </div>
      </div>
</div>
</div>
</template>
<script>
import axios from 'axios'
export default {
    data () {
        return {
            name : '',
            games : null
        }
    },
    mounted() {
        axios.get('https://api-v3.igdb.com/games/').then()  
    }

    
}
</script>