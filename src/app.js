import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue  (
  {
    el: '#app',
    data: {
      logo: "img/1280px-Spotify_logo_with_text.svg.png",
    },
    mounted: function(){
      axios.get("db.php").then((response) => {
        console.log(responde.data);
      });
    }
  }
);
