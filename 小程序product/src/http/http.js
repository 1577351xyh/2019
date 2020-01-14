// 请求封装
class Http {
  config = "https://198.yiyefei.com/api"
  // svip.swicode.com/
  request({url,data,method}){
    return new Promise((resole,reject)=>{
      this._request(url,data,method,resole,reject)
    })
  }
  _request(url,data,method,resole,reject){
    wx.request({
      url: this.config + url,
      header:{
        Authorization:wx.getStorageSync('token')
      },
      method:method ||"GET",
      data:data||{},
      success:(data)=>{
        if(data.statusCode===200){
          resole(data)
        } else if(data.statusCode===500 && data.data.message == 'Unauthenticated.') {
          console.log(data);
          wx.showModal({
            title:'提示',
            content:'登录过期，请重新登录',
            success(res){
              if (res.confirm) {
                wx.removeStorageSync('token')
                wx.reLaunch({ url: '/pages/index/main' })
              }
            }
          })
        }else{
          wx.showModal({
            title:'提示',
            content:data.data.message,
            success(res){
              if (res.confirm) {
                console.log(data);
              }
            }
          })
        }
      }
    })
  }
}
export {Http}
