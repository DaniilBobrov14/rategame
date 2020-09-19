<template>
    <div>
    <Users />
    <hr>
    <AddGame />
    </div>
</template>

<script>
import Users from '../../components/settings/Users'
import AddGame from '../../components/settings/AddGame'

export default {
    components : {
        Users,
        AddGame
    }
}
</script>