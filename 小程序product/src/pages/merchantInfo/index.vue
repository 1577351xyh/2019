<template>
  <div class="merchantinfo">
    <div class="merchant">
      <form action="" @submit="formSubmit">
        <div class="merchantname">
          <div class="name">商城名称:<p class="iconfont icon-must-fill2"></p></div>
          <input name="name" placeholder="商城名称">
        </div>
        <div class="merchantname">
          <div class="name">登录密码:<p class="iconfont icon-must-fill2"></p></div>
          <input type="password" name="password" placeholder="后台登录密码">
        </div>
        <div class="merchantname">
          <div class="name">商城简称:<p class="iconfont icon-must-fill2"></p></div>
          <input  name="short" placeholder="商城简称">
        </div>
        <div class="merchantname">
          <div class="name">商城描述:<p class="iconfont icon-must-fill2"></p></div>
          <textarea v-if="showModal" class="areas" v-model="text" name="desc" placeholder="商城描述"></textarea>
          <p v-else-if="!showModal">{{text}}</p>
        </div>
        <div class="merchantname site">
          <div class="name">商城地址:<p class="iconfont icon-must-fill2"></p></div>
          <input  name="address" placeholder="商城地址">
        </div>
        <div class="merchantname">
          <div class="name">商家资质:<p class="iconfont icon-must-fill2"></p></div>
          <input  name="qualify" placeholder="商家资质">
        </div>
        <div class="merchantname">
          <div class="name">邀请人: <p class="iconfont icon-must-fill2"></p>&nbsp;&nbsp;&nbsp;</div>
          <input  name="inv_phone" placeholder="邀请人手机号码">
        </div>
          <button form-type="submit" class="buttons" v-if="!Module">提交</button>
          <div class="buttons look" v-else-if="Module" @click="seeInfo">查看</div>
      </form>
    </div>
    <div class="successbgc" v-if="submit">
      <div class="success">
        <div class="floor">
          <div class="text">
            <p>后台地址：{{userObj.url}}</p>
            <div @click="copyUrl(userObj.url)">复制</div>
          </div>
          <div class="text">
            <p>后台账号：{{userObj.account}}</p>
            <div @click="copyzhanghao(userObj.account)">复制</div>
          </div>
         <div class="text">
           <p>后台密码：{{userObj.password}}</p>
           <div @click="copytext(userObj.password)">复制</div>
         </div>
        </div>
        <div class="off" @click="offs">去首页</div>
      </div>
      <div class="icons" @click="close">
        <i class="iconfont icon-cross"></i>
      </div>
    </div>
  </div>
</template>

<script>
  import {
    Shop
  } from '../../http/index.js'
  let merchant = new Shop()
  export default {
      data(){
        return{
            submit:false,
            showModal:true,
            text:'',
            userObj:{},
            Module:false,
            text:undefined,
       }
      },
      onShow(){
        this.submit = false;
        this.showModal =true;
        this.Module =false;
      },
      methods:{
        formSubmit(e){
          console.log(e.mp.detail.value)
          let data = e.mp.detail.value;
          for(var key in data){
            if(data[key]==''){
              wx.showToast({ title: '请检查必填项', image:'/static/images/cha.png' })
              return;
            }
          }
          if(data.password.length < 6){
              wx.showToast({ title: '密码不能少于6位', image:'/static/images/cha.png' })
              return;
          }
          this.text = data.desc;
          merchant.merchantshop(data)
            .then(res=>{
              console.log(res)
              if (res.data.code===200){
                this.userObj = res.data.data;
                // 文本域
                this.showModal = false;
                // 查看状态
                this.Module = true;
                // 信息呈现状态
                this.submit = true;
                wx.showToast({ title: '注册成功', icon:'success' })
              }else {
                wx.showToast({ title: res.data.message.toString(), image:'/static/images/cha.png' })
                return;
              };
            })
        },
        close(){
          this.showModal=true;
          this.submit = false;
        },
        seeInfo(){
          this.submit = true;
          this.showModal =false;
        },
        copyUrl(e){
          wx.setClipboardData({
            data: e,
            success: function (res) {
              wx.getClipboardData({ success: function (res) {wx.showToast({ title: '复制成功' })} })
            }
          })
        },
        copyzhanghao(e){
          wx.setClipboardData({
            data: e,
            success: function (res) {
              wx.getClipboardData({ success: function (res) {wx.showToast({ title: '复制成功' })} })
            }
          })
        },
        copytext(e){
          wx.setClipboardData({
            data: e,
            success: function (res) {
              wx.getClipboardData({ success: function (res) {wx.showToast({ title: '复制成功' })} })
            }
          })
        },
        offs(){
          wx.reLaunch({ url:"/pages/index/main?user=1" })
        }
      },
  };
</script>
<style scoped lang="less">
  .icon-must-fill2{
    color: red;
  }
  .buttons{
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 100%;
    color: #fff;
    background-color: #07c160;
    border: 1px solid #07c160;
    transform: translateX(-50%);
    border-radius: 0;
  }
  .merchantinfo{
  width: 750rpx;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  .merchant{
    width: 90%;
    margin: 0 auto;
    .merchantname{
      margin-top: 50rpx;
      box-sizing: border-box;
      display: flex;
      justify-content: space-between;
      height: 60rpx;
      flex: 4;
      input{
        border: 1px solid #ccc;
        height: 100%;
        flex: 6;
        border-radius: 15rpx;
        padding-left: 10px;
        font-size: 30rpx;
      }
      .name{
        height: 100%;
        line-height: 60rpx;
        display: flex;
        margin-right: 8px;
      }
    }
    .site{
      margin-top: 130rpx;
    }
    .cover{
      z-index: 999;
    }
  }
  .areas{
    height:152rpx;
    font-size: 30rpx;
    padding-left: 10px;
    border: 1rpx solid gainsboro;
    border-radius: 15rpx;
    padding-right: 10px;
    box-sizing: border-box;
    margin: 0 auto;
    overflow: hidden;
    flex: 6;
  }

}
  .successbgc{
    position: absolute;
    width: 100%;
    z-index: 10;
    top: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, .7);
    .icons{
      position: absolute;
      right: 100rpx;
      top: 250rpx;
      width: 20px;
      height: 20px;
      background-color: #fff;
      border-radius: 50%;
      text-align: center;
    }
    .success {
      margin: 220rpx auto;
      border: 1px solid #ffffff;
      border-radius: 40rpx;
      width: 80%;
      background-color: #fff;
      border: 1px solid #fff;
      height: 50%;
      box-sizing: border-box;
      padding: 40rpx;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      .off{
        width: 300rpx;
        border-radius: 40rpx;
        text-align: center;
        line-height: 80rpx;
        color: #07c160;
        border: 1px solid #07c160;
        margin: 0 auto;
        height: 80rpx;
      }
      .floor{
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 300rpx;
        width: 100%;
        p{
          width: 80%;
          white-space :nowrap;
          text-overflow: ellipsis;
          overflow: hidden;
          word-break: break-all;
        }
        .text{
          display: flex;
        }
      }
    }
  }
.look{
  height: 100rpx;
  text-align: center;
  line-height: 100rpx;
}

</style>
