import Vue from 'vue'
import axios from 'axios'

axios.defaults.baseURL = '/api'
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
axios.defaults.withCredentials = true

// Add a request interceptor
axios.interceptors.request.use(function (config) {
    // Do something before request is sent
    return config
}, function (error) {
    // Do something with request error
    return Promise.reject(error)
});

// Add a response interceptor
axios.interceptors.response.use(function (response) {
    // Do something with response data
    return response.data
}, function (error) {
    switch (error.response.status) {
        case 401: window.location.href = '/login';
    }
    // Do something with response error
    return Promise.reject(error)
});

Vue.prototype.$http = axios

Vue.prototype.$get = function(params) {
    return axios.get('/', {
        params: params
    });
}

Vue.prototype.$post = function(params) {
    return axios.axios.post('/', data);
}

export default axios;