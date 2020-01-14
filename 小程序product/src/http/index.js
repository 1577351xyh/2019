import { Http } from './http.js'

class Shop extends Http {
  // 用户登录
  login (code, iv, encryptData) {
    return this.request({
      url: "/account/merchantLogin",
      method: 'POST',
      data: {
        code,
        iv,
        encryptData
      }
    })
  }
  //userinfo
  userinfo(){
    return this.request({
      url:'/user/userInfo',
    })
  }
  // 购买状态
  form_id(){
    return this.request({
      url:'/account/checkShopRegister',
    })
  }
  //加入商城
  addshop({shop_id,user_id,agent_id}){
    return this.request({
      url:'/shop/addShop',
      method:'POST',
      data:{
        shop_id,
        user_id,
        agent_id
      }
    })
  }
  //商城信息
  payshopinfo(){
    return this.request({
      url:'/coupon/shopRegisterProduct',
    })
  }
  //用户商城信息
  shopUsersInfo(){
    return this.request({
      url:'/user/shopUsersInfo/1',
    })
  }
  // 商戶今日概括
  todayinfo(shopid){
    return this.request({
      url:`/merchant/shopDayInfo/${shopid}`,

    })
  }
  // 分店日统计
  ShareDayShop(shareid){
    return this.request({
      url:`/finance/oneShareDayCount/${4}`,
    })
  }
  //商城详情
  shoplist(){
    return this.request({
      url:`/merchant/hookShop`,
    })
  }
  // 商城用户消费总记录
  derlog (shopid,page) {
    return this.request({
      url: `/merchant/shopUsersPayLog/${shopid}`,
      data:{
        page
      }
    })
  }

  //分店消费记录
  shareUsersPayLog(shareid,page){
    return this.request({
      url: `/merchant/shareUsersPayLog/${shareid}`,
      data:{
        page
      }
    })
  }

  //分店收款记录
  sharesUsersPayLog(share,page){
    return this.request({
      url:`/merchant/shareReceivablesLog/${share}`,
      data:{
        page
      }
    })
  }



    //收款笔数
  shoukuan(shopid){
    return this.request({
      url: `/merchant/receivables/${shopid}`,
    })
  }
  //充值记录（总店充值）
  userchongzhi(shopid,page){
    return this.request({
      url: `/merchant/receivablesLog/${shopid}`,
      data:{
        page
      }
    })
  }
  //分店充值
  Sharechongzhi(shopid,page){
    return this.request({
      url:`/merchant/shareReceivablesLog/${shopid}`,
      data:{
        page
      }
    })
  }

  //管理员--员工列表
  yuangonglist(shopid){
    return this.request({
      url: `/merchant/shopStaffRule/${shopid}`,
    })
  }

  //店长员工列表
  DianYuanGongList(shopid){
    return this.request({
      url: `/merchant/staffRule/${shopid}`,
    })
  }
  //查询员工
  searchUser(phone){
    return this.request({
      url:`/merchant/findUserByPhone/${phone}`,
    })
  }

  //商家扣款
  koukuan(data){
    return this.request({
      url:"/merchant/getReceivablesCode",
      data:data
    })
  }

  //分店积分充值记录
  getScore(shareid,page){
    return this.request({
      url:`/merchant/shareIntegralLog/${shareid}`,
      data:{
        page
      }
    })
  }
  //总店积分充值记录
  SumScore(shop_id,page){
    return this.request({
      url:`/merchant/integralLog/${shop_id}`,
      data:{
        page
      }
    })
  }
  //店员积分充值记录
  UserScore(shareid,page){
    return this.request({
      url:`/merchant/staffIntegralLog/${shareid}`,
      data:{
        page
      }
    })
  }

  // 获取积分码
  ScoreCode(data){
    return this.request({
      url:`/merchant/giftScoreCode`,
      data:data
    })
  }
  //核销
  getcancel(result,share_id){
    return this.request({
      url:`/coupon/writeOffCoupon`,
      method:"POST",
      data:{
        coupon:result,
        share_id:share_id
      }
    })
  }
  //总核销记录
  Sumshare(shopid,page){
    return this.request({
      url:`/merchant/writeOffLog/${shopid}`,
      data:{
        page
      }
    })
  }
  //分店核销记录
  getshare(shareid,page){
    return this.request({
      url:`/merchant/shareWriteOffLog/${shareid}`,
      data:{
        page
      }
    })
  }

  //店员核销
  userShare(shareid,page){
    return this.request({
      url:`/merchant/staffWriteOffLog/${shareid}`,
      data:{
        page
      }
    })
  }

  //更新权限
  postrole(shop_id,user_id,share_id,role){
    return this.request({
      url:`/merchant/updateStaffRule`,
      method:"POST",
      data:{
        shop_id,
        user_id,
        share_id,
        role
      }
    })
  }
  //验证码
  phone(phone){
    return this.request({
      url:`/account/smsCode/${phone}`
    })
  }
  //更新phone
  updata(phone,code){
    return this.request({
      url:'/user/updateUserInfo',
      method:'POST',
      data:{
        birthday:'2222',
        phone,
        code,
        gender:1,
        address:'商户端任意地址'
      }
    })
  }
  //下单bug
  pay(product_id){
    return this.request({
      url:'/coupon/shopBuyProduct',
      method:'POST',
      data:{
        product_id,
      }
    })
  }
  //充值
  upPay(score){
    return this.request({
      url:'/pay/pay2',
      method:'POST',
      data:{
        shop_id:1,
        score
      }
    })
  }
  //商城类别
  shoptype(){
    return this.request({
      url:'/shop/shopProductType/1',
    })
  }
  //商城列表
  merchantshoplist(product_type){
    return this.request({
      url:`/shop/shopProduct/${product_type}`,
    })
  }
  //商城注册
  merchantshop({password,name,short,desc,address,qualify,inv_phone}){
    return this.request({
      url:`/account/registerShop`,
      method:'POST',
      data:{
        password,
        name,
        short,
        desc,
        address,
        qualify,
        inv_phone
      }
    })
  }
  //获取分店share
  shareShop(){
    return this.request({
      url:'/merchant/userShareInfo',
    })
  }

  //分店列表
  shopAdminSharelist(){
    return this.request({
      url:'/shopAdmin/shareList',
    })
  }
}

export {Shop}
