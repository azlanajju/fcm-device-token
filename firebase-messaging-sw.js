importScripts("https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js",
);
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts(
    "https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js",
);

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
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
importScripts("https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js");
importScripts(
  "https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js",
);
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts(
  "https://www.gstatic.com/firebasejs/7.16.1/firebase-analytics.js",
);

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
  apiKey: "your-api-key",
  authDomain: "your-auth-domain",
  databaseURL: "your-database-url",
  projectId: "your-project-id",
  storageBucket: "your-storage-bucket",
  messagingSenderId: "your-sender-id",
  appId: "your-app-id",
  measurementId: "your-measurement-id",
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
  console.log(
    "[firebase-messaging-sw.js] Received background message ",
    payload
  );

  // Extract the notification message from the payload
  const notificationData = payload.notification;
  const notificationTitle = notificationData.title;
  const notificationBody = notificationData.body;
  const notificationIcon = notificationData.icon;

  const notificationOptions = {
    body: notificationBody,
    icon: notificationIcon,
  };

  return self.registration.showNotification(
    notificationTitle,
    notificationOptions
  );
});
