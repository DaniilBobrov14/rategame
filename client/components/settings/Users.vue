<template>
    <div class="card">
  <div class="card-header">
    Зарегистрированные пользователи
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nickname</th>
      <th scope="col">Created at</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users" :key="user.id">
      <th scope="row">{{user.id}}</th>
      <td>{{user.name}}</td>
      <td>{{user.created_at}}</td>
      <td v-if="user.is_admin == 1">Администратор</td>
      <td v-else>Пользователь</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</template>
<script>
export default {
    
  head () {
    return { title: this.$t('settings') }
  },  

  data () {
    return {
      users : []
    }
  },

    async mounted () {
    const response = await fetch ('http://127.0.0.1:8000/api/users').then(res => res.json());
    this.users = response 
  }
}
</script>