<template>
  <div class="user-box">
    <p>user</p>
    <ul>
      <router-link
        v-for="item in result"
        :key="item.id"
        :to="{path:'/user/'+item.tip+'/'+item.id,query:{info:'follow'}}"
        tag="li"
      >{{item.name}}</router-link>
    </ul>

    <div class="aui-text-center" v-if="$route.params.tip">
        <!-- <router-link exact=true to="?info=follow" tag="span">TA的关注</router-link> -->
        <router-link exact=true to="?info=follow" tag="span">TA的关注</router-link>
        <router-link exact=true to="?info=share" tag="span">TA的分享</router-link>
    </div>

  </div>
</template>
<script>
var data = [
  {
    id: "1",
    tip: "a",
    name: "sweet",
    hoddy: "读书"
  },
  {
    id: "2",
    tip: "f",
    name: "LLLLL",
    hoddy: "写字"
  },
  {
    id: "3",
    tip: "d",
    name: "mather",
    hoddy: "打球"
  },
  {
    id: "4",
    tip: "c",
    name: "father",
    hoddy: "下棋"
  }
];
export default {
  data() {
    return {
      result: data
    };
  },
  watch: {
    $route: function() {
      //   this.updata()
    }
  },
  created: function() {
    console.log(this.$route.params);
    // this.updata()
  },
  methods: {
    updata: function() {
      let id = this.$route.params.id;
      if (id) {
        this.result = this.$route.params;
      } else {
        this.result = [];
      }
    }
  }
};
</script>
<style>
ul li {
  float: left;
  padding: 0 20px;
}
</style>
