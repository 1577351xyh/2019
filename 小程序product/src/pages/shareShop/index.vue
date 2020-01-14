<template>
  <div class="container">
    <div class="floor" v-for="(item,index) in arr" :key="index">
      <div class="floor_hearde">
        <div>日期：{{item.created_at}}</div>
      </div>
      <div class="floor_body">
        <div class="floor_body_text">
          <div>充值金额</div>
          <div>{{item.pay_score}}</div>
        </div>
        <div class="floor_body_text">
          <div>营业额</div>
          <div>{{item.score}}</div>
        </div>
        <div class="floor_body_text">
          <div>新增用户</div>
          <div>{{item.user_num}}</div>
        </div>
      </div>
    </div>
    <div v-if="arr.length==0"  class="buttons">还没有分店信息</div>
    <div v-else-if="page===last" class="buttons">已经加载到底了</div>
  </div>
</template>

<script>
  import {
    Shop
  } from '../../http/index.js'
  let share = new Shop()
export default {
  data(){
    return{
      share_id:'',
      arr:[],
      page:1,
      last:-1,
      userrqs:false
    }
  },
  onShow(){
    this.page=1;
    this.last=-1;
  },
  mounted(){
    this.share_id = this.$root.$mp.query.share_id;
    share.ShareDayShop(this.share_id)
      .then(res=>{
        this.arr = res.data.data;
        this.last = res.data.last_page;
      })
  },
  onReachBottom: function () {
    if (this.userrqs) {
      return;
    }
    this.userrqs = true;
    wx.showLoading({ title: "正在加载", icon: "loading" });
    if (this.page < this.last&&this.arr.length!=0) {
      this.page++;
      share.ShareDayShop(this.shopid, this.page)
        .then(res => {
          this.arr = this.arr.concat(res.data.data);
          this.last = res.data.last_page;
          this.userrqs = false;
          wx.hideLoading();
        });
    } else {
      this.page=this.last;
      this.userrqs = false;
      wx.hideLoading({
        success: function() {
          wx.showToast({ title: "已经到底啦", icon: "success" });
        }
      });
      return;
    }
  },
}
</script>
<style scoped lang="less">
  .container{width: 750rpx;padding: 10px;box-sizing: border-box;
  }
.floor{
  height: 230rpx;
  border: 1px solid #ccc;display: flex;box-sizing: border-box;flex-direction: column;justify-content: space-around;border-radius: 10px;
  margin-bottom: 10px;
   &:last-child {
    margin: 0px;
  }
  .floor_hearde{
    height: 40%;
    border-bottom: 1px solid #cccccc;
    padding-left: 10px;
    width:100%;
    box-sizing: border-box;
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }
  .floor_body{
    display: flex;
    width: 100%;
    height: 60%;
    justify-content: space-around;
    .floor_body_text{
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
    }
  }
}
  .buttons{height: 100rpx;display: flex;justify-content: center;align-items: center;color: #cccccc;
  }
</style>
