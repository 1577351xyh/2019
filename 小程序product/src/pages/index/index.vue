<template>
  <div class="pages">
    <!--index.wxml-->
    <div class="shopping">
      <div class="shopping_box">
        <div class="shopname">
          <div v-if="form_id==1" class="shopnames">
            <img :src="shop.logo" style="height: 100rpx;width: 100rpx;border-radius: 50%"/>
            <div style="margin-left: 10px" class="longName">{{shop.short || shop.name}}</div>
          </div>
          <div v-else-if="!tokenModule && form_id===undefined">
            <button class='button' open-type="getUserInfo" @getuserinfo="getUserInfo">去授权</button>
          </div>
          <div v-else-if="form_id===3 || form_id===2">
            <div class="shopnames">
              <img :src="userurl" style="height: 100rpx;width: 100rpx;border-radius: 50%"/>
              <p style="font-size: 14px;margin-left: 10px">{{username}}</p>
            </div>
          </div>
        </div>
        <div class="shopscore">
            <div class="revenue">
              <p class='today'>今日总充值</p>
              <div class="revenue_num">
                <p class='icons'>￥</p>
                <p class='maxnum'>{{sumscore || 0.0}}</p>
              </div>
            </div>
          <div class="revenue">
            <p class='today'>今日营业额</p>
            <div class="revenue_num">
              <p class='icons'>￥</p>
              <p class='maxnum'>{{todayscore || 0.0}}</p>
            </div>
          </div>
        </div>
        <div class="money">
          <div class="money_left">
            <div class='money_num'>收款笔数</div>
            <p>{{paynum}}</p>
          </div>
        </div>
      </div>
      <div class='manage'>
        <div class='manage_hearde'>
          <p>商家助手</p>
        </div>
      </div>
      <!--<div class="manage_body shops" v-if="form_id===3">-->
        <!--<div class="shopsrc">-->
          <!--<img :src="shopObj.image" alt="">-->
          <!--<p>{{shopObj.name}}</p>-->
        <!--</div>-->
        <!--<div class="buyButton">-->
          <!--<div class="buys" @click="recharge">充值</div>-->
          <!--<div class="buys" @click="payshop">开通商城{{shopscore}}</div>-->
        <!--</div>-->
      <!--</div>-->
      <div v-if="form_id===3">
        <van-card
          num="1"
          tag="购买"
          :price="shopscore"
          desc="描述信息"
          :title="shopObj.name"
          :thumb="shopObj.image"
        >
          <view slot="footer">
            <vant-button plain type="primary" size="mini" @click="recharge">充值</vant-button>
            <vant-button type="primary" size="mini" style="margin-left: 10px" @click="payshop">开通</vant-button>
          </view>
        </van-card>
      </div>

      <div class='manage_body' v-if="form_id===1">
        <div class='manage_body_box' @click='toyuangong' v-if="role>2">
          <img class='imags' src='/static/images/yuangong.png'>
          <div class='ps'>员工管理</div>
        </div>
        <div class='manage_body_box' @click='toconsume' v-if="role>2">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>消费记录</div>
        </div>
        <div class='manage_body_box' @click='tochongzhi' v-if="role>2">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>充值记录</div>
        </div>
        <div class='manage_body_box' @click='tokoukuan' v-if="role==2||role==5">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>商家扣款</div>
        </div>
        <div class='manage_body_box' @click='torecharge' v-if="role>=2">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>积分充值</div>
        </div>
        <div class='manage_body_box' @click='tocancel' v-if="role>=2">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>核销{{role==3?'记录':'券'}}</div>
        </div>
        <div class='manage_body_box' @click='toShareShop' v-if="role==5">
          <img class='imags' src='/static/images/anquanzhongxin.png'>
          <div class='ps'>分店统计</div>
        </div>
        <div class="buys manage_body_buy" @click="recharge" v-if="role==3">
          去充值
        </div>
      </div>
    </div>
    <div v-if="phoneModule" class="phoneMengceng">
      <div class="phonebgc">
        <div class="phone">
          <div class="phonenum">
            <input v-model.tirm="phone" placeholder="请输入手机号">
          </div>
          <div class="phoneverify">
            <input type="text" v-model.tirm="verifynum" placeholder="请输入验证码">
            <div class="submit" @click="getphone">{{verify}}</div>
          </div>
        </div>
        <div @click="submit" class="btnsubmit">确定</div>
      </div>
    </div>

    <div class="buyMoneyBgc" @click="buyModule" v-show="buyModules" :animation="buyAnimation">
      <div class="buyMoney" @click.stop="">
        <div class="buyFloor">
          <div class="buyFloor_text">
            <div>充值100元</div>
            <div>充值100，送20</div>
          </div>
          <div class="chongzhi" @click="paypay">立即充值</div>
        </div>
      </div>
    </div>

    <div class="paybgc" v-if="payModule">
      <div class="pay">
        <div class="pay_text">
          <h3>支付成功</h3>
          <p>温馨提示：请按指示步骤进行操作</p>
        </div>
        <van-steps
          :steps="steps"
          active="0"
        />
        <button @click="toMerchant" class="payButton">下一步</button>
      </div>
    </div>
  </div>
