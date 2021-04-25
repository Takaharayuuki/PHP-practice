<template>
  <div class="search-ip">
    <div>
      <div>
        <input @click="getIp()" type="button" value="IPを取得" />
      </div>
      <h3>Get IP</h3>
      <p>{{ state.data }}</p>
    </div>
    <div>
      <div>
        <input @click="getTime()" type="button" value="現在時刻を取得" />
      </div>
      <h3>現在時刻: {{ state.time }}</h3>
    </div>
  </div>
</template>

<script lang="ts">
// 使用するreactiveの追加
import { defineComponent, reactive } from "vue";
// axiosのインポート
import axios from "axios";

export default defineComponent({
  name: "SearchIp",
  setup() {
    // 空のデータをいれるプロパティを用意
    const state = reactive<{ data: string; time: string }>({
      data: "",
      time: "",
    });

    // IPアドレスを取得する関数を定義
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

    // const getTime = () => {
    //   axios.get("https://ntp-a1.nict.go.jp/cgi-bin/json").then((response) => {
    //     console.log(response);
    //     state.time = response.data;
    //     return state.time;
    //   });
    // };

    return {
      state,
      getIp,
      // getTime,
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
