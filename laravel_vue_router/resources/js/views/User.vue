<template>
    <div>
        <h1>ユーザー覧</h1>
        <ul>
            <li v-for="user in users" :key="user.id">{{ user.name }}　<router-link :to="`user/${user.id}`">詳細</router-link></li>
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return{
            users:[],
        }
    },
    created() {
        axios.get('/api/user')
        .then(response => {
            this.users = response.data.users;
        })
        .catch(error => {
            console.log(error)
        });
    },
}
</script>
