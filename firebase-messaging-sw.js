importScripts('https://www.gstatic.com/firebasejs/9.6.1/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.6.1/firebase-messaging-compat.js');

firebase.initializeApp({
    apiKey: "AIzaSyCAFONpVRASRlZPeCVqekIj1OXvhXtFOEQ",
    authDomain: "fir-api-c0d9d.firebaseapp.com",
    databaseURL: "https://fir-api-c0d9d-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "fir-api-c0d9d",
    storageBucket: "fir-api-c0d9d.appspot.com",
    messagingSenderId: "911248093259",
    appId: "1:911248093259:web:794df2cb81aa7b5a0e1dce",
    measurementId: "G-6ZR5R12NB3"
});

const messaging = firebase.messaging();
