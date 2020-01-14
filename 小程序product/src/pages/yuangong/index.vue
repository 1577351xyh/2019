<template>
  <div>
    <div class="user" v-for="(item,index) in arr" :key="index">
      <div class="user_item">
        <img :src="item.users.avatar" alt="">
        <div class="role">
          <p>姓名：{{item.users.nickname}}</p>
          <p class="newrole">当前身份：{{item.role}}</p>
        </div>
      </div>
      <div class="section" v-if="toRoles==3">
        <picker @change="bindPickerChange" @click="changes(item)" :value="value" :range="arrs">
          <div class="picker change">
            修改权限
          </div>
        </picker>
      </div>
    </div>
    <div v-if="arr.length==0" class="buttons">您店下还没有任何员工</div>
    <div class="addUser" @click="addUser" v-if="toRoles==3">新增员工</div>
    <div class="addUserBgc" v-if="addUserModule">
      <div class="userBox">
        <div class="userTitle">
          <div>添加员工</div>
          <i class="iconfont icon-cross" @click="close"></i>
        </div>
        <div class="user_body">
          <div class="search">
            <input type="text" v-model.tirm.number="phone">
            <div class="searchIcon" @click="searchPhone"><i class="iconfont icon-fangdajing"></i>搜索</div>
          </div>
          <div class="searchRes">
            <div>搜索结果</div>
            <div class="userInfo" v-if="searchModule">
              <div class="userInfoBox">
                <img :src="userObj.avatar" class="nameImg">
                <div class="namePhone">
                  <p class="name">{{userObj.nickname}}</p>
                  <p class="phone">{{userObj.phone}}</p>
                </div>
              </div>
              <div class="pickerBox">
                <picker @change="fendianChange"  :value="dataarr.id" :range="dataarr" range-key="name">
                  <div class="picker change">
                    <p class="fendian">选择分店</p>
                  </div>
                </picker>
                <span class="sharetext">{{p}}</span>
              </div>
              <div class="userInfoAdd" @click="addUserButton">添加</div>
            </div>
            <div class="userInfo phones" v-if="!searchModule && !NoPhone">暂无搜索结果</div>
            <div class="userInfo phones" v-else-if="NoPhone">该用户没有绑定手机号</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import {
    Shop
  } from '../../http/index.js'
  let User = new Shop()
  export default{
    data(){
      return{
        p:"",
        ids:undefined,
        dataarr:[],
        shopid:undefined,
        arr:[],
        role:undefined,
        value:undefined,
        shareValue:1,
        arrs:['移除权限','店员','店长'],
        userid:undefined,
        postrole:undefined,
        share_id:undefined,
        phone:undefined,
        userObj:{},
        searchModule:false,
        NoPhone:false,
        addUserModule:false,
        addShareId:undefined,
        toRoles:undefined
      }
    },
    onShow(){
      this.addUserModule=false;
      this.searchModule=false;
    },
    methods:{
      PostUser(shopid,userid,share_id,postrole){
        User.postrole(shopid,userid,share_id,postrole)
          .then(res=>{
            if(res.data.code==200){
              this.getarr(this.shopid)
              wx.showToast({ title: "修改成功", icon: "success", duration: 400 });
            }else if (res.data.code===400) {
              wx.showToast({ title:res.data.message, icon:'none' })
            }else {
              wx.showToast({ title:res.data.message, icon:'none' })
            }
          })
      },
      bindPickerChange: function (e) {
        let values = parseInt(e.mp.detail.value);
        if(values==0){
          this.postrole = 1;
        }else if(values==1){
          this.postrole= 2;
        }else if(values==2){
          this.postrole= 5;
        }
        this.PostUser(this.shopid,this.userid,this.share_id,this.postrole)
      },
      fendianChange(e){
        for (let i = 0; i<this.dataarr.length;i++){
          if(i==e.mp.detail.value){
            this.p=this.dataarr[i].name;
            this.ids = this.dataarr[i].id;
          }
        };
      },
      changes(data){
        this.userid = data.user_id;
        this.share_id = data.share_id;
      },
      getarr(shopid){
        User.yuangonglist(shopid)
          .then(res=>{
            console.log(res);
            for (let i = 0 ; i<res.data.length;i++){
              if(res.data[i].role==2){
                res.data[i].role = '店员'
              }else if(res.data[i].role==5){
                res.data[i].role = '店长'
              }
            };
            this.arr = res.data;
          })
      },
      getShopUser(shopid){
        //店长
        User.DianYuanGongList(shopid)
          .then(res=>{
            for (let i = 0;i<res.data.length;i++){
              if(res.data[i].role==2){
                res.data[i].role = '店员'
              }else if(res.data[i].role==5){
                res.data[i].role = '店长'
              }
            };
            this.arr = res.data;
          })
      },
      searchPhone(){
          if(!(/^1[3456789]\d{9}$/.test(this.phone))){
            wx.showToast({ title: '请检查号码', icon: 'success', duration: 1000 })
            return false;
          }
        User.searchUser(this.phone)
          .then(res=>{
            if (res.data.code===400){
              this.NoPhone = true;
              return
            }else if(res.statusCode===200){
              this.userObj = res.data;
              this.searchModule = true;
              return User.shopAdminSharelist()
            }
          })
          .then(res=>{
            if(res.statusCode===200){
              this.dataarr = res.data.data;
              console.log(this.dataarr);
            }else {
              wx.showToast({ title: res.data.message})
            }
          })
      },
      addUser(){
        this.addUserModule = true;
      },
      close(){
        this.addUserModule = false;
      },
      addUserButton(){
        this.PostUser(this.shopid,this.userObj.id,this.ids,2)
      }
    },
    mounted() {
      // 接收传入的 id
      this.shopid = this.$root.$mp.query.shop_id;
      //只有店员和店长有
      this.addShareId = this.$root.$mp.query.ShareId;
      this.toRoles = this.$root.$mp.query.role;
      if(this.toRoles==3){
        //管理员
        this.getarr(this.shopid)
      }else if(this.toRoles==5){
        //店长
        this.getShopUser(this.shopid)
      }
    },
  }
