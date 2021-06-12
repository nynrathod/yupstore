// Firebase App (the core Firebase SDK) is always required and must be listed first
import * as firebase from "firebase/app";

// Add the Firebase products that you want to use
import "firebase/auth";
import "firebase/database";

// PUT YOUR OWN FIREBASE CONFIGURATION HERE
var firebaseConfig = {
  apiKey: "AIzaSyCM8IqQt-un_08y8fSTy2oSeaz75IFzYR4",
  authDomain: "flex-chat-9a41c.firebaseapp.com",
  databaseURL: "https://flex-chat-9a41c.firebaseio.com",
  projectId: "flex-chat-9a41c",
  storageBucket: "flex-chat-9a41c.appspot.com",
  messagingSenderId: "474943941668",
  appId: "1:474943941668:web:2400bd8de57bbcebf93cb1"
};
// Initialize Firebase
let firebaseApp = firebase.initializeApp(firebaseConfig);
let firebaseAuth = firebaseApp.auth()
let firebaseDb = firebaseApp.database()

export { firebaseAuth, firebaseDb }