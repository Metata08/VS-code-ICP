function getBotResponse(input) {
    // Simple chatbot logic
    if (input == "Bonjour") {
        return "Bonjour! Comment puis-je vous aider?";
    } else if (input == "Quels sont vos projets?") {
        return "Nous avons plusieurs projets comme l'Univers de la Démocratie, l'Univers de l'Entrepreneuriat, et l'Univers de la Paix.";
    } else if (input == "Merci") {
        return "Je vous en prie! Si vous avez d'autres questions, n'hésitez pas.";
    } else {
        return "Je ne suis pas sûr de comprendre. Pouvez-vous reformuler?";
    }
}

function sendButton() {
    let userText = document.getElementById("textInput").value;

    if (userText == "") {
        userText = "Vous n'avez rien écrit!";
    }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';
    document.getElementById("textInput").value = "";
    document.getElementById("chatbox").innerHTML += userHtml;

    setTimeout(() => {
        let botResponse = getBotResponse(userText);
        let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
        document.getElementById("chatbox").innerHTML += botHtml;
        document.getElementById("chatbox").scrollTop = document.getElementById("chatbox").scrollHeight;
    }, 1000);
}
