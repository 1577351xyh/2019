<template>
  <div>
    <div class="koukuan_container">
      <div class="tips">
        <p>请输入要扣款的金额</p>
      </div>
      <div class="main">
        <input type="number" class="inputs" v-model.trim="value"/>
      </div>
      <div class="button" @click="onsubmit">确定</div>
    </div>
    <div class="bgc" v-if="imgModule" @click="imgModule=false">
      <div class="imgs">
        <img :src="img"  @click.stop>
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
        shopid:undefined,
        img:undefined,
        imgModule:false,
        share_id:undefined
      }
    },
    onShow(){
      this.value = undefined;
      this.imgModule =false;
      console.log(this.imgModule);
    },
    methods:{
      onsubmit(){
        if(this.value == '' || this.value == undefined){
          wx.showToast({ title: "请输入扣款金融", icon: "none" });
        }else if(this.value == 0){
          wx.showToast({ title: "扣款金融不能为0", icon: "none" });
        }else {
          let data = {
            shop_id: this.shopid,
            share_id:this.share_id,
            url: '/pages/pay/main?shop_id=1&pay=200',
            money: this.value
          };
          Shops.koukuan(data)
            .then(res => {
              console.log(res);
              if(res.data.code==200){
                console.log(res);
                this.img = res.data.data;
                this.imgModule = true;
              }else {
                wx.showToast({ title: res.data.message })
              }
            });
        }
      }
    },
    mounted() {
      // 接收传入的id
      this.shopid = this.$root.$mp.query.shop_id;
      this.share_id = this.$root.$mp.query.share_id;
    },
  };
</script>

<style scoped lang="less">
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
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-top: 300rpx;
  .tips{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 42rpx;
  }
  .main{
    display: flex;
    justify-content: center;
    align-items: center;
    .inputs{
      border: 1px solid #999;
      border-radius: 10rpx;
      margin-top: 50rpx;
      margin-bottom: 200rpx;
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
  }
}
</style>
