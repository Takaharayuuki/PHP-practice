<template>
  <div class="search-ip">
    <div>
      <div>
        <input @click="getIp" type="button" value="IPを取得" />
      </div>
      <h3>IP</h3>
      <p>{{ state.data }}</p>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, reactive } from "vue";
import axios from "axios";

export default defineComponent({
  name: "SearchIp",
  setup() {
    const state = reactive<{ data: string }>({
      data: "",
    });

    const getIp = () => {
      axios
        .get("https://httpbin.org/get")
        .then((response) => {
          alert(response.data.origin);
          state.data = response.data.origin;
          return state.data;
        })
        .catch((e) => {
          alert(e);
        });
    };

    return {
      state,
      getIp,
    };
  },
});
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
