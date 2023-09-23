<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: azure;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* 100% of the viewport height */
        }

        /* Apply styles to the form and other elements within the container */
        .message-form {
            max-width: 400px;
            background-color: #ebe8e8;;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            background-color: #fff;
            border: 1px solid #05fc2c;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex; /* Enable flex layout for the message and button */
            justify-content: space-between; /* Space-between layout for message and button */
            align-items: center; /* Align items vertically in the center */
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 50%; /* Make the button round */
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
    </style>

</head>
<body>
    <h1>Chat</h1>
    <div class="container">
        <div class="message-form">
    

    <!-- Display sent messages here -->
    <ul id="messages"></ul>

    <form onsubmit="return sendMessage();">
        <label for="message">Message:</label>
        <input id="message" name="message" placeholder="Enter message" required>
        <button type="submit">Send Message</button>
    </form>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <script>
        const firebaseConfig = {
  apiKey: "AIzaSyC5OWhHS11bJ4_xRfGN1j36LpBWw6e9DXg",
  authDomain: "chat-e9f2e.firebaseapp.com",
  projectId: "chat-e9f2e",
  storageBucket: "chat-e9f2e.appspot.com",
  messagingSenderId: "564296918587",
  appId: "1:564296918587:web:11c6cca1903e6af3265e1e",
  measurementId: "G-1ZWMDSYRSX"
};

        const app = firebase.initializeApp(firebaseConfig);
        const analytics = firebase.analytics();
        const db = firebase.database();

        var myName = prompt("Enter your name");

        function sendMessage() {
            var message = document.getElementById("message").value;
            db.ref("messages").push().set({
                sender: myName,
                message: message,
            });
            document.getElementById("message").value = ""; // Clear the input field
            return false; // Prevent the form from submitting normally
        }

        // Listen for new messages and display them in real-time
        const messageList = document.getElementById("message-list");
        db.ref("messages").on("child_added", (snapshot) => {
            var html="";
            html+="<li id='message-"+snapshot.key+"'>";
            if(snapshot.val().sender==myName){
                html+="<button data-id='"+snapshot.key+"'onclick='deleteMessage(this);'>";
                html+="Delete";
                html+="</button>";
            }
            html+=snapshot.val().sender+": "+snapshot.val().message;
            html+="</li>";
            document.getElementById("messages").innerHTML+=html;
        });

        function deleteMessage(self){
            var messageId=self.getAttribute("data-id");
            firebase.database().ref("messages").child(messageId).remove();
        }

        firebase.database().ref("messages").on("child_removed",function(snapshot){
             document.getElementById("message-"+snapshot.key).innerHTML="This message has been removed";
        });

    </script>
</body>
</html>