</template>

<script>
  import {
    Shop
  } from '../../http/index.js'
  let Login = new Shop()
  export default {
    data () {
      return {
        steps: [
          {
            text: '步骤一',
            desc: '购买商城'
          },
          {
            text: '步骤二',
            desc: '完善信息'
          },
          {
            text: '步骤三',
            desc: '登录商城'
          },
        ],
        // token状态
        tokenModule:false,
        iv: '',
        token: '',
        encryptedData: '',
        username:'',
        userurl:'',
        shopid:null,
        //商家信息
        shop:{},
        //总收款数
        paynum:0,
        sumscore:0,
        todayscore:0,
        //权限
        role:0,
        form_id:undefined,
        share_id:undefined,
        id:undefined,
        phone:undefined,
        //验证码状态
        verify:'获取验证码',
        verifynum:undefined,
        //验证码请求状态
        status:false,
        phoneModule:false,
        //商城信息
        shopObj:{},
        money:undefined,
        buyModules:false,
        shopscore:undefined,
        payModule:false,
        product_id:undefined,
        buyAnimation:{}
      }
    },
    onShow(){
      //注册页面返回的用户
      if(this.$root.$mp.query.user == 1){
        var that = this;
        if(users==2){
          return;
        }
        var users = this.$root.$mp.query.user;
        this.payModule = false;
        if(users===1){
          wx.showLoading({ title: '正在加载中', });
          Login.form_id()
            .then(res=>{
              this.form_id = res.data;
              return Login.shoplist()
            })
            .then(res => {
              that.shopid = res.data.myshop_id;
              that.shop = res.data.shop_info;
              that.id = res.data.id;
              //权限
              that.role = res.data.role;
              //分店id
              users = 2;
              that.getShareId();
              wx.hideLoading({ title:'加载成功' })
            })
        }
      }
    },
    //下拉刷新
    onPullDownRefresh: function() {
      if(this.token){
        var that = this;
        this.payModule = false;
        this.phoneModule = false;
        this.buyModules = false;
        wx.showLoading({ title:'loading....', icon:'loading' });
          //phone
        Login.userinfo()
          .then(res=>{
            this.username = res.data.nickname;
            this.userurl = res.data.avatar;
            this.money = res.data.score;
            if(res.data.phone){
              return Login.form_id()
            }else {
              wx.hideLoading();
              wx.stopPullDownRefresh();
              wx.showModal({title: "请先绑定手机号",content: "点击确定绑定手机号",
                success(res) {
                  if (res.confirm) {
                    that.phoneModule = true;
                  } else if (res.cancel) {
                    return false;
                  }
                }
              });
            }
          })
          //form_id
          .then(res => {
            that.form_id = res.data;
            that.tokenModule = true;
            //获取商家信息
            if(that.form_id===3){
              that.payShop()
              wx.hideLoading();
              wx.stopPullDownRefresh();
              return;
            }else if(that.form_id===2){
              that.payShop();
              this.payModule = true;
              wx.hideLoading();
              wx.stopPullDownRefresh();
              return;
            }
            //商品详情
            console.log('shopinfo請求')
            return Login.shoplist()
          })
          //shopinfo
          .then(res => {
            console.log(res);
            if (res.data.status_code == 500) {
              wx.hideLoading({success: function() {wx.showToast({title: res.data.message,icon: "none"});}});
              return;
            }else {
              that.shopid = res.data.myshop_id;
              that.shop = res.data.shop_info;
              that.id = res.data.id;
              //权限
              that.role = res.data.role;
              //分店id
              that.getShareId()
              //收款笔数
              that.getPayNum();
              wx.hideLoading();
              wx.stopPullDownRefresh();
            }
          })
      }else {
        wx.stopPullDownRefresh();
        wx.showToast({ title: '请先授权',image:'/static/images/cha.png' })
        return;
      }
    },
    onLoad(){
      Object.assign(this.$data, this.$options.data());
      this.token = wx.getStorageSync('token');
      var that = this;
      if (this.token){
        Login.userinfo()
          .then(res=>{
            console.log(res);
            Login.addshop({ shop_id: 1, user_id: res.data.id, agent_id: 0 }).then(res =>{});
            that.username = res.data.nickname;
            that.userurl = res.data.avatar;
            that.money = res.data.score;
            if(res.data.phone){
              return Login.form_id()
            }else {
              wx.showModal({title: "请先绑定手机号",content: "点击确定绑定手机号",
                success(res) {
                  if (res.confirm) {
                    that.phoneModule = true;
                  } else if (res.cancel) {
                    return false;
                  }
                }
              });
            }
          })
          .then(res=>{
            this.form_id = res.data;
            this.tokenModule = true;
            console.log('from_id:'+this.form_id);
            if (res.data === 3) {
              this.payShop()
              return;
            } else if(res.data === 2){
              this.payModule = true;
              this.payShop()
              return;
            }else {
              //获取商家信息
              return Login.shoplist()
            }
          })
          .then(res => {
            console.log('shoplist');
            console.log(res);
            this.shopid = res.data.myshop_id;
            this.shop = res.data.shop_info;
            this.role = res.data.role;
            this.getShareId()
            //获取收款笔数&今日营业
            this.getPayNum();
          })
      }else {
        this.tokenModule = false;
      }
    },
    methods: {
      getUserInfo: function() {
        wx.getSetting({
          success: (res) => {
            //点击取消按钮
            if (!res.authSetting["scope.userInfo"]) {
              return;
            } else {
              wx.showLoading({title: "授权中",icon: "loading" });
              wx.getUserInfo({
                success: (res) => {
                  this.iv = res.iv;
                  this.encryptedData = res.encryptedData;
                  var that = this;
                  // 微信登录
                  wx.login({
                    success(res) {
                      if (res.code) {
                        Login.login(res.code, that.iv, that.encryptedData)
                          .then(res => {
                            if (res.data.code === 400) {
                              wx.hideLoading({ success: function() {wx.showToast({ title: "请重试", image:'/static/images/cha.png'});} });
                              return;
                            }else {
                              that.token = `Bearer ` + res.data.data.token.access_token;
                              wx.setStorageSync('token',that.token);
                              return Login.userinfo()
                            }
                          })
                          //用户详情
                          .then(res=>{
                            Login.addshop({ shop_id: 1, user_id: res.data.id, agent_id: 0 }).then(res =>{});
                            console.log(res);
                            that.username = res.data.nickname;
                            that.userurl = res.data.avatar;
                            that.money = res.data.score;
                            if(res.data.phone){
                              return Login.form_id()
                            }else {
                              wx.hideLoading();
                              wx.showModal({title: "请先绑定手机号",content: "点击确定绑定手机号",
                                success(res) {
                                  if (res.confirm) {
                                    that.phoneModule = true;
                                  } else if (res.cancel) {
                                    return false;
                                  }
                                }
                              });
                              return;
                            }
                          })
                          //用户购买状态
                          .then(res=>{
                            that.tokenModule = true;
                            that.form_id = res.data;
                            console.log('form_id:' + res.data)
                            if (res.data === 3) {
                              //调用商城信息
                              that.payShop();
                              wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                              return;
                            }else if(res.data===2){
                              that.payModule = true;
                              that.payShop()
                              wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                              return;
                            }
                            return Login.shoplist()
                          })
                          //商城详情
                          .then(res => {
                            console.log(res);
                            if (res.data.status_code == 500) {
                              wx.hideLoading({success: function() {wx.showToast({title: res.data.message,icon: "none"});}});
                              return;
                            }else {
                              that.shopid = res.data.myshop_id;
                              that.shop = res.data.shop_info;
                              //权限
                              that.role = res.data.role;
                              that.id = res.data.id;
                              //分店id
                              that.getShareId()
                              //收款笔数
                              that.getPayNum()
                              wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                            }
                          })
                      } else {
                        // 没有授权成功的话
                        console.log("登录失败！" + res.errMsg);
                      }
                    }
                  })
                }
              });
            }
          }
        })
      },
      login(fn1){
        Login.login(res.code, that.iv, that.encryptedData)
          .then(res => {
            if (res.data.code === 400) {
              fn1();
              return;
            }else {
              that.token = `Bearer `+ res.data.data.token.access_token;
              wx.setStorageSync('token',that.token);
              return Login.userinfo()
            }
          })
      },
      //总充值和营业额
      getPayNum(){
        Login.shoukuan(this.shopid)
          .then(res=>{
            if(res.data.code===400){
              wx.showToast({ title: res.data.message, icon:'none' })
              return;
            }
            this.paynum = res.data;
            return Login.todayinfo(this.shopid)
          })
          .then(res=>{
            this.sumscore = res.data.pay_score;
            this.todayscore = res.data.score;
          })
      },
      //获取商城购买详情
      payShop(){
        Login.payshopinfo().then(res=>{
          this.shopObj = res.data.data;
          this.shopscore = res.data.data.product[0].score;
          this.product_id = res.data.data.product[0].shop_product_id;
        });
      },
      //获取分店id
      getShareId(){
        console.log(this.role);
        if(this.role==2 || this.role==5){
          Login.shareShop()
            .then(res=>{
              this.share_id = res.data.data.share_id;
            })
        }
      },
      // 获取验证码
      getphone(){
        let phone = this.phone;
        if(!){
          wx.showToast({
            title: '手机号有误',
            image:'/static/images/cha.png',
            duration: 1000
          })
          return false;
        }else {
          if(!this.status){
            //当前请求状态为正在发送请求中（用户输入验证码时间）
            Login.phone(phone)
              .then(res=>{
                this.status = true;
                this.verify = '120s';
                var that = this;
                var timeid = setInterval(function() {
                  that.verify = parseInt(that.verify);
                  that.verify--;
                  that.verify += 's';
                  if (that.verify === '0s') {
                    that.verify = '获取验证码'
                    //发生状态
                    that.status = false;
                    clearInterval(timeid);
                  }
                }, 1000);
                wx.showToast({ title: '已发送，请查收', icon: 'success', duration: 1000 })
              })
          }
        }
      },
      // 验证码提交
      submit(){
        var that = this;
        if (this.phone==''||this.verifynum==''){
          wx.showToast({ title: '请完善信息', image:'/static/images/cha.png', duration: 1000 })
          return false;
        };
        Login.updata(that.phone,that.verifynum)
          .then(res=>{
            console.log(res)
            // wx.showLoading({title: "授权中",icon: "loading" });
            if(res.data.code===200){
              wx.showToast({ title: '验证成功', icon: 'success', duration: 1000 })
                //授权成功
              that.phoneModule = false;
              Login.userinfo()
                // 用户信息
                .then(res=> {
                  that.username = res.data.nickname;
                  that.userurl = res.data.avatar;
                  that.money = res.data.score;
                  return Login.form_id()
                })
                //from_id（商城）
                .then(res => {
                  that.form_id = res.data;
                  that.tokenModule = true;
                  //获取商家信息
                  if(that.form_id===3){
                    that.payShop();
                    // wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                    return;
                  }else if(that.form_id===2){
                    that.payShop
                    that.payModule = true;
                    // wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                    return;
                  }else {
                    //店员、绑定手机号之后
                    Login.shoplist()
                      .then(res => {
                        that.shopid = res.data.myshop_id;
                        that.shop = res.data.shop_info;
                        that.role = res.data.role;
                        that.id = res.data.id;
                        that.login = true;
                        //获取收款笔数
                        that.getShareId();
                        that.getPayNum();
                        // wx.hideLoading({success: function() {wx.showToast({title: "授权成功",icon: "success" });}});
                      })
                  }
                })
            }else {
              // wx.hideLoading({success: function() {wx.showToast({title: res.data.message,icon: "success" });}});
              wx.showToast({ title: res.data.message, icon: 'success', duration: 1000 })
            }
          })
      },
      buyModule(){
        this.buyModules = false;
      },
      //开通商城
      payshop(){
        var that = this;
        Login.userinfo()
          .then(res=>{
            if(!res.data.phone){
              wx.hideLoading();
              wx.showModal({title: "请先绑定手机号",content: "点击确定绑定手机号",
                success(res) {
                  if (res.confirm) {
                    that.phoneModule = true;
                  } else if (res.cancel) {
                    return false;
                  }
                }
              });
              return;
            }else if(that.money<that.shopscore){
              wx.showModal({
                title: "余额不足",
                content: `点击进行充值`,
                success(res) {
                  if (res.confirm) {
                    that.buyModules=true;
                  } else if (res.cancel) {
                    return false;
                  }
                }
              });
            }else {
              Login.pay(that.product_id)
                .then(res=>{
                  if(res.data.code===200){
                    wx.showToast({ title:'购买成功', icon:'success' });
                    that.payModule = true;
                  } else {
                    wx.showToast({ title:res.data.message.toString(), icon:'none' })
                    return;
                  }
                })
            }
          })
      },
      //充值btn
      recharge(){
        this.buyModules = true;
      },
      //充值
      paypay(){
        var that = this;
        Login.userinfo()
          .then(res=>{
            if(res.data.phone) {
              //商场价格
              return Login.upPay(200000)
            }else {
              wx.hideLoading();
              wx.showModal({
                title: "请先绑定手机号", content: "点击确定绑定手机号",
                success(res) {
                  if (res.confirm) {
                    that.phoneModule = true;
                  } else if (res.cancel) {
                    return false;
                  }
                }
              });
              return;
            }
          })
          .then(res=>{
            if(res.data.code===200){
              wx.requestPayment({
                timeStamp: res.data.data.time.toString(),
                nonceStr: res.data.data.nonce_str,
                package: 'prepay_id='+ res.data.data.prepay_id,
                signType: 'MD5',
                paySign: res.data.data.paySign,
                success (res) {
                  Login.userinfo()
                    .then(res=>{
                      that.money = res.data.score;
                      that.buyModules = false;
                      wx.showToast({ title:'充值成功', icon:'success', duration:1000 })
                    })
                },
                fail (res) {
                  console.log(res);
                }
              })
            }else {
              wx.showToast({ title: res.data.message.toString(), icon:'none' })
            }
          })
      },
      //信息完善
      toMerchant(){
        wx.navigateTo({
          url:`/pages/merchantInfo/main`
        })
      },
      // 注册
      merchant(){
        wx.navigateTo({
          url:`/pages/merchantInfo/main`
        })
      },
      toShareShop(){
        wx.navigateTo({
          url:`/pages/shareShop/main?share_id=${this.share_id}`
        })
      },
      //收款记录
      toReceivables(){
        wx.navigateTo(`/pages/shoukuan/main?shop_id=${this.shopid}`)
      },
      //员工管理
      toyuangong(){
        wx.navigateTo({
          url:`/pages/yuangong/main?shop_id=${this.shopid}&ShareId=${this.share_id}&role=${this.role}`,
        })
      },
      // 消费记录
      toconsume(){
        wx.navigateTo({
          url:`/pages/consume/main?shop_id=${this.shopid}&role=${this.role}&share_id=${this.share_id}`,
        })
      },
      //充值记录
      tochongzhi(){
        wx.navigateTo({
          url:`/pages/chongzhi/main?shop_id=${this.shopid}&role=${this.role}`,
        })
      },
      //商家扣款
      tokoukuan(){
        wx.navigateTo({
          url:`/pages/koukuan/main?shop_id=${this.shopid}&share_id=${this.share_id}`,
        })
      },
      //积分充值
      torecharge(){
        wx.navigateTo({
          url:`/pages/jifenchongzhi/main?share_id=${this.share_id}&shop_id=${this.shopid}&id=${this.id}}&role=${this.role}`,
        })
      },
      //核销
      tocancel(){
        wx.navigateTo({
          url:`/pages/cancel/main?share_id=${this.share_id}&shop_id=${this.shopid}&role=${this.role}`,
        })
      }
    },
    onShareAppMessage(){
      return{
        title:'VIP商户端',
        path:'/pages/index/main'
      }
    }
  }
