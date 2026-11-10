import request from '@/utils/request'

// 示例API
export const api = {
  // 获取用户信息
  getUserInfo(params) {
    return request({
      url: '/user/info',
      method: 'get',
      params
    })
  },
  
  // 更新用户信息
  updateUserInfo(data) {
    return request({
      url: '/user/info',
      method: 'put',
      data
    })
  },
  
  // 登录
  login(data) {
    return request({
      url: '/auth/login',
      method: 'post',
      data
    })
  },
  
  // 登出
  logout() {
    return request({
      url: '/auth/logout',
      method: 'post'
    })
  }
}

export default api

