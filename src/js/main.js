const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },
  created() {
    axios.get("info.php").then((response) => {
      this.albums = response.data;
      console.log(this.albums);
    });
  },
}).mount("#app");
