<template>
  <div>
    <h1>ユーザー覧</h1>
    <router-link class="btn btn-primary" to="/user/create">作成</router-link>
    <ul>
      <li class="mb-1" v-for="(user, index) in users" :key="user.id">
        {{ user.name }} 　<router-link
          class="btn btn-success"
          :to="`user/${user.id}`"
          >詳細</router-link
        >
        <router-link class="btn btn-success" :to="`user/${user.id}/edit`"
          >更新</router-link
        >
        <span
          class="btn btn-danger"
          @click="userDelete(index, user.id)"
          style="cursor: pointer"
          >削除</span
        >
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      users: [],
    };
  },
  created() {
    axios
      .get("/api/user")
      .then((response) => {
        this.users = response.data.users;
      })
      .catch((error) => {
        console.log(error);
      });
  },
  methods: {
    userDelete(index, id) {
      axios
        .delete("/api/user/" + id)
        .then((response) => {
          console.log(typeof this.users);
          this.users.splice(index, 1);
        })
        .catch((error) => console.log(error));
    },
  },
};
</script>
