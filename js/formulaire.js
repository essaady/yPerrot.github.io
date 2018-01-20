var config = {
  apiKey: "AIzaSyCgQbqhKv8GClr92EBfQb9R5ikSfw-VEwc",
  authDomain: "portfolio-7e823.firebaseapp.com",
  databaseURL: "https://portfolio-7e823.firebaseio.com",
  projectId: "portfolio-7e823",
  storageBucket: "portfolio-7e823.appspot.com",
  messagingSenderId: "161950436179"
};
firebase.initializeApp(config);

var database = firebase.database();

/*database.ref("data/").set({
  "users": "Oui"
})*/

function formulaire() {
  var nom = ($("input#icon_prefix")[0].value)
  var tel = ($("input#icon_telephone")[0].value)
  var mail = ($("input#email")[0].value)
  var msg = ($("textarea#icon_prefix2")[0].value)
  database.ref("message: "+Date.now()).set({
    "nom": nom,
    "tel" : tel,
    "mail" : mail,
    "msg" : msg,
  })
}
