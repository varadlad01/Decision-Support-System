function getWeather() {
  let temperature = document.getElementById("temperature");
  // let description = document.getElementById("description");
  let location = document.getElementById("location");
  let degree = document.getElementById("degree");

  let api = "https://api.openweathermap.org/data/2.5/weather";
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
        let temp = data.main.temp;
        mytemp = temp.toFixed(1);
        temperature.innerHTML = mytemp + "° F";
        let mydegree = (temp - 32) * 5/9 ;
        var celcius = mydegree.toFixed(2);
        degree.innerHTML = celcius + "° C";
        location.innerHTML =data.name;
      });
  }

  function error() {
    location.innerHTML = "Unable to retrieve your location";
  }
}

getWeather();