<template>
  <div class="koukuan_container">
    <div class="cancel jifen" v-if="role==2||role==5">
      <div>
        <button @click="oncancel">点击扫码核销</button>
      </div>
      <p class="iconfont icon-dianji"></p>
    </div>
    <div class="scroll_box" :class="role==3?'w100':'w75'">
      <scroll-view scroll-y class='containav' @scrolltolower="ButtonScroll">
        <div class="floor frist">
          <p>核销记录</p>
        </div>
        <div class='floor' v-for="(item,index) in arr" :key="index">
          <div class='user'>
            <img :src='item.user_info.avatar' class='images'>
            <p>用户：{{item.user_info.nickname}}</p>
          </div>
          <div class="floor_text">
            <p class='left_text'>核销金额:</p>
            <p>{{item.score}}元</p>
          </div>
          <div class="floor_text">
            <p class='left_text'>核销时间:</p>
            <p>{{item.created_at}}</p>
          </div>
          <div class="floor_text">
            <p class='left_text'>核销分店:</p>
            <p>{{item.share_info.name}}</p>
          </div>
          <div class="floor_text">
            <p class='left_text'>核销人:</p>
            <p style="margin-right: 5px">{{item.write_info.nickname}}</p>
            <img :src='item.write_info.avatar' class='images'>
          </div>
        </div>
        <div v-if="arr.length===0" class="buttons">没有核销记录</div>
        <div v-else-if="page==last" class="buttons">已经加载到底了</div>
      </scroll-view>
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
        shop_id:undefined,
        role:undefined
      }
    },
    onShow(){
      this.value = '';
      this.page=1;
      this.last=-1;
      this.userrqs = false;
      this.role = wx.getStorageSync('role');
      this.shop_id = wx.getStorageSync('shop_id');
      this.share_id = wx.getStorageSync('share_id');
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
            Shops.Sumshare(this.shop_id,this.page)
              .then(res=>{
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
                this.userrqs = false;
                wx.hideLoading();
              })
          }else if(this.role==5){
            Shops.getshare(this.share_id,this.page)
              .then(res => {
                console.log(res);
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
                this.userrqs = false;
                wx.hideLoading();
              });
          }else if(this.role==2){
            Shops.userShare(this.share_id,this.page)
              .then(res=>{
                console.log(res)
                this.arr = this.arr.concat(res.data.data);
                this.last = res.data.meta.last_page;
                this.userrqs = false;
                wx.hideLoading();
              })
          }
        } else {
          this.userrqs = false;
          this.page=this.last;
          wx.hideLoading({ success: function() {wx.showToast({ title: "已经到底啦", icon: "success",duration:300 });}});
          return;
        }
      },
      oncancel(){
        var that = this;
        wx.scanCode({
          onlyFromCamera: true,
          success(res){
            console.log(res);
            console.log('核销码:'+res.result);
            Shops.getcancel(res.result,that.share_id)
              .then(res=>{
                console.log('hexiaoreq');
                console.log(res);
                if(res.data.code===200){
                  if(that.role==2){
                    Shops.userShare(that.share_id,1)
                      .then(res=>{
                        console.log(that);
                        console.log(1111)
                        console.log(res)
                        that.arr = res.data.data;
                        console.log(that.arr)
                        that.last = res.data.meta.last_page;
                        wx.showToast({ title:"核销成功" })
                      })
                  }else if(that.role==5) {
                    Shops.getshare(that.share_id,1)
                      .then(res=>{
                        console.log(2222)
                        console.log(res)
                        that.arr = res.data.data;
                        that.last = res.data.meta.last_page;
                        wx.showToast({ title:"核销成功" })
                      })
                  }
                }else{
                  wx.showToast({ title:res.data.message })
                }
              })
          }
        })
      },
      Sumshare(){
        Shops.Sumshare(this.shop_id,this.page)
          .then(res=>{
            console.log(res);
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      },
      Shares(){
        Shops.getshare(this.share_id,this.page)
          .then(res=>{
            console.log(res)
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      },
      userShare(){
        Shops.userShare(this.share_id,this.page)
          .then(res=>{
            console.log(res)
            this.arr = res.data.data;
            this.last = res.data.meta.last_page;
          })
      }
    },
    mounted() {
      this.share_id = this.$root.$mp.query.share_id;
      this.shop_id = this.$root.$mp.query.shop_id;
      this.role = this.$root.$mp.query.role;
      console.log('share_id'+this.share_id);
      wx.setStorageSync('role', this.role);
      wx.setStorageSync('shop_id', this.shop_id);
      wx.setStorageSync('share_id', this.share_id);
      if(this.role==3){
       this.Sumshare()
      }else if(this.role==5) {
        this.Shares()
      }else if(this.role==2){
       this.userShare()
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
    height: 75vh;
  }
  .cancel{
    display: flex;
    padding: 100rpx;
    box-sizing: border-box;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 100rpx;
  }
  .icon-dianji{
    font-size: 46rpx;
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
      box-sizing: border-box;
      border-radius: 30rpx;
      height: 25vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
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
    height: 70vh;
    border: 1px solid #ccc;
    border-radius: 30rpx;
    align-items: center;
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
    padding-bottom: 5px;
    color: #5a5a5a;
    font-size: 30rpx;
    border-bottom: 2px solid #b25b78;
  }
  .floor_text{
    display: flex;
    margin-bottom: 5px;
    align-items: center;
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