</script>
<style lang="less" scoped>
  @keyframes user {
    from {transform:translate(100%,40%);}
    to {transform:translate(0%,40%);
      }
  }
  .sharetext{
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    word-break: break-all;
  }
  .pickerBox{
    display: flex;
    width: 100%;
    height: 60rpx;
    line-height: 60rpx;
    justify-content: flex-start;
    align-items: center;
  }
  .fendian{
    padding: 0 6px;
    margin-right: 10px;
    color: #fff;
    border-radius: 20px;
    background: linear-gradient(#fe841d, #f44c62);
    font-size: 14px;
  }
.user{
  padding: 20rpx;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #ccc;
  .user_item{
    display: flex;
    align-items: center;
    padding-bottom: 10rpx;
    .role{
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      font-size: 28rpx;
      .newrole{
        margin-top: 10rpx;
      }
    }
  }
  img{
    height: 120rpx;
    width: 120rpx;
    border-radius: 50%;
    margin-right: 30rpx;
    border: 1px solid #ccc;
  }
  .change{
    border: 1px solid #ccc;
    width: 150rpx;
    height: 60rpx;
    border-radius: 10rpx;
    text-align: center;
    line-height: 60rpx;
    font-size: 12px;
  }
}
.addUser{
  position: fixed;
  left: 70%;
  bottom: 50rpx;
  height: 60rpx;
  line-height: 60rpx;
  font-size: 26rpx;
  padding-left: 10px;
  padding-right: 10px;
  border-radius: 30rpx;
  color: #fff;
  text-align: center;
  background: linear-gradient(#fe841d, #f44c62);
}
.addUserBgc{
  position: absolute;
  width: 750rpx;
  top: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0,0,0,0.1);
  .userBox{
    width: 80%;
    height: 700rpx;
    margin: 0 auto;
    transform: translateY(40%);
    border-radius: 20px;
    border: 1px solid #cccccc;
    background-color: #fff;
    box-sizing: border-box;
    overflow: hidden;
    animation: user 0.5s 1;
    .userTitle{
      display: flex;
      height: 80rpx;
      justify-content: center;
      background-color: #eee;
      align-items: center;
      position: relative;
      .icon-cross{
        position: absolute;
        right: 10px;
        top: 10px;
      }
    }
    .user_body{
      padding: 10px;
      width: 100%;
      height: 80%;
      box-sizing: border-box;
    }
    .search{
      display: flex;
      height: 60rpx;
      border: 1px solid #ccc;
      align-items: center;
      .searchIcon{
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 20%;
        height: 100%;
      }
      input{
        height: 100%;
        width: 80%;
        border: 1px solid #ccc;
        box-sizing: border-box;
        padding-left: 10px;
      }
    }
    .searchRes{
      margin-top: 10px;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      height: 490rpx;
      border-radius: 10px;
      .userInfo{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 90%;
        .userInfoBox{
          margin-top: 20px;
          display: flex;
          .nameImg{
            width: 100rpx;
            height: 100rpx;
            border-radius: 50%;
            background-color: pink;
          }
          .namePhone{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-left: 10px;
          }
        }
        .userInfoAdd{
          display: flex;
          width: 50%;
          align-items: center;
          height: 60rpx;
          justify-content: center;
          margin: 0 auto;
          color: #fff;
          border-radius: 20px;
          background: linear-gradient(#fe841d, #f44c62);
        }
      }
      .phones{
        display: flex;
        align-items: center;
        justify-content: center;

      }
    }
  }
}
.changes{
  font-size: 14px;
  text-align: center;
  line-height: 60rpx;
  width: 150rpx;
  height: 60rpx;
  padding-left: 5px;
  padding-right: 5px;
}
.buttons{
  height: 100rpx;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #cccccc;
}


  .zq-drop-list{
    display: inline-block;
    min-width: 100px;
    position: relative;
    span{
      display: block;
      height: 30px;
      line-height: 30px;
      background: #f1f1f1;
      font-size: 14px;
      text-align: center;
      color: #333333;
      border-radius: 4px;
      i{
        background: url(https://www.easyicon.net/api/resizeApi.php?id=1189852&size=16) no-repeat center center;
        margin-left: 6px;
        display: inline-block;
      }
    }
    ul{
      position: absolute;
      top: 30px;
      left: 0;
      width: 100%;
      margin: 0;
      padding: 0;
      border: solid 1px #f1f1f1;
      border-radius: 4px;
      overflow: hidden;
      li{
        list-style: none;
        height: 30px;
        line-height: 30px;
        font-size: 14px;
        border-bottom: solid 1px #f1f1f1;
        background: #ffffff;
      }
      li:last-child{
        border-bottom: none;
      }
      li:hover{
        background: #f6f6f6;
      }
    }
  }

</style>
