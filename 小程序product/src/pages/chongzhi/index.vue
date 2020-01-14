<template>
  <div>
    <!--pages/consumption/index.wxml-->
    <div class='containav'>
      <div class='floor' v-for="(item,index) in arr" :key="index">
        <div class='user'>
          <img :src='item.user_info.avatar' class='images'>
          <p>{{item.user_info.nickname}}</p>
        </div>
        <div class="floor_text">
          <p class='left_text'>充值积分:</p>
          <p>+{{item.score}}</p>
        </div>
        <div class="floor_text">
          <p class='left_text'>积分变动:</p>
          <p>+{{item.score}}</p>
        </div>
        <div class="floor_text">
          <p class='left_text'>充值时间:</p>
          <p>{{item.created_at}}</p>
        </div>
      </div>

      <div v-if="arr.length==0" class="buttons">还没有充值记录</div>
      <div v-else-if="page===last"  class="buttons">已经加载到底了</div>
    </div>
  </div>
</template>

<script>
  import {
    Shop
  } from '../../http/index.js'
  let Shops = new Shop()
  export default{
    data(){
      return{
        shopid:undefined,
        arr:[],
        //最后一页
        last:-1,
        //当前页
        page:1,
        //当前请求的状态
        userrqs:false,
        role:undefined
      }
    },
    onShow(){
      this.last=-1;
      this.page=1;
    },
    methods:{},
    onReachBottom: function () {
      if (this.userrqs) {
        return;
      }
      this.userrqs = true;
      wx.showLoading({ title: "正在加载", icon: "loading" });
      if (this.page < this.last && this.arr.length!=0) {
        this.page++;
        if(this.role==3){
          Shops.userchongzhi(this.shopid,this.page)
            .then(res => {
              this.arr = this.arr.concat(res.data.data);
              this.last = res.data.last_page;
              this.userrqs = false;
              wx.hideLoading();
            });
        }else {
          Shops.Sharechongzhi(this.shopid,this.page)
            .then(res=>{
              this.arr = this.arr.concat(res.data.data);
              this.last = res.data.last_page;
              this.userrqs = false;
              wx.hideLoading();
            })
        }
      } else {
        this.userrqs = false;
        this.page=this.last;
        wx.hideLoading({
          success: function() {
            wx.showToast({ title: "已经到底啦", icon: "success" });
          }
        });
        return;
      }
    },
    mounted() {
      // 接收传入的 id
      this.shopid = this.$root.$mp.query.shop_id;
      this.tokens = this.$root.$mp.query.token;
      this.role = this.$root.$mp.query.role;
      console.log(this.role);
      if(this.role==3){
        Shops.userchongzhi(this.shopid,this.page)
          .then(res=>{
            console.log(res);
            this.arr = res.data.data;
            this.last = res.data.last_page;
          })
      }else {
        Shops.Sharechongzhi(this.shopid,this.page)
          .then(res=>{
            this.arr = res.data.data;
            this.last = res.data.last_page;
          })
      }
    },
  }
</script>
<style scoped>
  .floor_text{
    display: flex;
    margin-bottom: 5px;
  }
  .containav{
    padding-left: 40rpx;
  }
  .floor{
    box-sizing: border-box;
    padding-top: 30rpx;
    padding-bottom: 5px;
    color: #5a5a5a;
    font-size: 30rpx;
    border-bottom: 2px solid #b25b78;
  }
  .left_text{
    margin-right: 18rpx;
  }
  .images{
    width: 55rpx;
    height: 55rpx;
    border-radius: 50%;
    margin-right: 20rpx;
  }
  .user{
    margin-bottom: 20rpx;
    display: flex;
    align-items: center;
  }
  .buttons{
    height: 100rpx;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #cccccc;
  }
</style>