</script>

<style lang="less" scoped>
  @keyframes buy {
    from {bottom:-100%;}
    to {bottom:0px;}
  }
  @keyframes paybgc {
    from {transform:translateX(100%)}
    to {transform:translateX(0%)}
  }
  page{width: 750rpx;background-color: #f7f7f7;box-sizing: border-box}
  .pages{
    width: 750rpx;
    box-sizing: border-box;
    overflow-x: hidden;
  }
  .containav{width: 750rpx;}
  .header{height: 90rpx;width: 100%;margin-bottom: 10px;}
  .shopnames{display: flex;align-items: center; img{background-color: #fff;} }
  .longName{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    word-break: break-all;
  }
  .shopping{
    width: 750rpx;
    box-sizing: border-box;
    margin-top: 20rpx;
    margin-bottom: 20rpx;
    padding:0rpx 15rpx 0rpx 15rpx;
  }
  .icon-arrow-right-copy{margin-left: 15rpx;}
  .shopping_box{
    width: 100%;
    height: 100%;
    border-radius: 15rpx;
    background-size: 100%;
    background-image:url('data:image/png;base64,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');
  }
  /* 商家名称 */
  .shopname{
    height: 155rpx;
    font-size: 40rpx;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .shoplogin{
    height: 155rpx;
    font-size: 40rpx;
    line-height: 155rpx;
  }
  /* 今日收入 */
  .shopscore{
   display: flex;
    justify-content: space-around;
  }
  .revenue{
    height: 110rpx;
    flex-direction: column;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
  }
  .revenue_num{
    display: flex;
  }
  .icons{
    font-size: 24rpx;
    margin-top: 25rpx;
  }
  .maxnum{
    font-size: 50rpx;
    margin-left: 10rpx;
  }
  .today{
    font-size: 24rpx;
  }
  .money{
    height: 190rpx;
    display: flex;
  }

  .money_right{
    display: flex;
    flex: 1;
    flex-direction: column;
    align-items: center;
    color: #fff;
  }
  .money_left{
    display: flex;
    flex: 1;
    flex-direction: column;
    color: #fff;
    align-items: center;

  }
  .money_num{
    margin-top: 65rpx;
    margin-bottom: 10rpx;
  }

  /* 商家管理 */
  .manage{
    margin-top: 20rpx;
    box-sizing: border-box;
    background-color: #fff;
    border-bottom: 1px solid #f1f1f1;

  }
  .manage_hearde{
    height: 78rpx;
    width: 750rpx;
    box-sizing: border-box;
    display: flex;
    justify-content: left;
    align-items: center;
    padding-left: 44rpx;
    color: #7a7a7a;
  }
  .manage_body{
    width: 100%;
    flex-wrap: wrap;
    display: flex;
    box-sizing: border-box;
    background-color: #fff;
    margin-bottom: 80px;
  }
  .shops{
    display: flex;
    margin: 20px auto;
    justify-content: space-between;
    flex-direction: column;
    height: 320rpx;
    width: 60%;
    border-radius: 20px;
    border: 1px solid #bbb;
    margin-bottom: 20rpx;
    padding: 10px;
    box-sizing: border-box;
    .shopsrc{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      img{
        height: 125rpx;
        width: 125rpx;
        margin-right: 20rpx;
      }
    }
    &:last-child{
      margin-bottom: 0px;
    }
  }
  .manage_body_box{
    width: 33.3%;
    height: 237rpx;
    display: flex;
    box-sizing: border-box;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    border-right: 1px solid #f1f1f1;
    border-bottom: 1px solid #f1f1f1;
    border-left: 1px solid #f1f1f1;
  }
  .ps{
    margin-bottom: 55rpx;
  }
  .imags{
    margin-top: 60rpx;
    height: 65rpx;
    width: 50rpx;
  }
  .zijin{
    height: 55rpx;
    margin-top: 65rpx;
  }
  .button{
    width: 100%;
    height: 70rpx;
    line-height: 70rpx;
  }
  .tobuy{
    border: 1px solid #ccc;
    padding-left: 5rpx;
    padding-right: 5rpx;
    border-radius: 10rpx;
    background-color: rgb(248, 248, 248);
    font-size: 32rpx;
    color: #000;
    text-align: center;
  }

  /*电话号码*/
  .phoneMengceng{
    background-color: rgba(0,0,0,0.7);
    width: 100%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    left: 0;
    top: 0;
  }
  .phonebgc{
    width: 100%;
    position: absolute;
    z-index: 2;
    bottom: 0;
    left: 0;
    height: 50%;
    background-color: #fff;
    border-radius: 20px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    animation:buy 0.5s 1;
  }
  .phone{
    width: 100%;
    height: 100%;
    padding: 30rpx;
    position: absolute;
    bottom: 0;
    left: 0;
    box-sizing: border-box;
    .phonenum{
      background-color: transparent;
      border-radius: 20rpx;
      height: 80rpx;
      line-height: 80rpx;
      margin-bottom: 20px;
      input{
        height: 100%;
        padding-left: 10px;
        background-color: rgb(247, 248, 250);
      }
    }
    .phoneverify{
      display: flex;
      height: 80rpx;
      line-height: 80rpx;
      margin-bottom: 70rpx;
      input{
        height: 100%;
        border-radius: 20rpx;
        background-color: rgb(247, 248, 250);
        width: 70%;
        margin-right: 10px;
        box-sizing: border-box;
        padding-left: 10px;
      }
    }
    .submit{
      font-size: 14px;
      text-align: center;
      width: 200rpx;
      color: #fff;
      background-color: #07c160;
      padding-right: 5px;
      padding-left: 5px;
      border-radius: 20rpx;
    }
  }
  .buyMoneyBgc{
    position: absolute;
    width: 750rpx;
    height: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.7);
    .buyMoney{
      width: 100%;
      height: 60%;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: #fff;
      padding: 10px;
      box-sizing: border-box;
      animation:buy 0.5s 1;
      .buyFloor{
        height: 140rpx;
        border:1px solid #ccc;
        display: flex;
        box-sizing: border-box;
        border-radius: 15px;
        justify-content: space-between;
        padding: 10px;
        .buyFloor_text{
          display: flex;
          flex-direction: column;
          justify-content: space-between;
        }
        .chongzhi{
          display: flex;
          align-items: center;
          font-size: 26rpx;
          padding-left: 5px;
          padding-right: 5px;
          border-radius: 30rpx;
          color: #fff;
          text-align: center;
          line-height: 42rpx;
          background: linear-gradient(#fe841d, #f44c62);
        }
      }
    }
  }
  .btnsubmit{
    height:80rpx;
    width: 90%;
    color: #07c160;
    border: 1px solid #07c160;
    border-radius: 30rpx;
    line-height: 80rpx;
    text-align: center;
    position: absolute;
    bottom: 100rpx;
    left: 50%;
    transform: translateX(-50%);
  }
  .buyButton{
    display: flex;
    justify-content: space-between;
  }
  .buys{
    flex: 4;
    height: 42rpx;
    font-size: 26rpx;
    padding-left: 5px;
    padding-right: 5px;
    border-radius: 30rpx;
    color: #fff;
    text-align: center;
    line-height: 42rpx;
    background: linear-gradient(#fe841d, #f44c62);
  }
  .manage_body_buy{
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
    bottom: 50rpx;
    width: 300rpx;
    height: 60rpx;
    line-height: 60rpx;
  }
  .paybgc{
    position: absolute;
    width: 100%;
    z-index: 10;
    top: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,0.7);
    .pay{
      margin: 220rpx auto;
      border: 1px solid #ccc;
      border-radius: 40rpx;
      width: 80%;
      background-color: #fff;
      height: 50%;
      box-sizing: border-box;
      padding: 40rpx;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      animation:paybgc 0.5s 1;
      .payButton{
        background-color: #fff;
        color: #07c160;
        border: 1px solid #07c160;
      }
      .pay_text{
        display: flex;
        flex-direction: column;
        align-items: center;
        h3{
          margin-bottom: 60rpx;
          font-size: 48rpx;
        }
      }
    }
  }

</style>
