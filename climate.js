function getWeather() {
  let oldrain = document.getElementById("oldrain");

  let api = "https://pro.openweathermap.org/data/2.5/forecast/climate";
  let apiKey = "6cb1eeecda3ed239a6e604ffa4948ac5";

  location.innerHTML = "Locating...";

  navigator.geolocation.getCurrentPosition(success, error);

  function success(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    let url =
      api +
      "?lat=" +
      latitude +
      "&lon=" +
      longitude +
      "&appid=" +
      apiKey +
      "&units=imperial";

      console.log(url)
    fetch(url)
      .then(response => response.json())
      .then(data => {
        console.log(data);
        let newrain = data.list.rain;
        myrain = newrain.toFixed(2);
        oldrain.innerHTML = "Hello" + "mm";
      });
  }

  function error() {
    location.innerHTML = "Unable to retrieve your location";
  }
}

getWeather();