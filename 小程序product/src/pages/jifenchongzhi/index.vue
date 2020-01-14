<template>
    <div class="koukuan_container">
      <div class="jifen" v-if="role==2||role==5">
        <div class="tips">
          <p>请输入要充值的积分</p>
        </div>
        <div class="main">
          <input type="number" class="inputs" v-model.trim="value"/>
        </div>
        <div class="button" @click="onsubmit">确定</div>
      </div>

      <div class="scroll_box" :class="role==3?'w100':'w75'">
        <scroll-view scroll-y class='containav' @scrolltolower="ButtonScroll">
          <div class="floor frist">
            <p>充值记录</p>
          </div>
          <div class='floor' v-for="(item,index) in arr" :key="index">
            <div class='user'>
              <img :src='item.user_info.avatar' class='images'>
              <p>{{item.user_info.nickname}}</p>
            </div>
            <div class="floor_text">
              <p class='left_text'>充值积分:</p>
              <p>{{item.score}}分</p>
            </div>
            <div class="floor_text">
              <p class='left_text'>充值时间:</p>
              <p>{{item.created_at}}</p>
            </div>
            <div class="floor_text">
              <p class='left_text'>充值分店:</p>
              <p>+{{item.share_info.name}}</p>
            </div>
          </div>
          <div v-if="arr.length==0" class="buttons">没有积分充值记录</div>
          <div v-else-if="page==last" class="buttons">已经加载到底了</div>
        </scroll-view>
      </div>

      <div class="bgc" v-if="imgModule" @click="imgModule=false">
        <div class="imgs">
          <img :src="img" @click.stop="">
        </div>
      </div>

    </div>
</template>
<script>
  import {
    Shop
  } from '../../http/index.js'
  let Shops = new Shop()
  export default {
    data(){
      return{
        value:undefined,
        arr:[],
        //最后一页
        last:-1,
        //当前页
        page:1,
        //当前请求的状态
        userrqs:false,
        share_id:undefined,
        value:0,
        shop_id:undefined,
        id:undefined,
        role:undefined,
        img:undefined,
        imgModule:false
      }
    },
    onShow(){
      this.value=undefined;
      this.imgModule =false;
      this.page=1;
      this.last=-1;
    },
    methods:{
      ButtonScroll(e){
        if (this.userrqs) {
          return;
        }
        this.userrqs = true;
        wx.showLoading({ title: "正在加载", icon: "loading" });
        if (this.page < this.last && this.arr.length!=0) {
          this.page++;
          if(this.role==3){
            Shops.SumScore(this.shop_id,this.page)
              .then(res=>{
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
                this.userrqs = false
                wx.hideLoading();
              })
          }else if(this.role==5){
            Shops.getScore(20,this.page)
              .then(res => {
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
                this.userrqs = false;
                wx.hideLoading();
              });
          }else if(this.role==2){
            Shops.UserScore(this.share_id,this.page)
              .then(res=>{
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
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
      onsubmit(){
        console.log(this.value);
        if(this.value == '' || this.value == undefined){
          wx.showToast({ title: "请输入要充值的积分", icon: "none" });
        }else if(this.value == 0){
          wx.showToast({ title: "充值金额不能为0", icon: "none" });
        }else {
          let data = {
            shop_id: this.shop_id,
            url:'/pages/scoreRecharge/main?shop_id=1&score=200',
            score: this.value,
            share_id :this.share_id
          };
          console.log(data);
          Shops.ScoreCode(data)
            .then(res => {
              console.log(res)
              this.imgModule = true;
              this.img = res.data.data;
            });
        }
      }
    },
    mounted() {
      // 接收传入的 id,token
      this.share_id = this.$root.$mp.query.share_id;
      this.shop_id = this.$root.$mp.query.shop_id;
      this.id = this.$root.$mp.query.id;
      this.role = this.$root.$mp.query.role;
      console.log(this.role);
      console.log(this.share_id);
      if(this.role==3){
        Shops.SumScore(this.shop_id,this.page)
          .then(res=>{
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      }else if(this.role==5){
        Shops.getScore(this.share_id,this.page)
          .then(res=>{
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      }else if(this.role==2){
        Shops.UserScore(this.share_id,this.page)
          .then(res=>{
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      }
    },
  };
</script>

<style scoped lang="less">
  .w100{
    height: 95vh!important;
    border: none!important;
  }
  .w75{
    height: 70vh;
    margin-top: 2vh;
  }
  .bgc{
    position: absolute;
    width: 100%;
    top: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,0.7);
    z-index: 99;
    .imgs{
      width: 70%;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      background-color: #fff;
      border-radius: 20px;
      height: 40%;
      box-sizing: border-box;
      padding: 10px;
      img{
        width: 100%;
        height: 100%;
      }
    }
  }
  .koukuan_container{
    width: 750rpx;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 10px;
    box-sizing: border-box;
    .jifen{
      padding-left: 10px;
      box-sizing: border-box;
      border-radius: 30rpx;
      height: 25vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border: 1px solid #ccc;
    }
    .tips{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 42rpx;
      p{
        font-size: 24px;
        margin-top: 10px;
      }
    }
    .main{
      display: flex;
      justify-content: center;
      align-items: center;
      .inputs{
        border: 1px solid #999;
        border-radius: 10rpx;
        padding-left: 15rpx;
      }
    }
    .button{
      width: 200rpx;
      height: 80rpx;
      line-height: 80rpx;
      background-color: #cccccc;
      color: #000;
      text-align: center;
      margin: 0 auto;
      border-radius: 30rpx;
      margin-bottom: 20px;
    }
  }
.scroll_box{
  position: relative;
  height: 75vh;
  border-radius: 30rpx;
  border: 1px solid #ccc;
}
  .containav{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    margin-top: 10px;
    padding: 0 10px;
    box-sizing: border-box;
    .frist{
      padding: 0;
      height: 100rpx;
      display: flex;
      align-items: center;
      font-size: 40rpx;
    }
  }

  .floor{
    box-sizing: border-box;
    padding-top: 30rpx;
    color: #5a5a5a;
    font-size: 30rpx;
    padding-bottom: 5px;
    border-bottom: 2px solid #b25b78;
  }
  .floor_text{
    display: flex;
    margin-bottom: 5;
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
