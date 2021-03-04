
var app = new Vue({
 el: '#root',
 data:{
   disk:[],


 },
 mounted(){
   const self = this;
   axios.get("http://localhost/php/php-ajax-dischi/app/server.php")
   .then(function(result){
     self.disk = result.data;
     console.log(self.disk);
   })
 }
});
Vue.config.devtools = true
